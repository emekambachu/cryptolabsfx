@extends('layouts.main')

@section('title')
    FAQ
@endsection

@section('content')
    <div class="page-title" style="background-image:url({{ asset('main/img/bg/bg5.jpg') }})">
        <h1>FAQ</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">FAQ</a></li>
        </ul>
    </div>

    <div class=section-block-parallax style=background-image:url({{ asset('main/img/bg/bg5.jpg') }})>
        <div class=container>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_1" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col1" aria-expanded="false" data-toggle="collapse" aria-controls="ac_pr_col1" data-parent="#accordion3" role="button" class="collapsed">
                                        What does CryptoLabsFX do?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="ac_pr_col1" role="tabpanel" aria-labelledby="acc_p_1" aria-expanded="false" style="height: 0px;">
                                <div class="accordion-body panel-body">
                                    CryptoLabsFX is one of the leaders at international cryptocurrency investment market, it is engaged in mining and cryptocurrency trade for profit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_2" role="tab">
                                <h4 class="accordion-title panel-title"><a href="#ac_pr_col2" aria-expanded="false" data-toggle="collapse" class="collapsed" aria-controls="ac_pr_col2" data-parent="#accordion3" role="button">How safe are the investments offered by CryptoLabsFX?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="ac_pr_col2" role="tabpanel" aria-labelledby="acc_p_2" aria-expanded="false" style="height: 0px;">
                                <div class="accordion-body panel-body">We make every effort for your deposit to be fully secured and to bring stable income. We can safely call our investments risk-free.</div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_3" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col3" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col3" data-parent="#accordion3" role="button">
                                        Should i pay for account registration?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col3" role="tabpanel"
                                 aria-labelledby="acc_p_3" aria-expanded="false">
                                <div class="accordion-body panel-body">No, the registration is absolutely free.</div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_4" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col4" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col4" data-parent="#accordion4" role="button">
                                        How many accounts can i register?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col4" role="tabpanel" aria-labelledby="acc_p_4" aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    We recommend that you register and use one account. This will help us get rid of unnecessary load on the website and databases, and will help you avoid unnecessary problems and confusion.</div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_5" role="tab">
                                <h4 class="accordion-title panel-title"><a href="#ac_pr_col5" aria-expanded="false" data-toggle="collapse" class="collapsed" aria-controls="ac_pr_col5" data-parent="#accordion5" role="button">What should i specify on my bitcoin account field?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col5" role="tabpanel" aria-labelledby="acc_p_5"
                                 aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    In this field, you must enter your Bitcoin address, containing about 33 alphanumeric characters, in the current version of the protocol, it begins with 1 or 3. Using this address, you can make Bitcoin transactions.</div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_6" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col6" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col6" data-parent="#accordion6" role="button">
                                        What should i do if i cannot enter my account?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col6" role="tabpanel" aria-labelledby="acc_p_6"
                                 aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    Most likely, you are entering incorrect data (username or password), check it and try again. If the problem remains, reset your password, using a special function at the login page. Do not forget to check the spam folder, sometimes letters from the company can get there.
                                </div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_7" role="tab">
                                <h4 class="accordion-title panel-title"><a href="#ac_pr_col7" aria-expanded="false" data-toggle="collapse" class="collapsed" aria-controls="ac_pr_col7" data-parent="#accordion7" role="button">What profit can i expect?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col7" role="tabpanel" aria-labelledby="acc_p_7" aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    Depending on the amount of your deposit, you can make a profit of 10-15% every day on a regular basis.
                                </div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_8" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col8" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col8" data-parent="#accordion8" role="button">
                                        What currency can i invest in?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col8" role="tabpanel" aria-labelledby="acc_p_8"
                                 aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    We only accept Bitcoin
                                </div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_9" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col9" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col9" data-parent="#accordion9" role="button">
                                        How can i make a deposit?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col9" role="tabpanel" aria-labelledby="acc_p_9"
                                 aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    Sign in to your account and in the section “Make a deposit” select an investment plan and specify the amount you would like to invest. The system will suggest you the Bitcoin address where you will need to send the exact amount.
                                </div>
                            </div>
                        </div>

                        <div class="accordion panel panel-primary">
                            <div class="accordion-heading panel-heading" id="acc_p_10" role="tab">
                                <h4 class="accordion-title panel-title">
                                    <a href="#ac_pr_col10" aria-expanded="false" data-toggle="collapse" class="collapsed"
                                       aria-controls="ac_pr_col10" data-parent="#accordion3" role="button">
                                        How long does it take to make a deposit for an investment?</a></h4>
                            </div>
                            <div class="collapse panel-collapse" id="ac_pr_col10" role="tabpanel" aria-labelledby="acc_p_10"
                                 aria-expanded="false">
                                <div class="accordion-body panel-body">
                                    Your deposit will be credited rather quickly. However, Bitcoin payment may take some time. All operations are confirmed by a Bitcoin network. Every single computer at the Bitcoin network confirms your operation, increasing the total number of confirmations. When the transaction confirmations counter reaches a certain amount, usually 3-6 confirmations, the transaction appears in the recipient’s account. Six confirmations usually take from 30 to 60 minutes.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
