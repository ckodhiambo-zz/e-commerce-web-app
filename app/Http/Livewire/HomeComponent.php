<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Products;
use Livewire\Component;

class HomeComponent extends Component
{
    public $product;
    public $category;

    public function mount(Products $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;

    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.home-component', compact('categories'))->layout('layouts.base');
    }

//    public function viewCategory($slug)
//    {
//        if (Category::where('slug', $slug)->exists()) {
//            $category = Category::where('slug', $slug)->first();
//            $products = Products::where('category_id', $category->id)->get();
//            return view('livewire.view-category-component',compact('category','products'))->layout('layouts.base');
//        }else{
//            return redirect()->route('home');
//        }
//
//    }





}
