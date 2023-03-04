@extends('layouts.frontend')

@section('title')
Giriş Yap
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
        <form method="POST" action="{{ route('login') }}">
            @csrf
               <div class="login__section--inner">
                   <div class="row row-cols-md-12 row-cols-1">
                       <div class="col">
                           <div class="account__login">
                               <div class="account__login--header mb-25">
                                   <h2 class="account__login--header__title h3 mb-10">Giriş</h2>
                                   <p class="account__login--header__desc">Hesabınız Var</p>
                               </div>
                               <div class="account__login--inner">
                                   <label>
                                    <input id="email" type="email" class="account__login--input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  
                                   </label>
                                   <label>
                                    <input id="password" type="password" class="account__login--input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    </label>

                                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                   <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                       <div class="account__login--remember position__relative">
                                   
                                           <input class="checkout__checkbox--input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                           <span class="checkout__checkbox--checkmark"></span>
                                           <label class="checkout__checkbox--label login__remember--label" for="check1">
                                               Beni Hatırla</label>
                                       </div>

                                       @if (Route::has('password.request'))
                                  
                                
                                       <a href="{{ route('password.request') }}" class="account__login--forgot" type="submit">Şifremi Unuttum?</a>
                                         @endif 
                                   </div>
                                   <button class="account__login--btn primary__btn" type="submit">Giriş</button>
                                   <div class="account__login--divide">
                                       <span class="account__login--divide__text">ya da</span>
                                   </div>
                                   <div class="account__social d-flex justify-content-center mb-15">
                                       <a class="account__social--link facebook" target="_blank" href="#">Facebook</a>
                                       <a class="account__social--link google" target="_blank" href="#">Google</a>
                                       <a class="account__social--link twitter" target="_blank" href="#">Twitter</a>
                                   </div>
                                   <p class="account__login--signup__text">Hesabınız Yok mu? <a href="{{route('register')}}">Hesap Oluştur</a></p>
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


