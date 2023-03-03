<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'small_description',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'original_price',
        'selling_price',
        'quantity',
        'trend',
        'status',
        'brand',
    ];



public function productImages(){


    return $this->hasMany(ProductImage::class,'product_id','id' );

}




public function productColor(){


    return $this->hasMany(ProductColor::class,'product_id','id' );

}


public function category(){

    return $this->belongsTo(Catagory::class , 'category_id','id');


    }



    public function productBrand(){

        return $this->belongsTo(Brand::class , 'brand','id');
    
    
        }
    
    

}
