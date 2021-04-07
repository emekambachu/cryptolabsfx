@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
    <div class=swiper-container>
        <div class=swiper-wrapper>

            <div class="slide-item swiper-slide"style=background-image:url({{ asset('main/img/slider/slider-2.jpg') }})>
                <div class=container>
                    <div class=row>
                        <div class=col-md-12>
                            <div class="center-holder slider-content">
                                <div class=title-block data-swiper-parallax=-900 data-swiper-opacity=0>Welcome to<br>CryptoLabsFX</div>
                                <div class=text-block data-swiper-parallax=-800>
                                    <p>Enjoy the best rates from your Cryptocurrency Investments</p>
                                </div>
                                <div class=mt-30><a href="{{ url('investment') }}" class="button-md dark-button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item swiper-slide"style=background-image:url({{ asset('main/img/slider/slider-1.jpg') }})>
                <div class=container>
                    <div class=row>
                        <div class=col-md-12>
                            <div class=slider-content>
                                <div class=pre-title-block data-swiper-parallax=-1500>Leaders of the cryptocurrency investment platform</div>
                                <div class=title-block data-swiper-parallax=-900 data-swiper-opacity=0>CRYPTOLABSfx</div>
                                <div class=text-block data-swiper-parallax=-800>
                                    <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking to manage your investment portfolio</p>
                                </div>
                                <div class="mt-30">
                                    <a href="{{ url('about') }}" class="button-md dark-button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item swiper-slide"style=background-image:url({{ asset('main/img/slider/slider-3.jpg') }})>
                <div class=container>
                    <div class=row>
                        <div class=col-md-12>
                            <div class=slider-content>
                                <div class=pre-title-block data-swiper-parallax=-1500>Tell us what you need</div>
                                <div class=title-block data-swiper-parallax=-900 data-swiper-opacity=0>We care for our customers</div>
                                <div class=text-block data-swiper-parallax=-800>
                                    <p>Our Customer care team are ready to solve your financial problems via our live chat</p>
                                </div>
                                <div class=mt-30><a href="{{ url('contact') }}" class="button-md dark-button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-button-white swiper-button-next"></div>
        <div class="swiper-button-white swiper-button-prev"></div>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <img alt="img" src="{{ asset('main/home/h1.jpg') }}" class="mb-10 rounded-border"></div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                    <div class=section-heading>
                        <h3>About <span style="color: #EEB117; font-size: 30px;">CRYPTOLABS</span><span style="color: #000000; font-size: 30px;">fx</span></h3>
                        <div class=section-heading-line-left></div>
                    </div>
                    <div class="mt-30 text-content">
                        <p>
                            CryptoLabsFX is a 24-hour trading company for cryptocurrency like Bitcoin, Litecoin, Ethereum,We provide an none experienced money-making program that does not require any skill. Our experts will customize the trading method according to your plan to meet the profit demands of different customers.<br><br>
                            Through years of trading on the stock market and the Bitcoin market, we have summed up a set of effective trading methods that can maximize customer demand without risk, and also obtain considerable profits. You only need to invest a minimum of $50 to start your profit journey, you will get a maximum return rate of 10% daily, cryptofxlabs has invested in various cryptocurrencies before and get the highest return rate of 1000%, we are on the private equity industry and we are confident that we can achieve higher profits.
                        </p>
                    </div>
                    <div class=mt-25>
                        <div class=progress-text>
                            <div class=row>
                                <div class="col-sm-6 col-md-6 col-xs-6">Currency</div>
                                <div class="col-sm-6 col-md-6 col-xs-6 text-right">85%</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="animated custom-bar progress-bar slideInLeft wow"style=width:85% aria-valuemax=100 aria-valuemin=0 aria-valuenow=70 role=progressbar></div>
                        </div>
                        <div class=progress-text>
                            <div class=row>
                                <div class="col-sm-6 col-md-6 col-xs-6">Money</div>
                                <div class="col-sm-6 col-md-6 col-xs-6 text-right">80%</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="animated custom-bar progress-bar slideInLeft wow"style=width:80% aria-valuemax=100 aria-valuemin=0 aria-valuenow=70 role=progressbar></div>
                        </div>
                        <div class=progress-text>
                            <div class=row>
                                <div class="col-sm-6 col-md-6 col-xs-6">Profit</div>
                                <div class="col-sm-6 col-md-6 col-xs-6 text-right">95%</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="animated custom-bar progress-bar slideInLeft wow"style=width:95% aria-valuemax=100 aria-valuemin=0 aria-valuenow=70 role=progressbar></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/bg/bg8.jpg') }})>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="section-heading white-color">
                        <h4>We are professionally engaged in crypto resource-trading and investment services, through our deep understanding and experience of the crypto-currency Industry.</h4>
                        <div class=section-heading-line-left></div>
                    </div>
                    <div class="mt-30 text-content white-color">
                        <p>
                            cryptolabsfx.com is an investment and crypto-trading platform developed under the control of an experienced team of highly qualified financial experts and professional traders for highly profitable investments. We are very proud to state that our client base cuts across financial institutions, individuals, and several other corporate organizations. We are determined to provide the best service to our investors and to deliver a very lucrative source of income with no investment risk through our insurance program.
                        </p>
                    </div>

                    <div class=mt-30>
                        <a href=# class="button-md primary-button">Sign up</a>
                        <a href=# class="button-md primary-button">Login</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="mt-15-xs video-video-box">
                        <img alt=img src="{{ asset('main/img/content/service-1.jpg') }}"
                             class="mb-10 rounded-border shadow-primary">
                        <div class=video-video-box-overlay>
                            <div class=video-video-box-button>
                                <button class=video-video-play-icon data-target=.video-modal data-toggle=modal>
                                    <i class="fa fa-play"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="fade modal video-modal" role=dialog id=videomodal tabindex=-1>
                        <div class="modal-dialog modal-lg" role=document>
                            <iframe allowfullscreen class="full-width image-shadow round-frame" height=415
                                    src=https://www.youtube.com/embed/Mvrq8hLjcRk></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block" style="background-color: #fff0ce;">
        <div class="container">
            <div class="section-heading center-holder">
                <h2>Why Choose Us</h2>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-50">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-1.jpg') }})">
                                    <i class="icon-bitcoin-and-laptop-symbol"></i>
                                    <h4>Qualified Support</h4>
                                    <h6>Our experts will help you with any problem arose regarding the operation of the user software.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-2.jpg') }})">
                                    <i class="icon-exchange-1"></i>
                                    <h4>Unique Platform</h4>
                                    <h6>Our team has developed a unique platform for user-friendly and safe to work with investments.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-3.jpg') }})">
                                    <i class="icon-bitcoin-symbol-on-mobile-phone-screen"></i>
                                    <h4>Quickly and Instantly</h4>
                                    <h6>All actions occur on the page immediately - payment process, withdrawal request, and more.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-4.jpg') }})">
                                    <i class="icon-bitcoin-safety-shield-symbol"></i>
                                    <h4>Privacy and Protection</h4>
                                    <h6>Comodo RSA SSL will protect coinzinc investorâ€™s all the time ,so dont worry about your investment and privacy.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-5.jpg') }})">
                                    <i class="icon-bitcoin-3"></i>
                                    <h4>Constant Progression</h4>
                                    <h6>Interest is applied to your account 24/7. Once it has been added to your account balance, you can either reinvest it to increase your daily profit, or you can withdraw it.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <a href="#">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="black-overlay service-front"
                                     style="background-image:url({{ asset('main/img/content/service-6.jpg') }})">
                                    <i class="icon-bitcoin-1"></i>
                                    <h4>User-friendly</h4>
                                    <h6>Our platform is designed to be user-friendly and easy to use without any prior knowledge of modern technology.</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-parallax" style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class="section-heading center-holder">
                <h2>Cryptocurrency Live Price Tables</h2>
                <div class=section-heading-line></div>
            </div>
            <div class="row mt-50">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": "100%",
                            "height": 490,
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "light",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>

    <div class="section-block-parallax" style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class="section-heading center-holder">
                <h2>How it Works</h2>
                <div class=section-heading-line></div>
            </div>
            <div class="row mt-50">
                <div class="col-xs-12 col-md-4 col-sm-4 article">
                    <div class="article article-box-line">
                        <div class=article>
                            <div class=article-icon>
                                <div class=article-icon-inner><i class=icon-wallet></i></div>
                            </div>
                            <h3>Sign up</h3>
                            <p>Sign up to our account and fill all relevant details including your bitcoin wallet address</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4 article">
                    <div class="article article-box-line">
                        <div class=article>
                            <div class=article-icon>
                                <div class=article-icon-inner><i class=icon-bitcoin-10></i></div>
                            </div>
                            <h3>Select Investment Package</h3>
                            <p>Select investment package, create new investment and fund your wallet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4 article">
                    <div class=article>
                        <div class=article>
                            <div class=article-icon>
                                <div class=article-icon-inner><i class=icon-bitcoin></i></div>
                            </div>
                            <h3>Get Paid</h3>
                            <p>Receive payment with bonus, profit or commission</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=section-block-parallax style=background-image:url({{ asset('main/img/slider/slider-3.jpg') }})>
        <div class="container">
            <div class="center-holder section-heading">
                <h2 style="color: #ffffff;">Investment Packages</h2>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-50">

                @foreach($packages as $package)
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="fadeIn live-price wow price-dark" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                        <h3 style="color: #EEB117;">{{ $package->name }}</h3>
                        <h4>
                            @if(!empty($package->min))
                                <p style="font-size: 15px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                            @endif

                            @if(!empty($package->max))
                                <p style="font-size: 15px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                            @else
                                <p style="font-size: 15px;">and above</p>
                            @endif
                        </h4>
                        <div class="price-divider"></div>

                        @if(!empty($package->roi))
                        <div class="row">
                            <div class="col-xs-12">
                                <strong>{{ $package->roi }}</strong>
                            </div>
                        </div>
                        <div class="price-divider"></div>
                        @endif

                        @if(!empty($package->option1))
                        <div class="row">
                            <div class="col-xs-12">
                                <strong>{{ $package->option1 }}</strong>
                            </div>
                        </div>
                        <div class="price-divider"></div>
                        @endif

                        @if(!empty($package->option2))
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>{{ $package->option2 }}</strong>
                                </div>
                            </div>
                            <div class="price-divider"></div>
                        @endif

                        @if(!empty($package->option3))
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>{{ $package->option3 }}</strong>
                                </div>
                            </div>
                            <div class="price-divider"></div>
                        @endif

                        @if(!empty($package->referral_bonus))
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>{{ $package->referral_bonus }}</strong>
                                </div>
                            </div>
                            <div class="price-divider"></div>
                        @endif

                        @if(!empty($package->expert_advice))
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong>{{ $package->expert_advice }}</strong>
                                </div>
                            </div>
                            <div class="price-divider"></div>
                        @endif
                        <a href="{{ route('register') }}" class="button-md primary-button">Register</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/slider/slider-3.jpg') }})>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class=countup-box>
                        <h4 class=countup>50,079</h4>
                        <p>Transactions in last 24h
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class=countup-box>
                        <h4 class=countup>22,750</h4>
                        <p>Bitcoin Wallets
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class=countup-box>
                        <h4 class=countup>120</h4>
                        <p>Consultants
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class=countup-box>
                        <h4 class=countup>2100</h4>
                        <p>Bitcoin investors
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-parallax" style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class="section-heading center-holder">
                <span>Testimonials</span>
                <h2>Media</h2>
                <div class=section-heading-line></div>
            </div>
            <div class="row mt-50">
                <div class="owl-carousel owl-theme" id="testmonials-carousel-2">
                    <div class="item testmonial-block">
                        <img alt=img src={{ asset('main/testimonial/cnbc.png') }}>
                        <div class=content-testmonial-block>
                            <h4>CNBC International</h4>
                            <p>CryptoLabsFX achieve 43% returns in revenue from Stocks, Cryptocurrencies and Forex Trading.</p>
                        </div>
                        <div class=testmonial-block-raiting><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></div>
                    </div>
                    <div class="item testmonial-block">
                        <img alt=img src={{ asset('main/testimonial/aljazeera.png') }}>
                        <div class=content-testmonial-block>
                            <h4>Aljazeera Finance, 2019</h4>
                            <p>CryptoLabsFX Financial performance continues to rise against the market's down trend. They have proven to have a solid plan for investors.</p>
                        </div>
                        <div class=testmonial-block-raiting><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></div>
                    </div>
                    <div class="item testmonial-block">
                        <img alt=img src={{ asset('main/testimonial/bbcuk.png') }}>
                        <div class=content-testmonial-block>
                            <h4>BBC News, UK</h4>
                            <p>CryptoLabsFX has been the most attractive cryptocurrency and investment platform on the Forex market as at 2017.</p>
                        </div>
                        <div class=testmonial-block-raiting><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-parallax" style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class="section-heading center-holder">
                <h2>Cryptocurrency Calculator</h2>
            </div>
            <div class=mt-50>
                <script src={{ asset('main/js/calc_widget.js') }}></script>
            </div>
        </div>
    </div>

    <div class="section-block-grey" style="background-color: #fff0ce;">
        <div class=container>
            <div class="section-heading center-holder">
                <h2>Latest News</h2>
                <div class=section-heading-line></div>
            </div>
            <div class="row mt-60">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="feedgrabbr_widget" id="fgid_71e82e89566823ac785c365ed"></div>
                    <script>if (typeof (fg_widgets) === "undefined") fg_widgets = []; fg_widgets.push("fgid_71e82e89566823ac785c365ed");</script>
                    <script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
                </div>
            </div>
        </div>
    </div>
    <div class=section-block>
        <div class=container>
            <div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-1">
                <div class="section-heading mt-35">
                    <h2>We accept payments</h2>
                    <div class=section-heading-line-left></div>
                </div>
                <div class="row mt-20">
                    <div class="col-xs-12 col-sm-12 col-md-12"><a href=#>
                        <img alt=store src={{ asset('main/images/footer_payments.png') }} class=mt-10></a>
                    </div>
{{--                    <div class="col-xs-12 col-sm-6 col-md-5"><a href=#>--}}
{{--                            <img alt=store src={{ asset('main/img/content/googleplay.png') }} class=mt-10></a></div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
