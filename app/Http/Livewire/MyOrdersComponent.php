<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class MyOrdersComponent extends Component
{
    public $orders;

    // Status mapping
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount()
    {
        $this->orders = auth()->user()->orders()->orderBy('id', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.my-orders-component', [
            'statusLabels' => $this->statusLabels,
        ])->layout('layouts.base');
    }

//    public function cancelOrder($order_id)
//    {
//        $order = Order::find($order_id);
//        $order->status = 4; // 4 represents 'cancelled' status
//        $order->save();
//        session()->flash('message', 'Order has been cancelled successfully!');
//    }


}
