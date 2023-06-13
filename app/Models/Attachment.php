<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'products_id',
    ];


    public function product():BelongsTo
    {
        return $this->belongsTo(Products::class);
    }
}
