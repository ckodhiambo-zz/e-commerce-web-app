<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carts extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = ['user_id', 'product_id', 'product_quantity'];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function removeFromCart($itemId)
    {
        $item = Carts::find($itemId);
        $item->remove();

        // update cart totals
        $this->updateCartTotals();
    }

}
