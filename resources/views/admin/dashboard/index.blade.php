@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3>
                        {{-- <a href="{{ route('create.product') }}" class="btn btn-primary float-end text-white">Add Product</a> --}}
                    </h3>

                </div>


                <div class="card-body">

                    <div class="row">
                        {{-- <div class="col-md-6">
<div class="card card-body bg-success text-white m-3">
    <h2 > Toplam Sipariş </h2>
    <h1>31</h1>
    <a href="http://" class="btn btn-success text-white">git</a>
</div>
            </div> --}}


                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-success text-white">Toplam Sipariş</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allOrders }} </h3>


                                    <a href="#" class="btn btn-success text-white">Git</a>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-success text-white">Bugünün Siparişi</div>

                                <div class="card-body">

                                    <h3 class="">{{ $todayOrders }}</h3>


                                    <a href="#" class="btn btn-success text-white">Git</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-success text-white">Bu Ayın Siparişi</div>

                                <div class="card-body">

                                    <h3 class="">{{ $monthOrders }}</h3>


                                    <a href="#" class="btn btn-success text-white">Git</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-success text-white">Bu Yılın Siparişi</div>

                                <div class="card-body">

                                    <h3 class="">{{ $yearOrders }}</h3>


                                    <a href="#" class="btn btn-success text-white">Git</a>

                                </div>

                            </div>

                        </div>

                        {{--  --}}
                        <hr class="mt-5 mb-5">

                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-primary text-white">Toplam Ürün Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allProduct }} </h3>


                                    <a href="#" class="btn btn-primary text-white">Git</a>

                                </div>

                            </div>

                        </div>




                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-primary text-white">Toplam Kategori Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allCategory }} </h3>


                                    <a href="#" class="btn btn-primary text-white">Git</a>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-primary text-white">Toplam Marka Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allBrand }} </h3>


                                    <a href="#" class="btn btn-primary text-white">Git</a>

                                </div>

                            </div>

                        </div>



                        <hr class="mt-5 mb-5">



                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-danger text-white">Tüm Kullanıcıların Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $adminsAndUsers }} </h3>


                                    <a href="#" class="btn btn-danger text-white">Git</a>

                                </div>

                            </div>

                        </div>


                        
                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-danger text-white">Toplam Admin Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allAdmin }} </h3>


                                    <a href="#" class="btn btn-danger text-white">Git</a>

                                </div>

                            </div>

                        </div>


                        
                        <div class="col-md-3">



                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">

                                <div class="card-header bg-danger text-white">Toplam Kullanıcı Sayısı</div>

                                <div class="card-body">

                                    <h3 class="">{{ $allUser }} </h3>


                                    <a href="#" class="btn btn-danger text-white">Git</a>

                                </div>

                            </div>

                        </div>



                        <br class="mt-5 mb-5">







                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>


                </div>






            </div>

        </div>


    </div>
@endsection
