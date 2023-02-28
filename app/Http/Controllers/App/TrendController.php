<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class TrendController extends Controller
{
    public function index(){
        
        $trends = Product::where('status','1')->where('trend','1')->latest()->paginate(9);

 
        return view('app.trend.index',compact('trends'));
    }

}
