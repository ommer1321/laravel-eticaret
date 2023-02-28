<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class CategoryConroller extends Controller
{

   use WithPagination;
   protected $paginationTheme = 'bootstrap';


   public function index(){

     $categories = Catagory::where('status','1')->with('products')->get() ?? abort('404');
     return  view('app.collections.category.index',compact('categories'));


   }

   public function listProductFromCategory(string $slug){

           $category = Catagory::where('slug',$slug)->first() ?? abort('404');

            // Burası Livewire üzerinden gelecek
      //  if($category){

      //        $products = $category->products()->where('status','1')->with('productImages')->paginate(12);


      //  }


    return view('app.collections.products.index',compact('category'));


   }


   public function listProduct(string $slug){



   }
   

}
   