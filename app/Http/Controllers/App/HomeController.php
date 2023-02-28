<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $sliders = Slider::where('status','1')->get();
        $trends = Product::where('status','1')->where('trend','1')->latest()->limit(10)->get();
         $newArrivals = Product::where('status','1')->latest()->limit(6)->get();
        return view('app.home.index',compact('sliders','trends','newArrivals'));
    }



public function search(Request $request){
   
      $searchRes= Product::where('name','LIKE','%'.$request->s.'%')->where('status','1')->latest()->paginate(6);
    return view('app.search.index',compact('searchRes'));
    }


    
}
