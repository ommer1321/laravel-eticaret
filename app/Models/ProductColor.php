<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $table = 'product_colors';
    protected $fillable =[
        'quantity',
        'product_id',
        'color_id',
    ];



    
public function color(){


    return $this->belongsTo(Color::class ,'color_id','id');

}
}
