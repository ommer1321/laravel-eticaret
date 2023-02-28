@extends('layouts.app')

@section('title')
My Order Details Page
@endsection

@section('css')

	
@endsection

@section('style')
@endsection


@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
		<div class="animated fadeInDown">
			<h1>My Order Details Page</h1>
			<p>Cursus neque cursus curae ante scelerisque vehicula.</p>
		</div>
	</div>
</section>
<!-- End Section -->

		
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

<div class="container">
    <div class="row">
        
        <div class="col-md-6  my-5">
       
  
      <div class="alert alert-light">     
      
      <span style="font-size: 1.5rem"><b  class="text-info">Sipariş Detayları</b></span>
      
      <hr>
  <b>Sipariş Kodu</b> : {{$order->tracking_no}}
  <br>
 <b> Sipariş Tarihi</b> : {{$order->created_at}}
  <br>
  <b>Ödeme Türü</b> :  {{$order->payment_mode}}
  <br>
 <b> Sipariş Durumu</b> : <b><span class="text-success">{{$order->status_message}}</span></b> 

</div>

<div class="alert alert-light">     
     
<span class="mt-5" style="font-size: 1.5rem"><b  class="text-warning">Kullanıcı Detayları</b></span>
 <hr>  
 <b>Ad Soyad</b> : {{$order->user_detail->name}}
 <br>
 <b>Email </b>: {{$order->email}}
 <br>
<b> Telefon </b>:  {{$order->phone}}
 <br>
<b> Sipariş Durumu</b> :  {{$order->status_message}}
 <br>
 <b>Adres </b>:  {{$order->address}}
 <br>
<b> Posta Kodu</b> :  {{$order->pincode}}

</div>


        </div>
        
        
        <div class="col-md-6  my-5">
            <div class="alert alert-light" >

                <span class="mt-5" style="font-size: 1.5rem"><b class="text-success">Ürünler</b></span>
            <hr>

            <div class="table-responsive">
                <table class="table align-middle table-striped">
                  <thead>
                    <tr>
                        <td>-</td>
                        <td>Görsel </td>
                        <td>Ürün Adı </td>
                        <td>Fiyat</td>
                        <td>Adet</td>
                        <td>Toplam</td>
             
                    </tr>
               
    
                  </thead>
                  @if ($order_details !=null)
                  <tbody>
            @foreach ($order_details as $order_item )
                 
           
            <tr>
                <td>{{$loop->iteration}}</td>
                
                <td><a href="{{route('detail.product.app',[  $order_item->product->category->slug,$order_item->product->slug])}}"><img src="{{asset($order_item->product->productImages[0]->image)}}" width="50px" alt=""></a></td>
                <td>{{$order_item->product->name}}</td>
                <td>{{$order_item->quantity}} <small>adet</small></td>
                <td>{{$order_item->price}}$</td>
                <td>{{$order_item->quantity * $order_item->price }}$</td>
   
                
               </tr>
               
               @endforeach
        
    
                  </tbody>
            @endif
                </table>
              </div>
    

       </div>




        </div>


    </div>
</div>
        </main>
@endsection







@section('js')

@endsection


@section('script')


@endsection