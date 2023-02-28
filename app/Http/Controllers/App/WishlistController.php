<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
public function index(){

if(Auth::check()){


    
     $wishlist = Wishlist::where('user_id',auth()->user()->id)->get();

     return view('app.wishlist.index',compact('wishlist'));
    
}else{

    redirect()->url('/login');


}





}
}
