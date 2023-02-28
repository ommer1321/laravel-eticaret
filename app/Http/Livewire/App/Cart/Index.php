<?php

namespace App\Http\Livewire\App\Cart;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $cart , $cartDetail , $cartItem , $cartItem_id ,$quantity_val = 0 ;
    protected $listeners = ['againList' => 'againList']; 



    public function increment($cartItem_id){
    
        $this->cartItem_id = $cartItem_id;
        $this->cartItem = Cart::where('id',$this->cartItem_id)->first();
 
        $this->quantity_val = $this->cartItem->quantity;
        $this->quantity_val++;

        $res = $this->cartItem->update([
       
            'quantity' =>   $this->quantity_val ,
            
           ]);
           
           if($res){
      
            // $this->emit('emitqty');
        
            $this->dispatchBrowserEvent('message', [
                            'text' => ' <i  style="color: green" class=" icon-ok "></i>',
                            'type' => 'success',
                            'status' => 200,
                        ]);
        
        
               }

    }


    public function extraction($cartItem_id){
    
        $this->cartItem_id = $cartItem_id;
        $this->cartItem = Cart::where('id',$this->cartItem_id)->first();
 
        $this->quantity_val = $this->cartItem->quantity;
        $this->quantity_val--;

        $res = $this->cartItem->update([
       
            'quantity' =>   $this->quantity_val ,
            
           ]);
           
           if($res){
      
            // $this->emit('emitqty');
        
            $this->dispatchBrowserEvent('message', [
                            'text' => ' <i  style="color: green" class=" icon-ok "></i>',
                            'type' => 'success',
                            'status' => 200,
                        ]);
        
        
               }

    }

  



    public function deleteCartItem(int $cartItem_id){
   
        $this->cartItem_id = $cartItem_id;  

        $this->cartItem = Cart::where('id',$this->cartItem_id)->where('user_id',auth()->user()->id)->first();
       
        if($this->cartItem){
            
            $deletedCartItem = $this->cartItem->delete();

         if($deletedCartItem){
            $this->dispatchBrowserEvent('message', [
                'text' => '   <i  style="color: red" class=" icon-trash voted"></i> Sepetten Ürün Silindi  ',
                
            ]);
          
            $this->emit('emitAddToCart');
         
     
     
        }else{


             $this->dispatchBrowserEvent('message', [
                 'text' => '   <i  style="color: green" class=" icon-ok voted"></i>  ',
                 'type' => 'success',
                 'status' => 404,
             ]);
         }
         }
           
    }




    







    public function render(){
        // $this->cartDetail = Product::where('id',$this->cart->product_id)->where('user_id',auth()->user()->id)->get();

        $this->cart = Cart::where('user_id',auth()->user()->id)->get(); 

    
        return view('livewire.app.cart.index',

    [

        //  'cartDetail' => $this->cartDetail,
         'cart' => $this->cart,
    ]);
    }

}
