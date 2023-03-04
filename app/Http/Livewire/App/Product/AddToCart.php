<?php

namespace App\Http\Livewire\App\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{

    public $product_id , $product , $category , $quantity_val = 0 , $selectedProduct_quantity , $productQuantity_result , $productColor_id;

    public function mount($product , $category){
         
        $this->category = $category;
        $this->product = $product;

    }



    public function selectedColor($productColor_id){
        $this->quantity_val=0;
       
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






    public function increment(){

        if($this->quantity_val < $this->selectedProduct_quantity){

            $this->quantity_val++; 
        }
       

    }

    
    public function   decrement(){

        if($this->quantity_val >= 1){

            $this->quantity_val--; 
        }

    }
  



    public function addtocart($product_id){

if(Auth::check()){
    // Oturum Kontrolü
    $this->product_id  = $product_id;

    if($this->product->where('id',$this->product_id)->where('status',1)->exists()){

        // Ürünün Olup Olmadığının Kontrolü

        if($this->product->quantity > 0){

            //Ürünün Total Sayısının Kontrolü 

            if($this->product->productColor()->count() > 0){

                //Ürüne ait Tüm Renklarin Kontrolü
        
                if($this->selectedProduct_quantity != null){
                
                    //Seçilen Rengin Sayısının Kontrolü 
            
                    if($this->selectedProduct_quantity >= $this->quantity_val && $this->quantity_val !=0  ){

                        //Seçilen rengin ürün sayısının Seçilen sayıya göre büyük küçük kontrolü ve 0 dan farklı  oldugu kontrolü 
                        $cartControl = Cart::where('user_id',auth()->user()->id)->where('product_id',$this->product_id)->exists();
                    
                        if($cartControl){

                            $this->dispatchBrowserEvent('message', [
                                'text' => '   <i  style="color: red" class=" icon-block-4 voted"></i>  Bu Ürün Zaten Sepetinizde Bulunmaktadır. ',
                                'type' => 'success',
                                'status' => 404,
                            ]);

                                }else{
                                    $this->emit('emitAddToCart');
                                    $this->emit('emitBasket');
                            
                                    $cartProdcut = Cart::create([

                                        'user_id' => auth()->user()->id,
                                        'product_id' => $this->product_id,
                                        'product_color_id' =>$this->productColor_id,
                                        'quantity' =>$this->quantity_val,

                                    ]); 
                                    if($cartProdcut){

                                        $this->dispatchBrowserEvent('message', [
                                            'text' => '   <i  style="color: green" class=" icon-ok voted"></i> Ürün Sepetinize Eklendi ',
                                            'type' => 'success',
                                            'status' => 404,
                                        ]);

                                   
                                        $this->emit('emitAddToCart');
                                        $this->emit('emitBasket');


                                    }else{

                                        $this->dispatchBrowserEvent('message', [
                                            'text' => '   <i  style="color: red" class="icon-cancel voted"></i> Ürün Sepetinize Eklenemedi ',
                                            'type' => 'success',
                                            'status' => 404,
                                        ]);

                                    }

                                    }
                      
                   
                            
                    
                    $this->quantity_val=0;

                        }else{
                            
                            if( $this->quantity_val == 0){
                                //0 a eşit kontrolü
                                $this->dispatchBrowserEvent('message', [
                                    'text' => ' <i style="color: red" class="icon-exclamation voted"></i>Ürün Miktarını Seçiniz',
                                    'type' => 'success',
                                    'status' => 404,
                                ]);
                            }else{

                                $this->dispatchBrowserEvent('message', [
                                    'text' => ' <i style="color: red" class="icon-exclamation voted"></i> Bu Miktarda Bu Rengi Ait Ürün Yok',
                                    'type' => 'success',
                                    'status' => 404,
                                ]);
                               

                            }

                        }
                                    }
                                    else{
                                    if(!$this->productColor_id){
                                        $this->dispatchBrowserEvent('message', [
                                            'text' => ' <i style="color: red" class="icon-exclamation voted"></i> Renk Seçiniz ',
                                            'type' => 'success',
                                            'status' => 404,
                                        ]);

                                    }else{

                                  
                                    
                                        if($this->selectedProduct_quantity <= 0){


                                            $this->dispatchBrowserEvent('message', [
                                                'text' => ' <i style="color: red" class="icon-exclamation voted"></i> Ürün Rengi Stokta Yok ',
                                                'type' => 'success',
                                                'status' => 404,
                                            ]);
                                        }else{
                                            $this->dispatchBrowserEvent('message', [
                                                'text' => ' <i style="color: blue" class="icon-exclamation voted"></i> Ürün Rengi Seçiniz',
                                                'type' => 'success',
                                                'status' => 404,
                                            ]);

                                        }
                                    }
                                        

                                    }
    //ommer1321 renk seçme zorunlu değişiklik yapılacak zorunlu olmamalı
                                                }else{

                                                    $this->dispatchBrowserEvent('message', [
                                                        'text' => ' <i class="icon-exclamation voted"></i> Bu Üründe Renk Opsiyonu Bulunmamaktadır.',
                                                        'type' => 'success',
                                                        'status' => 404,
                                                    ]);

                                                }



                                                            }else{


                                                                $this->dispatchBrowserEvent('message', [
                                                                    'text' => ' <i class="icon-exclamation voted"></i> Stokta Ürün Yok ',
                                                                    'type' => 'success',
                                                                    'status' => 404,
                                                                ]);


                                                            }
    

                                                                    }else{

                                                                        $this->dispatchBrowserEvent('message', [
                                                                            'text' => ' <i class="icon-exclamation voted"></i> 
                                                                            Böyle Bir Ürün Bulunamadı ',
                                                                            'type' => 'success',
                                                                            'status' => 404,
                                                                        ]);


                                                                    }
}

else{

    $this->dispatchBrowserEvent('message', [
        'text' => ' <i class="icon-exclamation voted"></i> Üye Girişi Yapınız ( <a href="'.url('/login').'">Tıklayınız </a> )',
        'type' => 'success',
        'status' => 200,
    ]);

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
