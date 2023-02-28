@php
    $total_cart_price = 0 ;
@endphp

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Görsel</th>
        <th scope="col">Ürün</th>
        <th scope="col">Renk</th>
        <th scope="col">Fiyat</th>
        <th scope="col">Miktar</th>
        <th scope="col">Sil</th>
      </tr>
    </thead>
   
   
    <tbody>
     @if ($cart)
                     
           
    @foreach ($cart as $cartitem )
        

 
    <tr>
      
        <td>
     
     
  @if ($cartitem->productImage->image)

    
    <a href="{{route('detail.product.app',[$cartitem->Product->category->slug,$cartitem->Product->slug])}}">
          <img width="150px" src="  {{asset($cartitem->productImage->image)}}" alt=""> 
    </a>

    @endif                
              
    </td>
         <td>


            <div  class="btn mx-auto"><strong>{{$cartitem->product->name }}</strong></div>


        </td>
         


        <td>


            <div  class="btn mx-auto"><strong>{{$cartitem->productColor->color->name }}</strong></div>


        </td>
        
        <td>


            <div  class="btn mx-auto"><strong>{{$total_cart_price  +=  $cartitem->quantity * $cartitem->product->selling_price}}</strong></div>


        </td>

         <td>


            <div class="row d-flex">

                <button class=" col-3  btn btn-primary btn-sm" wire:loading.remove  wire:click ="increment({{$cartitem->id}})"  >+</button>
               
                <span wire:loading wire:target='increment' class="col-3 btn btn-primary icon-spin5  text-white btn-sm"></span>
                
                <div  class=" col-6  text-center"><strong>{{$cartitem->quantity}}</strong></div>
        
                <button  class=" col-3  btn btn-danger  btn-sm" wire:loading.remove  wire:click ="extraction({{$cartitem->id}})">-</button>
              
                <span wire:loading wire:target='extraction' class="col-3 btn btn-danger icon-spin5  text-white btn-sm"></span>
                
            </div>


        </td>
                 
         <td>   



            <button   class="btn btn-warning  text-white"   wire:click="deleteCartItem({{$cartitem->id}})"><i  style="color: rgb(255, 255, 255)" class=" icon-trash voted"></i></button>




        </td>
       
             </tr>
             
             @endforeach
                                           

             @endif


            </tbody>


                         
        </table>

        <div class="card">
            <h5 class="card-header"><b>Toplam : <span class="text-success">{{$total_cart_price }} $</span></b> </h5>
            <a href="{{route('index.checkout')}}" class="btn btn-primary">Checkout</a>
          </div>