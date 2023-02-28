<?php

namespace App\Http\Livewire\App\Wishlist;

use App\Models\Product;
use Livewire\Component;

class QuantityButton extends Component
{

    public $wishproduct , $last_quantity;

    // ommer1453 tüm lğivewireler validete edilecek


    public function mount($wishproduct){


        $this->wishproduct = $wishproduct;
       
    }



    public function extraction(){    


        
     $this->last_quantity = $this->wishproduct->quantity--;

     $res = $this->wishproduct->update([
    
        'quantity' =>  $this->last_quantity ,
        
       ]);

       if($res){
   
    $this->emit('emitqty');

    $this->dispatchBrowserEvent('message', [
                    'text' => 'Successfully',
                    'type' => 'success',
                    'status' => 200,
                ]);


       }

       }






    public function increment(){

        
     $this->emit('emitqty');
     $this->last_quantity = $this->wishproduct->quantity++;

     $res = $this->wishproduct->update([
    
        'quantity' =>  $this->last_quantity ,
        
       ]);

       if($res){
        
      $this->dispatchBrowserEvent('message', [
                    'text' => 'Successfully',
                    'type' => 'success',
                    'status' => 200,
                ]);

              

       }
    }

    public function render()
    {
       

        return view('livewire.app.wishlist.quantity-button' ,
        [  
            
            'quantity'=> $this->wishproduct->quantity,
            
    ]);
    }
}
