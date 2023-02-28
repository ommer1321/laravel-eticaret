<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function detailProduct($category_slug,$product_slug){


     $category = Catagory::where('slug',$category_slug)->first() ?? abort(404,'Katagori Bulunamadı');
     
     
     
     if($category){
    
             $product =$category->products->where('slug',$product_slug)->first() ?? abort(404,'Ürün Bulunamadı');
    
        if($product){

        return view('app.collections.products.details',compact('category','product'));

        }else{
        
            return redirect()->back();

        }
    }
    else{

        return redirect()->back();

    }



}
}
