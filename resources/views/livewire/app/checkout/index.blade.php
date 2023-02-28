@if ($totalPrice > 0)

<div class="col-lg-7">

    <div class="billing-details">
        <div class="shop-form">
       
                <div class="default-title">
                    <h2>Check Out </h2>
                </div>
             
                @if (session('productNotSelling'))
                    <div class="alert alert-info">{{session('productNotSelling')}}</div>
                @endif
               
                <div class="row">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Ad - Soyad <sup>* </sup>
                            @error('fullname')
                            ( <small class="text-danger"> {{$message}} </small> )
                            @enderror
                        </label>
                        <input type="text" wire:model.defer="fullname" value="" placeholder="" class="form-control">
                      
                    </div>
                    
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Telefon <sup>*</sup>
                            @error('phone')
                            ( <small class="text-danger"> {{$message}} </small> )
                            @enderror
                        </label>
                       
                        <input type="tel"wire:model.defer="phone" value=""  placeholder="" class="form-control">
                    </div>
                
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Email  <sup>*</sup>
                            @error('email')
                            ( <small class="text-danger"> {{$message}} </small> )
                            @enderror
                        </label>
                        <input type="email"wire:model.defer="email" value="" placeholder="" class="form-control">
                    </div>
                
                    
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Posta Kodu  <sup>*</sup>
                            @error('pincode')
                            ( <small class="text-danger"> {{$message}} </small> )
                            @enderror
                        </label>
                        <input type="text"wire:model.defer="pincode" value="" placeholder="" class="form-control" >
                    </div>
                


                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label>Address <sup>*</sup>
                            @error('address')
                            ( <small class="text-danger"> {{$message}} </small> )
                            @enderror
                        </label>
                        <textarea wire:model.defer="address" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <div class="place-order">

                    <div class="payment-options">
               {{-- ommer1453  
                         <ul>
                          
                            <li>
                              
                                    <inputwire:model.defer="payment" value="cash"  type="radio" name="payment-group" id="">
                                    <label for="payment-2">Kapıda Öde</label>
                            
                            </li>
                            <li>
                               
                                    <input value="card" wire:model.defer="payment"    type="radio" name="payment-group" id="">
                                    <label for="payment-3"> Kart İle Öde</label>
                              
                            </li>
                            <li>
                                <div class="radio-option">
                                    <label for="payment-1"><span class="small-text">Ödeme Türünü Seçtiğinize Emin Olun !</span>
                                    </label>
                                </div>
                            </li>
                            
                        
                        </ul> --}}
                        <ul>

                            
                            <li>

                                <button wire:click ="codOrder" class="btn btn-info text-white">Kapıda Öde <i class="icon-right-open-3"></i>  </button>
                        
                            </li>
                            
                            <li>
                        
                            
                                <button wire:click ="" class="btn btn-warning text-white">Kart İle Öde <i class="icon-right-open-3"></i>  </button>
                            
                            </li>
                            
                        </ul>
                    </div>
               
                    
                </div>
                    
                
                </div>
          
        </div>
    </div>
    <!--End Billing Details-->
</div>
<!--End Col-->
{{-- 2 --}}
<div class="col-lg-5">
    <div class="your-order">
        <div class="default-title">
            <h2>Kontrol Alanı</h2>
        </div>
        <ul class="orders-table">
            <li class="table-header clearfix">
                <div class="col">
                    <strong>Ürün</strong>
                </div>
                <div class="col">
                    <strong>Toplam</strong>
                </div>
            </li>
            @if ($cart)
                
            @foreach ($cart as $cartItem )
            
            <li class="clearfix">
                <div class="col" style="text-transform:none;">
                <a href="{{route('detail.product.app',[$cartItem->product->category->slug , $cartItem->product->slug ])}}"><img src="{{asset($cartItem->productImage->image)}}" width="50" height="50" alt=""></a> <b>{{$cartItem->product->name}}</b>	</div>
                    <div class="col second">
                        <b>${{$cartItem->product->selling_price}} X {{$cartItem->quantity}} Adet </b> 
                    </div>
                </li>
                
                @endforeach
                
                @else
                -
                @endif

        <li class="clearfix total">
            <div class="col">
                <strong>Sipariş Toplamı</strong>
            </div>
            <div class="col second">
                <strong>@if ($totalPrice)   ${{$totalPrice}} @else - @endif</strong>
            </div>
        </li>


        </ul>
        <div class="coupon-code">
            <div class="form-group">
                <div class="field-group">
                    <input type="text" name="code" value="" placeholder="Kupon Kodu" class="form-control">
                </div>
                <div class="field-group btn-field">

                    
                    <button class="btn_cart_outine"><i class="icon-left-open-3"></i> Kupon Kullan </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Your Order-->

    <div class="place-order">
        

        {{-- <button wire:click ="codOrder" class="btn btn-primary">Onayla <i class="icon-right-open-3"></i>  </button> --}}
        
    </div>
    <!--End Place Order-->

</div>
@else
<div>

    @if (session('productNotSelling'))
    <div class="alert alert-info">{{session('productNotSelling')}}</div>

    @endif

    <div class="alert alert-warning">Henüz Sepetiniz Boş  </div>

</div>
@endif


