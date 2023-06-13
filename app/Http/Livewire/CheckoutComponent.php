<?php

namespace App\Http\Livewire;

use App\Models\Carts;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Products;
use Illuminate\Http\Request;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        // Get the cart items
        $cartItems = Carts::where('user_id', auth()->user()->id)->get();

        // Compute the total price of each item in the cart
        $totals = app(CartComponent::class)->getTotalsProperty();

        // Compute the total price of all items in the cart
        $totalPrice = collect($totals)->sum();

        return view('livewire.checkout-component', compact('cartItems', 'totals', 'totalPrice'))->layout('layouts.base');
    }


    public function placeOrder(Request $request)
    {
        // Let's store the order based on the form on the checkout-component view
        $totalPrice = 0;
        $order = auth()->user()->orders()->create([
            'shipping_name' => $request->shipping_name,
            'shipping_email' => $request->shipping_email,
            'delivery_address' => $request->delivery_address,
            'shipping_phone' => $request->shipping_phone,
            'message' => $request->message,
            'status' => 0, // 0 represents 'pending' status
//            'total_price' => $totalPrice, // Set the total price field
        ]);

        // Let's store the order items based on the cart items and the total price of the order
        $cartItems = Carts::where('user_id', auth()->user()->id)->get();
        $totals = app(CartComponent::class)->getTotalsProperty();

        foreach ($cartItems as $item) {
            $orderItem = OrderItem::create([
                'user_id' => auth()->user()->id,
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'product_quantity' => $item->product_quantity,
                'total_price' => $totals[$item->id],
            ]);
            $totalPrice += $orderItem->total_price;

        }
        // Set the total price of the order
        $order->total_price = $totalPrice;

        // Save the order
        $order->save();

        // Delete the cart items
        Carts::destroy($cartItems->pluck('id')->toArray());

        // Flash a success message to the user
        session()->flash('success', 'Order placed successfully.');

        // Redirect the user to the cart page
        return redirect()->route('my-orders');
    }





}
