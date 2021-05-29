@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Registration Complete</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Registration complete</a></li>
        </ul>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class=row>

                <div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-1">
                    <h2 class="column-title title-small">
                        <span style="color: #0f3e68; font-weight: bold;">Registration Complete</span></h2>

                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <p class="heading--desc">Hello <strong>{{ Session::get('name') }}</strong><br>
                                Thanks for taking your time to register on our crypto mining platform. Your account will be verified and activated by our security team in a moment, you can choose any of our mining packages so we can commence mining on your account immediately.<br>
                                <a href="{{ route('login') }}"><strong>Login</strong></a> to start investing
                            </p>
                        </div>

                        <div class="col-lg-5 col-12">
                            <img width="400" class="img-responsive" src="{{ asset('main/login.jpg') }}"/>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
