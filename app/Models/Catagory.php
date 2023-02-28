<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table = 'catagories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',    
        'keyword',
        'meta_description',
        'status',
        

    
    
    ];






    public function products(){


        return $this->hasMany(Product::class,'category_id','id');

    }

    public function brands(){

        return $this->hasMany(Brand::class,'category_id','id');
    }









}
