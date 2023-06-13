<?php

namespace App\Http\Livewire;

use App\Models\Carts;
use App\Models\Wishlist;
use Livewire\Component;

class WishlistComponent extends Component
{

    public function render()
    {
        // Get wishlist items with product information for the logged in user
        $wishlist = Wishlist::join('products', 'wishlists.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('user_id', auth()->user()->id)
            ->select('wishlists.*', 'products.name', 'products.selling_price', 'products.description', 'categories.name as category_name')
            ->get();

        // Get cart items with product information for the logged in user
        $cartItems = Carts::join('products', 'carts.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('user_id', auth()->user()->id)
            ->select('carts.*', 'products.name', 'products.selling_price', 'products.description', 'categories.name as category_name')
            ->get();

        return view('livewire.wishlist-component', compact('wishlist', 'cartItems'))->layout('layouts.base');
    }


    public function addToCart($id)
    {
        // Find the wishlist item by ID
        $wishlistItem = Wishlist::findOrFail($id);

        // Check if the product exists in the cart
        if (Carts::where('user_id', auth()->user()->id)->where('product_id', $wishlistItem->product_id)->exists()) {
            session()->flash('message', 'Product already exists in the cart!');
            return redirect()->route('wishlist');
        }

        // Create the cart item
        auth()->user()->carts()->create([
            'product_id' => $wishlistItem->product_id,
            'product_quantity' => 1,
        ]);

        // Remove the item from the wishlist
        $wishlistItem->delete();

        // Flash a success message to the user
        session()->flash('success', 'Product added to cart successfully.');

        // Redirect the user to the cart page
        return redirect()->route('product.cart');
    }


}
