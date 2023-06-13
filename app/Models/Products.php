<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'original_price',
        'selling_price',
        'attachment',
        'status',
        'quantity',
        'category_id',
        'brand_id',
        'tax',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function carts():HasMany
    {
        return $this->hasMany(Carts::class);
    }

    public function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function wishlist():HasMany
    {
        return $this->hasMany(Wishlist::class);
    }

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function attachments():HasMany
    {
        return $this->hasMany(Attachment::class);
    }




}
