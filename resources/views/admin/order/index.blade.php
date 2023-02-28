@extends('layouts.admin')

@section('content')





    <div class="row">
    <div class="col-md-12">

        <div class="card">

          
            <div class="card-header">
        
        
        <!--Sesion Alert Message-->
                @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
                @endif
        <!--Sesion Alert Message-->



                <h3>Siparişler
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#addOrder" class="btn btn-primary float-end">Add Order</a> --}}
                </h3>

            </div>
            <div class="card-body ">

                <form action="{{route('index.orders.admin')}}" method="get">
                 
                    <div class="row mb-3">
                        <div class="col-md-3 mx-2 my-2">
                            <label for="">Tarih</label>
                        <input type="date" name="date"  value="{{ Request::get('date') }}" class="form-control">
                        </div>
                        
                        <div class="col-md-3 mx-2 my-2">
                        
                            <label for="">Durum</label>
                            <select name="status" id="" class="form-control">
                                <option @if (request()->get('status')=='all') selected  @endif value="all">Tüm</option>
                                <option @if (request()->get('status')=='ın progress') selected  @endif  value="ın progress">Devam Ediyor</option>
                                <option @if (request()->get('status')=='completed') selected  @endif  value="completed">Tamamlandı</option>
                                <option @if (request()->get('status')=='pending') selected  @endif  value="pending">Askıda</option>
                                <option @if (request()->get('status')=='cancelled') selected  @endif  value="cancelled">İptal Edildi</option>
                                <option @if (request()->get('status')=='out-for-delivery') selected  @endif  value="out-for-delivery">Dağıtıma Çıktı</option>
                                
                            </select>

                        </div>
                        <div class="col-md-1 mx-2 my-2">
                            <input type="submit" value="Ara" class="btn btn-secondary form-control ">
                        </div>
                    </div>

                </form>
                {{-- <div class="alert alert-danger"> </div> --}}
<table class="table table-bordered table-striped">

    <thead>

        <tr>

            <td>-</td>
            <td>Sipariş Kodu</td>
            <td>Kullanıcı Adı</td>
            <td>Ödeme türü</td>
            <td>Sİpariş Tarihi</td>
            <td>Sİpariş Durumu</td>
            <td>İşlemler</td>
        </tr>

    </thead>


    <tbody>
       
   

@foreach ($orders as $order )
            
        
      
        
        
<tr>

    <td>{{$loop->iteration}}</td>
    <td>{{$order->tracking_no}}</td>
    <td>{{$order->user_detail->name}}</td>
    <td>{{$order->payment_mode}}</td>
    <td>{{$order->created_at}}</td>
    <td>{{$order->status_message}}</td>
    {{-- <td>{{$order->tracking_no}}</td> --}} 
    <td><a href="{{route('detail.orders.admin',[$order->id])}}"  class="btn btn-info">Detay</a></td>

</tr>



@endforeach







     
  
    </tbody>


</table>
{{$orders->withQueryString()->links()}}
<div>  </div> 

</div>
        </div>
 

    </div>


    


</div>

</div>




@endsection