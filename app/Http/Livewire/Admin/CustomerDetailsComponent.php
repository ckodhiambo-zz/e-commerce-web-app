<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CustomerDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.customer-details-component')->layout('layouts.admin-navbar-menu');
    }
}
