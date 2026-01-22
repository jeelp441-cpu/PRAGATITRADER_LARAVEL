<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    // Show order page
    public function create()
    {
        $products = Product::all();
        return view('order_product', compact('products'));
    }

    // Show confirm order page
    public function confirm(Request $request)
    {
        return view('confirm_order', [
            'products' => $request->products
        ]);
    }

    // Store final order (MULTIPLE PRODUCTS)
    public function store(Request $request)
    {
        $request->validate([
        'terms' => 'accepted'
    ]);
        // Safety check
        if (!$request->products) {
            return redirect('/order-product')
                ->with('error', 'Cart is empty');
        }

        foreach ($request->products as $item) {

            $product = Product::findOrFail($item['id']);

            Order::create([
                'user_id'     => auth()->id(),
                'product_id'  => $product->id,
                'quantity'    => $item['qty'],
                'total_price' => $product->price * $item['qty'],
                'status'      => 'Pending'
            ]);
        }

        return redirect()->route('home')
            ->with('success', 'Order placed successfully!');
    }
    public function myOrders()
{
    $orders = \App\Models\Order::where('user_id', auth()->id())
        ->latest()
        ->get();

    return view('my_order', compact('orders'));
}
    
}
