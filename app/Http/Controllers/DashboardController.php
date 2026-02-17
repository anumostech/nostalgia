<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function indexDashboard()
    {
        // TOTAL COUNTS

        $totalSales = Order::where('payment_status', 'paid')->sum('total_amount');
        $totalIncome = Order::where('payment_status', 'paid')->sum('total_amount');
        $totalProducts = Product::count();
        $totalPaidOrders = Order::where('payment_status', 'paid')->count();

        // RECENT ORDERS (Last 7 Days)

        $recentOrdersData = Order::whereDate('created_at', '>=', Carbon::now()->subDays(7))
            ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $recentOrdersLabels = $recentOrdersData->pluck('date');
        $recentOrdersCounts = $recentOrdersData->pluck('total');

        // MONTHLY SALES (Current Year)

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

        // PRODUCT OVERVIEW (Latest 10)

        $products = Product::with('category')
            ->latest()
            ->paginate(10);


        // RECENT ORDERS LIST (Latest 10)
        $orders = Order::latest()
            ->take(10)
            ->get();

        return view('admin.index', compact(
            'totalSales',
            'totalIncome',
            'totalProducts',
            'totalPaidOrders',
            'products',
            'orders',
            'recentOrdersLabels',
            'recentOrdersCounts',
            'monthlySalesLabels',
            'monthlySalesTotals'
        ));
    }
}
