<?php

namespace App\Http\Livewire\App\Product;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishCount extends Component
{

    public $wishCount , $wishs;
    protected $listeners = ['emitAddToWish' => 'emitWish']; 

    public function emitWish(){

        
    }

    public function render()
    {
if(Auth::check()){

    
    $this->wishs = Wishlist::where('user_id',auth()->user()->id)->get();
    $this->wishCount = $this->wishs->count();
}
    
    return view('livewire.app.product.wish-count',[
        
        'wishCount' => $this->wishCount ,
        
    ]);

    }
}
