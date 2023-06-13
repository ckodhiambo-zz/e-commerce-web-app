<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ListOfProductsComponent extends Component
{

    public function render()
    {
        return view('livewire.admin.list-of-products-component')->layout('layouts.admin-navbar-menu');
    }
}
