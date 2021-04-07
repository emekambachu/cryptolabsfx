@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Contact us</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Contact us</a></li>
        </ul>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="center-holder section-heading">
                <h2>Get in Touch</h2>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-50">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-xs-2"><i class="icon-agenda"></i></div>
                            <div class="col-xs-10">
                                <h6>Call Us</h6>
                                <h4>+(123) 456 789</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-xs-2"><i class="icon-mail-1"></i></div>
                            <div class="col-xs-10">
                                <h6>E-mail Us</h6>
                                <h4>info@cryptolabsfx.com</h4>
                                <h4>support@cryptolabsfx.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-xs-2"><i class="icon-worldwide"></i></div>
                            <div class="col-xs-10">
                                <h6>Find Us</h6>
                                <h4>New York, United States</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-40">
                @include('includes.alerts')
                <form method="post" class="contact-form" action="{{ url('contact/send') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <input name="name" placeholder="Name"></div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <input name="email" placeholder="E-mail" type="email"></div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <input name="subject" placeholder="Subject"></div>
                        <div class="col-md-12">
                            <textarea name="email_message" placeholder="Message"></textarea></div>
                        <div class="col-md-12">
                            <div class="center-holder">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
