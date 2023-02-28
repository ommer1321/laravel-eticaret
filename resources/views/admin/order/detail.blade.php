@extends('layouts.admin')

@section('content')





    <div class="row">
    <div class="col-md-12">

        <div class="card">

          
            <div class="card-header">
        
        
        <!--Sesion Alert Message-->
                @if (session('message'))
            <div class="alert alert-warning">{{session('message')}}</div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                    @endif

                    @if (session('unsuccess'))
                    <div class="alert alert-danger">{{session('unsuccess')}}</div>
                        @endif
        <!--Sesion Alert Message-->

<div class="row">

    
    <div class="col-md-4"><h3>Siparişler    </h3>    </div>
        <div class="col-md-2">
            <a href="{{route('index.orders.admin')}}" class="btn btn-danger m-2  text-white float-end">Geri</a>    
        </div>
        <div class="col-md-2">
            
            <a href="{{route('viewInvoice.orders.admin',$order->id)}}" class="btn btn-info m-2 text-white float-end" target="_blank">Fatura Görüntüle</a>
        </div>

        <div class="col-md-2">
            
            <a href="{{route('sendInvoice.orders.admin',$order->id)}}" class="btn btn-primary m-2 text-white float-end" >Mail Gönder</a>
        </div>

        <div class="col-md-2">
            
            <a href="{{route('generateInvoice.orders.admin',$order->id)}}" class="btn btn-warning m-2  text-white float-end">Fatura Pdf İndir</a>
        </div>
        
    </div>
                
            

            </div>
          
            <div class="card-body">

                <div class="row">
    
        
                    <div class="col-md-6 my-5">
                        <h4 class="text-warning">Sipariş Detayları</h4> 
                        <hr>
                        <h6>Sipariş ID : {{$order->id}}</h6>         
                        <h6>Sipariş Kodu :  {{$order->tracking_no}}</h6>
                        <h6>Sipariş Tarihi :  {{$order->created_at}}</h6>
                        <h6>Ödeme Türü :  
                        @if($order->status_message == 'ın progress') 
                        <span style="background:rgb(25, 213, 47); color: rgb(255, 255, 255); border-radius: 10px; padding: 3px">{{$order->status_message}}</span>
                        
                        @elseif ($order->status_message == 'completed')
                        <span style="background:rgb(0, 94, 11); color: rgb(255, 255, 255); border-radius: 10px; padding: 3px">{{$order->status_message}}</span> 
                        
                        @elseif ($order->status_message == 'pending')
                        <span style="background:rgb(234, 157, 2); color: rgb(255, 255, 255); border-radius: 10px; padding: 3px">{{$order->status_message}}</span>                       
                      
                        @elseif ($order->status_message == 'cancelled')
                        <span style="background:rgb(234, 2, 2); color: rgb(255, 255, 255); border-radius: 10px; padding: 3px">{{$order->status_message}}</span>                       
                        
                        @elseif ($order->status_message == 'out-for-delivery')
                        <span style="background:rgb(195, 255, 0); color: rgb(255, 255, 255); border-radius: 10px; padding: 3px">{{$order->status_message}}</span>                       
                       
                        @endif    
                            
                      
                        </h6>
                    </div>
        
                    <div class="col-md-6  my-5">
                        <h4 class="text-info">Kullanıcı Bilgisi</h4> 
                        <hr>
                        
                        <h6>Kullanıcı Bilgisi :  {{$order->user_detail->name}}</h6>
                        <h6>E-Mail : {{$order->email}}</h6>
                        <h6>Telefon Numarası :  {{$order->phone}}</h6>
                        <h6>Posta Kodu : {{$order->pincode}}</h6>
                        <h6>Adres Bilgisi : {{$order->address}}</h6>
                    </div>
                </div>   <form action="{{route('update.orders.admin',$order->id)}}" method="post">
                <div class="input-group">
                    
                 
                            @csrf
                            @method('PUT')

                            <select class="form-select" name="status" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option @if ($order->status_message=='completed') selected  @endif  value="completed">Tamamlandı</option>
                            <option @if ($order->status_message=='ın progress') selected  @endif  value="ın progress">Devam Ediyor</option>
                            <option @if ($order->status_message=='pending') selected  @endif  value="pending">Askıda</option>
                            <option @if ($order->status_message=='cancelled') selected  @endif  value="cancelled">İptal Edildi</option>
                            <option @if ($order->status_message=='out-for-delivery') selected  @endif  value="out-for-delivery">Dağıtıma Çıktı</option>
                            
                        </select>
                        <button type="submit" class="btn btn-success text-white" type="button">Güncelle</button>
                
                  </div>
                </form>
{{-- {{$order_product->links()}} --}}
<div>  </div> 

</div>
        </div>
 

    </div>


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
          @if ($order_products !=null)
          <tbody>
    @foreach ($order_products as $order_item )
         
   @php
        $totalAmount += $order_item->quantity * $order_item->price 
   @endphp
    <tr>
        <td>{{$loop->iteration}}</td>
        
        <td><a href="{{route('detail.product.app',[  $order_item->product->category->slug,$order_item->product->slug])}}"><img src="{{asset($order_item->product->productImages[0]->image)}}" width="50px" alt=""></a></td>
        <td>{{$order_item->product->name}}</td>
        <td>{{$order_item->quantity}} <small>adet</small></td>
        <td>{{$order_item->price}}$</td>
        <td>{{$order_item->quantity * $order_item->price }}$</td>

        
       </tr>
       
       @endforeach
       
       <tr>
       
        <td colspan="6" > <b> <span class="text-success">Toplam Tutar :</span>  {{$totalAmount}} $</b></td>
       
        </tr>
    

          </tbody>
    @endif
        </table>
  
    
</div>

</div>

</div>




@endsection