<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = ['name', 'price', 'image', 'brand_id'];

    public static function getAllProducts()
    {
        return Product::all();
    }

    public static function getProductbyid($id)
    {
        return Product::find(2);
    }
}
