<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: 20px auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        .header { text-align: center; border-bottom: 2px solid #333; padding-bottom: 10px; }
        .order-info { margin: 20px 0; }
        .order-id { font-size: 24px; font-weight: bold; color: #333; }
        .details-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .details-table th, .details-table td { border: 1px solid #eee; padding: 12px; text-align: left; }
        .details-table th { background-color: #f9f9f9; }
        .footer { margin-top: 30px; font-size: 14px; text-align: center; color: #777; }
        .btn { display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Your Order!</h1>
        </div>
        
        <div class="order-info">
            <p>Dear {{ $order->billingAddress->billing_first_name }},</p>
            <p>Your order has been successfully placed. We are processing it and will update you soon.</p>
            <p>Your Order Number is:</p>
            <p class="order-id">{{ $order->order_number }}</p>
        </div>

        <h3>Order Summary</h3>
        <table class="details-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>AED {{ number_format($item->price, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Subtotal</th>
                    <td>AED {{ number_format($order->subtotal, 2) }}</td>
                </tr>
                <tr>
                    <th colspan="2">VAT (5%)</th>
                    <td>AED {{ number_format($order->vat_total, 2) }}</td>
                </tr>
                <tr>
                    <th colspan="2">Total Amount</th>
                    <td><strong>AED {{ number_format($order->total_amount, 2) }}</strong></td>
                </tr>
            </tfoot>
        </table>

        <div style="text-align: center;">
            <p>You can track your order using this Order number on the ‘Track Your Order’ page.</p>
            <a href="{{ route(\App\Constants\RouteNames::TRACK_YOUR_ORDER, ['order_id' => $order->order_number, 'email' => $order->billingAddress->billing_email]) }}" class="btn">Track Your Order</a>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Nostalgia Sweets. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
