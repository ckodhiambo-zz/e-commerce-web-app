<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\OrderMessage;
use Illuminate\Http\Request;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    //Get the details of the order
    public $order;
    public $orderItems;
    public $message;

    // Status mapping
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount($order_id)
    {
        $this->order = Order::find($order_id);
        $this->orderItems = $this->order->orderItems;
    }

    public function render()
    {
        return view('livewire.admin.order-details-component')->layout('layouts.admin-navbar-menu');
    }

    public function saveNotes(Request $request)
    {
        // Get the order with the given ID
        $order = Order::find($request->order_id);

        // Check if the order exists
        if (!$order) {
            return back();
        }

        // Check if the order already has 2 messages
        if ($order->orderMessages()->count() >= 2) {
            session()->flash('error', 'You can only save up to 2 notes for this order!');
            return back();
        }

        $message = OrderMessage::create([
            'order_id' => $order->id,
            'user_id' => auth()->user()->id,
            'message' => $request->message,
        ]);

        //Save the message to the database and link it to the order with the given ID
        $order->orderMessages()->save($message);
        $order->save();

        session()->flash('message', 'Notes saved successfully!');

        return back();
    }



}
