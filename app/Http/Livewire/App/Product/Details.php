<?php

namespace App\Http\Livewire\App\Product;

use Livewire\Component;

class Details extends Component
{

    public $category,$product , $productColor_id , $selectedProduct_quantity , $productQuantity_result;

    public function mount($category,$product){


        $this->category = $category;
        $this->product = $product;


    }


    public function selectedColor($productColor_id){
    
       
        $this->productColor_id = $productColor_id;

         $productColor = $this->product->productColor()->where('id',$this->productColor_id)->first();

         $this->selectedProduct_quantity = $productColor->quantity;
        
        
         if($this->selectedProduct_quantity <= 0){

            $this->productQuantity_result = 'outOfStock';

         }
         if($this->selectedProduct_quantity > 0)
         {

            $this->productQuantity_result = 'inStock';

         }


    }

    public function render()
    {   
        return view('livewire.app.product.details',
        [
            'product' => $this->product ,
            'category' => $this->category ,
               ]);
    }
}
