<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function indexDashboard(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Base queries
        $orderQuery = Order::query();
        
        if ($startDate && $endDate) {
            $start = Carbon::parse($startDate)->startOfDay();
            $end = Carbon::parse($endDate)->endOfDay();
            $orderQuery->whereBetween('created_at', [$start, $end]);
        }

        // TOTAL COUNTS
        $totalSales = (clone $orderQuery)->where('payment_status', 'paid')->sum('total_amount');
        $totalIncome = (clone $orderQuery)->where('payment_status', 'paid')->sum('total_amount');
        $totalPaidOrders = (clone $orderQuery)->where('payment_status', 'paid')->count();
        $totalOrders = (clone $orderQuery)->count();
        $totalProducts = Product::count();

        // RECENT ORDERS (Last 7 Days) - Always show last 7 days unless we want this filtered too
        // For dashboard consistency, usually charts have their own logic but can be influenced.
        // Let's keep the charts as they are (7 days and monthly) unless specified.
        // Actually, if a user filters for a year, "Recent Orders" should probably show that year's data?
        // No, "Recent" implies current. But "Monthly Sales" is current year.
        
        // RECENT ORDERS CHART DATA
        if ($startDate && $endDate) {
            $start = Carbon::parse($startDate)->startOfDay();
            $end = Carbon::parse($endDate)->endOfDay();
            
            $recentOrdersData = Order::whereBetween('created_at', [$start, $end])
                ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                ->groupBy('date')
                ->orderBy('date')
                ->get();
        } else {
            $recentOrdersData = Order::whereDate('created_at', '>=', Carbon::now()->subDays(7))
                ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                ->groupBy('date')
                ->orderBy('date')
                ->get();
        }

        $recentOrdersLabels = $recentOrdersData->pluck('date');
        $recentOrdersCounts = $recentOrdersData->pluck('total');

        // MONTHLY SALES CHART DATA
        if ($startDate && $endDate) {
            $start = Carbon::parse($startDate)->startOfDay();
            $end = Carbon::parse($endDate)->endOfDay();

            $monthlySalesData = Order::where('payment_status', 'paid')
                ->whereBetween('created_at', [$start, $end])
                ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, SUM(total_amount) as total')
                ->groupBy('year', 'month')
                ->orderBy('year')
                ->orderBy('month')
                ->get();
            
            $monthlySalesLabels = [];
            $monthlySalesTotals = [];
            foreach ($monthlySalesData as $data) {
                $monthlySalesLabels[] = Carbon::create()->year($data->year)->month($data->month)->format('M Y');
                $monthlySalesTotals[] = $data->total;
            }
        } else {
            $monthlySalesData = Order::where('payment_status', 'paid')
                ->whereYear('created_at', Carbon::now()->year)
                ->selectRaw('MONTH(created_at) as month, SUM(total_amount) as total')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            $monthlySalesLabels = [];
            $monthlySalesTotals = [];

            for ($i = 1; $i <= 12; $i++) {
                $monthlySalesLabels[] = Carbon::create()->month($i)->format('M');
                $monthData = $monthlySalesData->firstWhere('month', $i);
                $monthlySalesTotals[] = $monthData ? $monthData->total : 0;
            }
        }

        // PRODUCT OVERVIEW (Latest 10)
        $products = Product::with('category')
            ->latest()
            ->paginate(10);


        // RECENT ORDERS LIST (Latest 10)
        $orders = (clone $orderQuery)->latest()
            ->take(10)
            ->get();

        return view('admin.index', compact(
            'totalSales',
            'totalIncome',
            'totalProducts',
            'totalPaidOrders',
            'totalOrders',
            'products',
            'orders',
            'recentOrdersLabels',
            'recentOrdersCounts',
            'monthlySalesLabels',
            'monthlySalesTotals',
            'startDate',
            'endDate'
        ));
    }

    public function indexOrders()
    {
        $orders = Order::with('user', 'items.product')->latest()->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }

    public function showOrder($id)
    {
        $order = Order::with(['items.product', 'billingAddress', 'shippingAddress', 'user'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate([
            'order_status' => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        $order = Order::findOrFail($id);
        $order->update(['order_status' => $request->order_status]);

        return redirect()->back()->with('success', 'Order status updated successfully!');
    }

    public function editOrder($id)
    {
        $order = Order::with(['items.product', 'billingAddress', 'shippingAddress', 'user'])->findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $request->validate([
            'order_status' => 'required|in:pending,confirmed,shipped,delivered,cancelled',
            'payment_status' => 'required|in:pending,paid,failed',
            'order_notes' => 'nullable|string',
        ]);

        $order->update([
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
            'order_notes' => $request->order_notes,
        ]);

        return redirect()->route(\App\Constants\RouteNames::ADMIN_ORDER_LIST)->with('success', 'Order updated successfully!');
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route(\App\Constants\RouteNames::ADMIN_ORDER_LIST)->with('success', 'Order deleted successfully!');
    }
}
