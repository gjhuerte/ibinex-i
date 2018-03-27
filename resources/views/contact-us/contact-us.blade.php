@extends('layouts.app')

@section('title','Contact Us')


@push('stylesheets')
    <link href="{{ asset("css/contact-us.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12 mx-auto">
        <h1 class="title text-center">Contact Us</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection
@section('body-class','contact')
@section('bg-img','contact-bg.png')
@section('content')
        <section>
                    <div class="container">
                        <div class="ib-get-started">
                            <div class="row ib-get-started-a">
                                <div class="col-sm p-0">
                                    <h2>
                                        Get Started
                                    </h2>
                                    <p class="ib-mb-1">
                                        We invite you to first experience the Ibinex demo <a>here</a>, which will help you to conceptualise the possibilities of personalisation for your own exchange.
                                    </p>
                                    <p class="ib-mb-2">
                                        The next step is to contact us to discuss on-boarding. It is a simple process which you can learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                                    </p>
                                </div>
                            </div>
                            <div class="row ib-get-started-b text-center ib-text-center">
                                <div class="col-sm">
                                    <div class="py-3 ib-circle-c">
                                        <span class="ib-circle">1</span>
                                    </div>
                                    <img class="img-1 ib-pb-2 pt-4 pb-5" src="{{ asset("img/p1.png") }}" />
                                    <div class="label pt-3 ib-pt-1">
                                        Local Escrow deposit
                                    </div>
                                    <div class="label ib-pb-1">
                                        (reserve only, no payment)
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="py-3 ib-circle-c">
                                        <span class="ib-circle">2</span>
                                    </div>
                                    <img class="ib-p py-3" src="{{ asset("img/p2.png") }}" />
                                    <div class="label pt-2 ib-pb-1">
                                        Letter of Intent
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="py-3 ib-circle-c">
                                        <span class="ib-circle">3</span>
                                    </div>
                                    <img class="ib-p py-2" src="{{ asset("img/p3.png") }}" />
                                    <div class="label pt-2 ib-pb-1 ib-pb-2">
                                        Proof of Escrow deposit
                                    </div>
                                </div>
                            </div>
                            <div class="ib-note text-center mt-5">
                                <p>
                                    Please note that, due to high demand, the current on-boarding time frame is 4 months.
                                </p>
                            </div>
                        </div>
                    </div>
        </section>
        <section>
                    <div class="ib-contact">
                        <div class="row ib-contact-support">
                            {{--<div class="col-sm-2"></div>--}}
                            <div class="col-sm-5">
                                <div class="ib-support-text">
                                    <h2>
                                        Support
                                    </h2>
                                    <p class="p1">
                                        Contact and feedback are integral to the Ibinex way, enabling
                                        us to cater to your needs and requirements effectively and efficiently.
                                    </p>
                                    <p class="p2">
                                        For support regarding any aspect of the Ibinex platform, your use of this website
                                        or your own exchange integrationm please contact us with your enquiry for
                                        personalised customer service.
                                    </p>
                                    <p class="p3">
                                        We will endeavour to respond to you as promptly as possible.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-7 ib-contact-bg">
                                <div class="ib-contact-form">
                                    <form>
                                        <div class="form-group">
                                            <label for="inputFullName">Full Name</label>
                                            <input type="text" class="form-control" id="inputFullName">
                                        </div>
                                        <div class="form-group c-g-1">
                                            <label for="inputEmail">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group c-g-1">
                                            <label for="inputSubject">Subject</label>
                                            <input type="text" class="form-control" id="inputSubject">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage">Message</label>
                                            <textarea class="form-control" id="inputMessage" rows="10"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">SEND</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
@endsection

@push('scripts')
<script src="{{ asset("js/contact-us.js") }}"></script>
@endpush