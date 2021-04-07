@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Admin Login</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Admin Login</a></li>
        </ul>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="center-holder section-heading">
                <h2>Admin Login</h2>
                <div class="section-heading-line"></div>
            </div>

            <div class="mt-40">
                @include('includes.alerts')

                <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                       value="{{ old('username') }}" placeholder="Username *" required>
                                @error('username')
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
                </form>

            </div>

        </div>
    </div>
@endsection
