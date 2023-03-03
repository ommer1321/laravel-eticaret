<?php

namespace App\Http\Livewire\App\Wishlist;

use Livewire\Component;

class RemoveButton extends Component
{  
     
    public $wishproduct;

    public function mount($wishproduct){

        $this->wishproduct = $wishproduct;

    }

public function deleteWish(){
    $res = $this->wishproduct->delete();

      if($res){

    $this->emit('emitremove',$this->wishproduct);
    
    $this->dispatchBrowserEvent('message', [
                   'text' => 'Successfully Deleted',
                   'type' => 'success',
                   'status' => 200,
               ]);

               //WishCount'u Tetikliyor 
               $this->emit('emitAddToWish');
            //    dd($this->wishproduct);
           

      }else{

        $this->dispatchBrowserEvent('message', [
            'text' => 'Silme işlemi Başarısız ',
            'type' => 'success',
            'status' => 200,
        ]);


      }
}



    public function render()
    {
        
        return view('livewire.app.wishlist.remove-button');
    
    }
}
