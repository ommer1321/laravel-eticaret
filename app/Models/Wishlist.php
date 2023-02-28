<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = [

        'user_id',
        'product_id',

    ];

    public function getImage(){

    return $this->hasOne(ProductImage::class , 'product_id','product_id')->limit(1);


    }
    public function productDetail(){

        return $this->belongsTo(Product::class , 'product_id','id');
    
    
        }

}
