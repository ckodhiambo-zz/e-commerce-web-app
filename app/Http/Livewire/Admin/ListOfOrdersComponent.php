<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class ListOfOrdersComponent extends Component
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
        $this->orders = Order::all()->sortByDesc('created_at');
    }

    public function render()
    {
        return view('livewire.admin.list-of-orders-component', [
            'statusLabels' => $this->statusLabels,
        ])->layout('layouts.admin-navbar-menu');
    }
}
