<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Order;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        $sliders = Slider::where('status','1')->get();
        $trends = Product::where('status','1')->where('trend','1')->latest()->limit(3)->get();
         $newArrivals = Product::where('status','1')->latest()->limit(3)->get();
        return view('app.home.index',compact('sliders','trends','newArrivals'));
     
    }



public function search(Request $request){
   
      $searchRes= Product::where('name','LIKE','%'.$request->s.'%')->where('status','1')->latest()->paginate(6);
    return view('app.search.index',compact('searchRes'));
    }



    
  
    public function deneme(){

   
        if(Auth::check()){


    
            $wishlist = Wishlist::where('user_id',auth()->user()->id)->get();
       
            return view('app.deneme',compact('wishlist'));
           
       }else{
       
           redirect()->url('/login');
       
       
       }
       
       
   
   }

    
    
}
