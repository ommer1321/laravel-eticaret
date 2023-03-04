@extends('layouts.frontend')

@section('title')
Kayıt Ol
@endsection

@section('css')
@endsection

@section('style')
   
@endsection



@section('content')


<main class="main__content_wrapper">

   <!-- Start login section  -->
   <div class="login__section section--padding">
       <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

               <div class="login__section--inner">
                   <div class="row row-cols-md-12 row-cols-1">
                      





                       <div class="col">
                        <div class="account__login register">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Kayıt Ol</h2>
                                <p class="account__login--header__desc">Kayıt Olmak İçin Formu Doldurunuz</p>
                            </div>
                            <div class="account__login--inner">
                                <label>

                                    <input   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="account__login--input @error('name') is-invalid @enderror" placeholder="Ad Soyad" type="text">
                                </label>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                <label>  
                                    <input class="account__login--input  @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" type="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </label>
                                <label>

                                    <input class="account__login--input  @error('password') is-invalid @enderror" placeholder="Şifre"  type="password"    value="{{ old('password') }}" name="password" required autocomplete="new-password">
                                
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </label>
                                <label>

                                    <input class="account__login--input" placeholder="Şifre Doğrulama" type="password"  name="password_confirmation" required autocomplete="new-password">
                                </label>
                                <label>
                                    <button class="account__login--btn primary__btn mb-10" type="submit">Kayıt Ol</button>
                                </label>
                                {{-- <div class="account__login--remember position__relative">
                                    <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label login__remember--label" for="check2">
                                        Okudum Onaylıyorum</label>
                                </div> --}}

                                <div class="account__login--divide">
                                    <span class="account__login--divide__text">ya da</span>
                                </div>
                                <div class="account__social d-flex justify-content-center mb-15">
                                    <a class="account__social--link facebook" target="_blank" href="#">Facebook</a>
                                    <a class="account__social--link google" target="_blank" href="#">Google</a>
                                    <a class="account__social--link twitter" target="_blank" href="#">Twitter</a>
                                </div>
                                <p class="account__login--signup__text">Zaten Hesabınız Var mı? <a href="{{route('login')}}">Giriş Yap</a></p>
                            
                            </div>
                        </div>
                    </div>




                   </div>
               </div>
           </form>
       </div>     
   </div>
   <!-- End login section  -->


</main>
@endsection







@section('js')
@endsection


@section('script')
@endsection


