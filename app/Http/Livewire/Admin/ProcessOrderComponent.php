<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courier;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class ProcessOrderComponent extends Component
{
    //Get the details of the order
    public $order;
    public $orderItems;


    // Status mapping
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount($order_id)
    {
        //Get the order details
        $this->order = Order::find($order_id);
        $this->orderItems = $this->order->orderItems;
    }

    public function render()
    {
        return view('livewire.admin.process-order-component')->layout('layouts.admin-navbar-menu');
    }


    public function processOrder(Request $request, $order_id)
    {
        // Get the order with the given ID
        $order = Order::find($order_id);

        //save the courier details from the form in livewire.admin.process-order-component view file to the database
        $courier = Courier::create([
            'order_id' => $order->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'national_id' => $request->national_id,
            'license_plate' => $request->license_plate,

        ]);

        // Update the status of the order to 'processing'
        $order->status = 1;
        $order->save();

        //Save the courier details to the database and link it to the order with the given ID
        $courier->order()->associate($order);
        $courier->save();


        // Redirect to the orders page
        return redirect()->route('orders.dashboard');

    }


}
