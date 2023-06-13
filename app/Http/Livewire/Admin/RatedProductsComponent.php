<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class RatedProductsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.rated-products-component')->layout('layouts.admin-navbar-menu');
    }
}
