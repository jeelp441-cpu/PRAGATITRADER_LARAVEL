<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class PaymentController extends Controller
{
    // Show fake payment page
    public function show(Request $request)
    {
        // Ensure products exist
        if (!is_array($request->products) || empty($request->products)) {
            return redirect('/order-product')
                ->with('error', 'Your cart is empty. Please add products.');
        }

        // Normalize indexes
        $products = array_values($request->products);

        return view('payment', compact('products'));
    }

    // Save order and redirect to home
    public function success(Request $request)
{
    // 🔒 SAFETY: stop if no products
    if (!$request->has('products')) {
        return redirect('/order-product')
            ->with('error', 'No products received. Please order again.');
    }

    foreach ($request->products as $item) {

        $product = Product::find($item['id']);

        Order::create([
            'user_id'     => auth()->id(),
            'product_id'  => $product->id,
            'quantity'    => $item['qty'],
            'total_price' => $product->price * $item['qty'],
            'status'      => 'Paid'
        ]);
    }

    return redirect()->route('home')
    ->with('order_success', 'Your order has been placed successfully!');

}
}
