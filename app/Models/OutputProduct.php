<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutputProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'output_id',
        'product_id',
        'quantity',
        'date'
    ];

    public function output()
    {
        return $this->belongsTo(Output::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
