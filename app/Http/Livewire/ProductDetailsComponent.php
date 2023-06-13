<?php

namespace App\Http\Livewire;


use App\Models\Carts;
use App\Models\Category;
use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public $category_slug;
    public $product_slug;

    public function mount($product_slug, $category_slug)
    {
        $this->category_slug = $category_slug;
        $this->product_slug = $product_slug;
    }

    public function render()
    {
        $category = Category::where('categories.slug', $this->category_slug)->first();
        if ($category->products()->where('products.slug', $this->product_slug)->exists()) {
            $product = $category->products()->where('products.slug', $this->product_slug)->first();
            return view('livewire.product-details-component', ['product' => $product])->layout('layouts.base');
        } else {
            return redirect()->route('home');
        }

    }


    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_quantity' => 'required',
        ]);

        //passing the values from the form including the authenticated user id
        $user_id = Auth::user()->id;
        $product_id = $request->get('product_id');
        $product_quantity = $request->get('product_quantity');

        if (Auth::check()) {
            $product_check = Products::where('id', $product_id)->first();
            if ($product_check) {
                //Check if the product exists in the cart or not
                if (Carts::where('user_id', Auth::user()->id)->where('product_id', $product_id)->exists()) {
                    session()->flash('message', $product_check->name . 'Product already exists in the cart!');
                    return redirect()->route('product.cart');
                } else {
                    $cartItem = new Carts();
                    $cartItem->user_id = Auth::user()->id;
                    $cartItem->product_id = $product_id;
                    $cartItem->product_quantity = $product_quantity;
                    $cartItem->save();

                    session()->flash('message', $product_check->name . 'Product added to cart successfully!');
                    return redirect()->route('product.cart');
                }
            } else {
                session()->flash('message', 'Product does not exist!');
                return redirect()->route('home');
            }
        } else {
            session()->flash('message', 'You need to login/create an account first!');
            return redirect()->route('login');
        }

    }

    public function addToWishlist(Request $request)
    {
        //Let authenticate the user add product to wishlist, if not authenticated redirect to login page

        if (Auth::check()) {
            $product_id = $request->get('product_id');
            $product_check = Products::where('id', $product_id)->first();
            if ($product_check) {
                //Check if the product exists in the wishlist or not
                if (Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product_id)->exists()) {
                    session()->flash('message', $product_check->name . 'Product already exists in the wishlist!');
                    return back();
                } else {
                    $wishlistItem = new Wishlist();
                    $wishlistItem->user_id = Auth::user()->id;
                    $wishlistItem->product_id = $product_id;
                    $wishlistItem->save();

                    session()->flash('message', $product_check->name . 'Product added to wishlist successfully!');
                    return redirect()->route('wishlist');
                }
            } else {
                session()->flash('message', 'Product does not exist!');
                return redirect()->route('home');
            }
        } else {
            session()->flash('message', 'You need to login/create an account first!');
            return redirect()->route('login');
        }
    }


}

