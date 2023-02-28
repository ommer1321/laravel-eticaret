<?php

namespace App\Http\Livewire\App\Wishlist;

use App\Models\Product;
use Livewire\Component;

class Price extends Component
{
    protected $listeners = ['emitqty' => 'priceCalculate']; 

    public $wishproduct , $price;

   



    public function mount($wishproduct ) {
    $this->wishproduct = $wishproduct;
    }
    
    
    
    public function priceCalculate() {

        //calısıyor gerek yok döndürmeye 
        // $this->price = Product::where('id',$this->wishproduct->product_id)->first();
        // $this->price = $this->price->selling_price * $this->wishproduct->quantity;
     
       
    }
    
    
    


    public function render(){

        $this->price = Product::where('id',$this->wishproduct->product_id)->first();
        $this->price = $this->price->selling_price * $this->wishproduct->quantity;

        return view('livewire.app.wishlist.price',
        [

            'price'=> $this->price, 

        ]
    );
    }
}
