<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'unit_price',
        'unit_measure',
        'parchuse_order',
        'quantity',
    ];

    public function outputproduct(): HasMany
    {
        return $this->hasMany(OutputProduct::class);
    }
}
