@extends('layouts.main')

@section('title')
    Legal
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>Legal</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Legal</a></li>
        </ul>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>
            <div class=row>

                <div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-1">
                    <div class="mt-30 text-content">
                        <p>The content provided on this website is for informational purposes only.<br>
                            CryptoLabsFX is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.<br>
                            Although the CryptoLabsFX website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites.<br>
                            Links from the Digital Trading Options website to third party websites do not constitute an endorsement by CryptoLabsFX of those parties or their products and services.</p>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
