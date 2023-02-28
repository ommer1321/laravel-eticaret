<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ArrivalController extends Controller
{
    public function index(){
        
        $newArrivals = Product::where('status','1')->latest()->paginate(9);

 
        return view('app.arrival.index',compact('newArrivals'));
    }
}
