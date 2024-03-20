<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
           'name',
          'status',
    ] ;

    public function products(): HasMany
    {
        return $this->hasMany(
            related:Product::class,
            foreignKey: 'category_id'
           );
    }
}
