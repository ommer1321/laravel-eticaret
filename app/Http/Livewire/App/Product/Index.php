<?php

namespace App\Http\Livewire\App\Product;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

public $brandInputs = [] , $priceInputs , $products , $category ,$product_id ; 
//ommer1453  burası yuzunden calısmıyor 

// protected  $queryString = ['brandInputs'];


protected  $queryString = [
    'brandInputs' => ['except' => '' ,'as' => 'brand'],
    'priceInputs' => ['except' => '' ,'as' => 'price'],

];
public function mount($category)
{
$this->category = $category ;

}

public function addWishlist($product_id){
 
    
    $this->product_id = $product_id;


if(Auth::check()){





    if($this->product_id){

if(   Wishlist::where('product_id',$this->product_id)->where('user_id',auth()->user()->id)->exists()){


    
     session()->flash('existwish','Already Added To Wishlist');
    
     $this->dispatchBrowserEvent('message', [
        'text' => 'Already Added To Wishlist',
        'type' => 'success',
        'status' => 409,
    ]);



  


}else{

$wishList = Wishlist::create([
                
                'user_id' => Auth::user()->id,
                'product_id' => $this->product_id,
                
                
                ]);
                session()->flash('addwish','Successfully Added Product To Wishlist');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Successfully Added Product To Wishlist',
                    'type' => 'success',
                    'status' => 200,
                ]);
                $this->emit('emitAddToWish');
                

}
            
            }
        }
        else{

        session()->flash('message','Please Login To Continue');
        $this->dispatchBrowserEvent('message', [
            'text' => 'Please Login To Continue',
            'type' => 'info',
            'status' => 401,
        ]);
      


        }

}

    


    public function render()
    {
            //ommer1453 calısmıyor 23 24 livewire video 


        $this->products = Product::where('category_id',$this->category->id)
       
        
    //     ->when($this->brandInputs , function($q){
    //         $q->whereIn('brand', $this->brandInputs);
    //     })


    //     ->when($this->priceInputs , function($q){
            
    //    $q->when($this->priceInputs == 'high-to-low',function($q2){
    //         $q2->orderby('selling_price','DESC');       
    //         })
    //      ->when($this->priceInputs == 'low-to-high',function($q2){
    //             $q2->orderby('selling_price','ASC');       
    //             });
    
                
    //     })
        
        ->where('status','1')
        ->get();
        
        return view('livewire.app.product.index',
        [
            'products' => $this->products,
            'category' => $this->category,
            'brandInputs' => $this->brandInputs,
        ]);
    }
}
