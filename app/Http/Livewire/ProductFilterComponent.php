<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductFilterComponent extends Component
{
    public function render()
    {
        return view('livewire.product-filter-component')->layout('layouts.base');
    }
}
