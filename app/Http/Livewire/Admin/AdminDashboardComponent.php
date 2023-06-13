<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public $orders;
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount()
    {
        // Retrieve the latest 5 orders and sort them by creation date
        $this->orders = Order::latest('created_at')->take(5)->get();
    }

    public function getTotalAmount()
    {
        // Calculate the sum of the "total" attribute for all orders in the $orders collection
        return $this->orders->sum('total_price');
    }

    public function render()
    {
        // Pass the total amount to the view
        return view('livewire.admin.admin-dashboard-component', [
            'total_price' => $this->getTotalAmount(),
        ])->layout('layouts.admin-navbar-menu');
    }
}
