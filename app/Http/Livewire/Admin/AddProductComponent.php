<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;

class AddProductComponent extends Component
{

    public $slug;

    public function updatedSlug($value)
    {
        $this->slug = Str::slug($value);
    }

    public function render()
    {

        $products = Products::all()->take(10);
        return view('livewire.admin.add-product-component', compact('products'))->layout('layouts.admin-navbar-menu');
    }

    public function insert(Request $request)
    {
        $product = new Products();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->status = $request->input('status');

        // Set other properties for your product here
        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');

        $product->save();

        $attachments = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $attachment) {
                $fileName = time() . '_' . $attachment->getClientOriginalName();
                $attachment->move(public_path('uploads'), $fileName);

                $attachments[] = [
                    'attachment' => $fileName,
                    'file_name' => $attachment->getClientOriginalName(),
                ];
            }

            $product->attachments()->createMany($attachments);
        }


        return redirect()->route('products.dashboard')->with('status', "Product Added Successfully");
    }


}
