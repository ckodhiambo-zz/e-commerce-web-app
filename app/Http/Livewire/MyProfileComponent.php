<?php

namespace App\Http\Livewire;

use App\Models\Carts;
use App\Models\Order;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class MyProfileComponent extends Component
{
    public $orders;

    // Status mapping
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount()
    {
        $this->orders = auth()->user()->orders()->orderBy('id', 'DESC')->get();
    }

    public function render()
    {
        // Retrieve all orders of the logged-in user
        $orders = Order::where('user_id', Auth::id())->get();

        // Calculate the total amount spent on all orders
        $totalAmount = $orders->sum('total_price');

        // Get the date of the last order made by the user
        $lastOrderDate = $orders->max('created_at');

        // Calculate the time elapsed since the last order
        $timeElapsed = Carbon::parse($lastOrderDate)->diffForHumans();

        // Get the total number of orders made by the user
        $totalOrders = $orders->count();

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

        // Pass the total amount and time elapsed to the view
        return view('livewire.my-profile-component', [
            'totalAmount' => $totalAmount,
            'timeElapsed' => $timeElapsed,
            'totalOrders' => $totalOrders,
            'statusLabels' => $this->statusLabels,
            'wishlist' => $wishlist,
            'cartItems' => $cartItems,
        ])->layout('layouts.base');

    }

    public function updateProfile(Request $request)
    {
        $request->session()->flush();
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->address = $request->input('address');
        $user->facebook = $request->input('facebook');
        $user->twitter = $request->input('twitter');
        $user->instagram = $request->input('instagram');
        $user->update();

        return back()->with('status', "Profile Updated Successfully");
    }

    public function addToCartFromProfile($id)
    {
        // Find the wishlist item by ID
        $wishlistItem = Wishlist::findOrFail($id);

        // Check if the product exists in the cart
        if (Carts::where('user_id', auth()->user()->id)->where('product_id', $wishlistItem->product_id)->exists()) {
            session()->flash('message', 'Product already exists in the cart!');
            return redirect()->route('wishlist');
        }

        // Create the cart item
        auth()->user()->cart()->create([
            'product_id' => $wishlistItem->product_id,
            'product_quantity' => 1,
        ]);

        // Remove the item from the wishlist
        $wishlistItem->delete();

        // Flash a success message to the user
        session()->flash('success', 'Product added to cart successfully.');

        // Redirect the user to the cart page
        return redirect()->route('my-profile');
    }


}
