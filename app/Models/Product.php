<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Product extends Model
{
    use HasUuids;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'description',
        'image',
        'price',
        'stock'
    ];

    public function isStock() : bool{
        return $this->stock > 0;
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
