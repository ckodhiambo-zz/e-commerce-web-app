<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;
use App\Models\Carts;

class CartComponent extends Component
{
    public $quantity = [];
    public $totalPrice = 0;

    protected $listeners = [
        'quantityIncreased' => 'increaseQuantity',
        'quantityDecreased' => 'decreaseQuantity'
    ];

    public function getTotalsProperty()
    {
        $totals = [];

        $cartItems = Carts::where('user_id', auth()->user()->id)->get();

        foreach ($cartItems as $item) {
            $product = $item->products;
            if ($product) {
                $totals[$item->id] = $product->selling_price * $item->product_quantity;
            } else {
                $totals[$item->id] = 0; // Set total to 0 if product does not exist
            }
        }

        return $totals;
    }


    public function render()
    {
        $cartItems = Carts::where('user_id', auth()->user()->id)->get();
        $totals = $this->totals;
        $this->totalPrice = collect($totals)->sum();

        return view('livewire.cart-component', compact('cartItems', 'totals'))->layout('layouts.base');
    }

    public function mount()
    {
        $cartItems = Carts::where('user_id', auth()->user()->id)->get();

        foreach ($cartItems as $item) {
            $this->quantity[$item->id] = $item->product_quantity;
        }

        $this->updateTotalPrice();
    }

    public function increaseQuantity($itemId)
    {
        $this->quantity[$itemId]++;

        $this->updateTotalPrice();
    }

    public function decreaseQuantity($itemId)
    {
        if ($this->quantity[$itemId] > 1) {
            $this->quantity[$itemId]--;
        }

        $this->updateTotalPrice();
    }

    public function updatedQuantity($value, $itemId)
    {
        $this->quantity[$itemId] = $value;

        $this->updateTotalPrice();

    }

    public function updateTotalPrice()
    {
        $cartItems = Carts::where('user_id', auth()->user()->id)->get();
        $this->totalPrice = collect($this->totals)->sum();

        foreach ($cartItems as $item) {
            $item->product_quantity = $this->quantity[$item->id];
            $item->save();
        }

        $this->emit('cartUpdated'); // emit an event to update the UI
    }

    public function removeFromCart($productId)
    {
        Carts::where('user_id', auth()->user()->id)
            ->where('product_id', $productId)
            ->delete(); // remove the product from the cart

        $this->updateTotalPrice();

        $this->emit('cartUpdated'); // emit an event to update the UI

        $this->emit('productRemoved', $productId); // emit an event to update the UI
    }


}
