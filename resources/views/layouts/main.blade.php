<!DOCTYPE html>
<html lang=zxx>

<title>@yield('title')</title>

<meta charset=UTF-8>
<link href="{{ asset('cryptolabsfx_logoonly.png') }}" rel="shortcut icon">
<meta content="width=device-width,initial-scale=1,maximum-scale=1" name=viewport>
<link href="{{ asset('main/css/bootstrap.min.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/font-awesome.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/icomoon.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/swiper.min.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/slider.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/animate.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/owl.carousel.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/slick.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/default.css') }}" rel=stylesheet>
<link href="{{ asset('main/css/styles.css') }}" rel=stylesheet>

<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"rel=stylesheet>

@yield('top-assets')

<div id=preloader>
    <div class="row loader">
        <div class=loader-icon></div>
    </div>
</div>

<div class=hidden-xs id=top-bar>
    <div class=container>
        <div class=row>
            <div class="col-xs-12 col-md-9">
                <div class=top-bar-welcome>
                    <ul>
                        <li id="google_translate_element"></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <ul class="hidden-sm social-icons">
                    <li><a href=#><i class="fa fa-facebook"></i></a>
                    <li><a href=#><i class="fa fa-twitter"></i></a>
                    <li><a href=#><i class="fa fa-instagram"></i></a>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
    <div class=nav-wrapper>
        <nav class="navbar navbar-custom navbar-default"data-offset-top=50 data-spy=affix>
            <div class=container>
                <div class=row>
                    <div class="navbar-header navbar-header-custom">
                        <button type=button aria-expanded=false class="collapsed menu-icon navbar-toggle"data-target=#bs-example-navbar-collapse-1 data-toggle=collapse><span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span>
                        </button> <a href="{{ url('/') }}" class=navbar-logo>
                            <img alt=logo src="{{ asset('cryptolabsfx_logo.png') }}" class=logo_light></a></div>
                    <div class="collapse navbar-collapse"id=bs-example-navbar-collapse-1>
                        <ul class="nav navbar-links-custom navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">Home</a>
                            <li class=dropdown>
                                <a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown>Company</a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="{{ url('about') }}">About us</a>
                                    <li><a href="{{ url('terms') }}">Terms and Conditions</a>
                                    <li><a href="{{ url('legal') }}">Legal</a>
                                    <li><a href="{{ url('faq') }}">FAQ</a>
                                </ul>
                            </li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                            <li><a href="{{ url('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <div class=container>
        <div class=row>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img alt=logo src={{ asset('cryptolabsfx_logo.png') }} class=footer-logo>
                <div class="mt-20 footer-content">
                    <p></p>
                </div>
                <div class=footer-contact-list>
                    <ul>
                        <li><i class="fa fa-phone"></i>+123 456 789</li>
                        <li><i class="fa fa-map"></i>New York, United States</li>
                        <li><i class="fa fa-envelope"></i>info@cryptolabsfx.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class=footer-heading>
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('services') }}">Services</a></li>
                        <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                        <li><a href="{{ url('legal') }}">Legal</a></li>
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class=footer-heading>
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=zSzOFG356c0">Is Crypto really a good investment?</a></li>
                        <li><a href="https://www.youtube.com/watch?v=mxlqVFhgv3k">$20,000/week with cryptocurrency</a></li>
                        <li><a href="https://www.youtube.com/watch?v=u-vrdPtZVXc">The revolution of cryptocurrency</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class=footer-heading>
                    <h3>Newsletter</h3>
                </div>
                <form action=# class=footer-form>
                    <div class=row>
                        <div class=col-md-9><input name=newsletter placeholder="Your email"></div>
                        <div class="col-md-3 pl-0-md"><button type=submit><i class="fa fa-paper-plane"></i></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<a href=# class=scroll-to-top><i class="fa fa-angle-up"aria-hidden=true></i></a>

<script src="{{ asset('main/js/jquery.min.js') }}"></script>
<script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/js/owl.carousel.js') }}"></script>
<script src="{{ asset('main/js/wow.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('main/js/waypoints.min.js') }}"></script>
<script src="{{ asset('main/js/slick-plugin.js') }}"></script>
<script src="{{ asset('main/js/slick.js') }}"></script>
<script src="{{ asset('main/js/swiper.min.js') }}"></script>
<script src="{{ asset('main/js/tabs.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.hover3d.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('main/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('main/js/modernizr.js') }}"></script>
<script src="{{ asset('main/js/map.js') }}"></script>
<script src="{{ asset('main/js/main.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/606da4a3f7ce18270937f077/1f2m4m888';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
