<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'email',
        'phone',
        'gender',
        'address',
        'national_id',
        'license_plate',
        'vehicle_type',
        'profile_picture',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }



}
