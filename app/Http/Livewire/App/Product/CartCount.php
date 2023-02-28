<?php

namespace App\Http\Livewire\App\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCount extends Component
{

    public $cart , $cartCount , $cartItem_id;
    protected $listeners = ['emitAddToCart' => 'emitAddToCart']; 


    public function emitAddToCart(){
        
        //Bu fonksiyon emiti tetikliyor ve render çalıştırıyor  

    }
    public function  emptyTrush(){
        $cartItems = Cart::where('user_id',auth()->user()->id)->get();
        if($cartItems){

            foreach($cartItems as $ıtem){
                Cart::where('id',$ıtem->id)->delete();
           
                            
                    if($cartItems->empty()){
                        $this->dispatchBrowserEvent('message', [
                            'text' => '   <i  style="color: red" class=" icon-trash voted"></i> Sepet Boşaltıldı  ',
                            'type' => 'success',
                            'status' => 404,
                        ]);

                    }
   
            }

        }else{
           
            $this->dispatchBrowserEvent('message', [
                'text' => '   <i  style="color: red" class=" icon-trash voted"></i> Sepet Zaten Boş  ',
                'type' => 'success',
                'status' => 404,
            ]);



        }
      
    

 }

    public function deleteCartItem(int $cartItem_id){
        $this->cartItem_id = $cartItem_id;
        $cartItem = Cart::where('id',$this->cartItem_id)->where('user_id',auth()->user()->id)->first();
        if($cartItem){
            
            $deletedCartItem = $cartItem->delete();
         if($deletedCartItem){
            $this->dispatchBrowserEvent('message', [
                'text' => '   <i  style="color: red" class=" icon-trash voted"></i> Sepetten Ürün Silindi  ',
                'type' => 'success',
                'status' => 404,
            ]);

         }else{


             $this->dispatchBrowserEvent('message', [
                 'text' => '   <i  style="color: green" class=" icon-ok voted"></i>  ',
                 'type' => 'success',
                 'status' => 404,
             ]);
         }
         }
           
    }

    public function render()
    {


    if(Auth::check()){


        $this->cart = Cart::where('user_id',auth()->user()->id)->take(5)->get();
        
        $this->cartCount= $this->cart->count();



    


}   
    


        return view('livewire.app.product.cart-count',[

            'cart' =>  $this->cart,
            'cartCount' =>  $this->cartCount,
            
        ]);
    }
}
