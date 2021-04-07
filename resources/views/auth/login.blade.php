@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Sign up</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Sign up</a></li>
        </ul>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="center-holder section-heading">
                <h2>Sign up</h2>
                <div class="section-heading-line"></div>
            </div>

            <div class="mt-40">
                @include('includes.alerts')

                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                       value="{{ old('email') }}" placeholder="Email Address *" required>
                                @error('email')
                                <span class="invalid-feedback text-warning" role="alert">
                            <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <!-- Input Field Ends -->
                        </div>

                        <div class="col-md-6">
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror"
                                       type="password" name="password"
                                       placeholder="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <!-- Input Field Ends -->
                        </div>
                    </div>

                    <div class="form-group">
                        <div style="display: block;">
                            <label>Remember me</label>
                            <input style="display: inline; width: 50px;" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                        </div>
                    </div><!-- /.form-grp -->

                    <div class="col-md-12">
                        <div class="center-holder">
                            <button style="background-color: #EEB117; padding: 5px;"
                                    type="submit">Login</button>
                        </div>
                    </div>

                    <p class="text-center">
                        No account ? <a href="{{ route('register') }}">Sign up</a></p>
                </form>

            </div>

        </div>
    </div>
@endsection
