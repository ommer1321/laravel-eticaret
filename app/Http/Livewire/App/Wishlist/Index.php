<?php

namespace App\Http\Livewire\App\Wishlist;

use App\Models\Wishlist;
use Livewire\Component;

class Index extends Component
{

    // emitremove
    protected $listeners = ['emitremove' => 'emitremove']; 

    public $wishproduct;

    
    public function mount($wishproduct ) {
        $this->wishproduct = $wishproduct;
        }


        public function emitremove(){
            //ommer1453 sayfa yineleme bozuk emit(emitremove)
            
        
        }

    public function render()
    {

        $this->wishproduct = Wishlist::where('user_id',auth()->user()->id)->get();
        
        return view('livewire.app.wishlist.index',
        [

            'wishlist'=> $this->wishproduct, 

        ]
    );
    }
}
