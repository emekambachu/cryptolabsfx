@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Services</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Services</a></li>
        </ul>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="center-holder section-heading">
                <h2>Cryptocurrencies</h2>
                <div class="section-heading-line"></div>
                <p>
                    .</p>
            </div>
            <div class="row mt-50">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-network"></i>
                        <h4>Forex</h4>
                        <p>
                            Options for investing cash including certificates of deposit and the money market funds. With CDs.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-profits"></i>
                        <h4>Option Trading</h4>
                        <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-bank"></i>
                        <h4>Cryptocurrencies</h4>
                        <p>
                            Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-bitcoin-1"></i>
                        <h4>Asset Management</h4>
                        <p>
                            With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-bitcoin-globe-symbol"></i>
                        <h4>Funds Management</h4>
                        <p>
                            Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="services-box">
                        <i class="icon-bitcoin-17"></i>
                        <h4>Commodities</h4>
                        <p>
                            A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
