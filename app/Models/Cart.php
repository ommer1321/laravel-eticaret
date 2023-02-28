<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
                            'user_id',
                            'product_id',
                            'product_color_id',
                            'quantity',
                            
    ];

    public function product(){

        return $this->belongsTo(Product::class , 'product_id','id');

    }
    public function productImage(){

        return $this->hasOne(ProductImage::class , 'product_id','product_id');

    }
    public function productColor(){

        return $this->hasOne(ProductColor::class , 'id','product_color_id');

    }
}
