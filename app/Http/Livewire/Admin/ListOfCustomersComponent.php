<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ListOfCustomersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.list-of-customers-component')->layout('layouts.admin-navbar-menu');
    }
}
