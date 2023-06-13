<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Products;
use Livewire\Component;

class ViewCategoryComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        if (Category::where('slug', $this->slug)->exists()) {
            $category = Category::where('slug', $this->slug)->first();
            $products = Products::where('category_id', $category->id)->get();
            return view('livewire.view-category-component', compact('category', 'products'))->layout('layouts.base');
        } else {
            return redirect()->route('home');
        }
    }
}



