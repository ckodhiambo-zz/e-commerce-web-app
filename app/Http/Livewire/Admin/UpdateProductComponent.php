<?php

namespace App\Http\Livewire\Admin;

use App\Models\Products;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Livewire\Component;

class UpdateProductComponent extends Component
{
    public $product;

    public function mount(Products $product)
    {
        $this->product = $product;
    }

    public function render(Products $product)
    {
        return view('livewire.admin.update-product-component', compact('product'))->layout('layouts.admin-navbar-menu');
    }

    public function update(Request $request, $id)
    {
        $request->session()->flush();
        $product = Products::find($id);

        if ($request->hasFile('attachment')) {
            $path = 'assets/uploads/products' . $product->attachment;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('attachment');
            $ext = $file->getClientOriginalExtension();
            //Current time and file extension
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/products', $filename);
            $product->attachment = $filename;
        }

//        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->update();

        return back()->with('status', "Product Updated Successfully");

    }

    public function destroy(Products $product)
    {
        $product = Products::find($product);
        //TO DO FOR OUR IMAGES
        $product->each->delete();

//     TODO:Redirect it to the list of products page
        return redirect(route('add-product.dashboard'))->with('status', "Product Deleted Successfully");
    }
}
