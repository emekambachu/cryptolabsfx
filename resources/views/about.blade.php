@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>About</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">About</a></li>
        </ul>
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
                                    src=https://www.youtube.com/embed/EWzsJG07vHY></iframe>
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
@endsection
