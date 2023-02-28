@extends('layouts.app')

@section('title')
    User Detail Page
@endsection

@section('css')
@endsection

@section('style')
@endsection


@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/admin_top.jpg" data-natural-width="1400"
        data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
            <div class="animated fadeInDown">
                <h1>Profil!</h1>
                <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End section -->

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

        <div class="margin_60 container">






            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">

                            <div class="row">

                                <div class="col-md-6">
                                    <label for="">Ad Soyad</label>
                                    <input type="text" name="username" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Telefon Numarası</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">E-Mail</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="">Posta Kodu</label>
                                    <input type="text" name="pincode" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Adres</label>
                                    <textarea  name="address" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-3">
                                    
                                    <input type="submit"  class=" btn btn-primary mt-3">
                                </div>
                                



                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">...</div>
                    </div>

                </div>
            </div>

        </div>
        </div>
        <!-- end container -->
    </main>
@endsection



@section('js')
@endsection


@section('script')
@endsection
