
<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Need help?</h3>
                <a href="tel://{{$appSetting->phone1 ?? ''}}" id="phone">{{$appSetting->phone1 ?? ''}}</a>
                <a href="tel://{{$appSetting->phone2 ?? ''}}" id="phone">{{$appSetting->phone2 ?? ''}}</a>
                <a href="mailto:{{$appSetting->email1 ?? ''}}" id="email_footer">{{$appSetting->email1 ?? ''}}</a>
                <a href="mailto:{{$appSetting->email2 ?? ''}}" id="email_footer">{{$appSetting->email2 ?? ''}}</a>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                     <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                     <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        
                        <li><a href="http://{{$appSetting->facebook ?? ''}}"><i class="icon-facebook"></i></a></li>
                        <li><a href="http://{{$appSetting->twitter ?? ''}}"><i class="icon-twitter"></i></a></li>
                        <li><a href="mailto:{{$appSetting->email1 ?? ''}}"><i class="icon-google"></i></a></li>
                        <li><a href="http://{{$appSetting->instagram ?? ''}}"><i class="icon-instagram"></i></a></li>
                        <li><a href="http://{{$appSetting->youtube ?? ''}}"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Citytours 2022</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer>
<div id="toTop"></div><!-- Back to top button -->