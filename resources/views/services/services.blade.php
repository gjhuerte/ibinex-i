@extends('layouts.app')

@section('title','Services')

@push('stylesheets')
    <link href="{{ asset("css/services.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12 mx-auto">
        <h1 class="title text-left text-sm-center">Services</h1>
        <p id="hero-first-p" class="description text-left text-sm-center">Ibinex services are all characterised by high-level innovation made practical for your personalised exchange integration.</p>
        <p id="hero-second-p" class="description text-left text-sm-center">Our ecosystem of services comprises of the following units.</p>
        {{--<button class="semi-circle green"><span style="line-height:0">Request a Demo</span></button>--}}
    </section>
@endsection

@section('body-class','services')
@section('bg-img','services_hero.png')
@section('scrollspy')
    data-spy="scroll" data-target="#inner-nav" data-offset="150"
@endsection
@section('content')
    <div class="d-none d-lg-block sticky-top">
        <nav id="inner-nav" class="navbar navbar-expand-md navbar-white bg-white p-bot-30">
            <div id="menu-center" class="container">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item inner-nav-item">
                        <a class="nav-link inner-nav-link menu2" href="#platform-section">Platform</a>
                    </li>
                    <li class="nav-item inner-nav-item">
                        <a class="nav-link inner-nav-link menu2" href="#crm-section">CRM Back Office</a>
                    </li>
                    <li class="nav-item inner-nav-item">
                        <a class="nav-link inner-nav-link menu2" href="#crypto-bridge-section">CryptoBridge&trade;</a>
                    </li>
                    <li class="nav-item inner-nav-item">
                        <a class="nav-link inner-nav-link menu2" href="#credit-card-section">Credit Card Processing</a>
                    </li>
                    <li class="nav-item inner-nav-item">
                        <a class="nav-link inner-nav-link menu2" href="#custodian-section">Custodian Accounts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row max-width-none">
            <div id="platform-section" class="col-12 bg-light max-width-none">
                <div class="container-fluid max-width-none">
                    <div class="row platform-content">
                        <div class="col-12 col-lg-6 px-0">
                            <div id="laptop-container">
                                <div id="platform-img-container" class="macbook-img1 inner-platform">
                                    {{--<img class="w-100" src="{{asset('img/l1.png')}}" alt="Cryptocurrency Graphs on Macbook">--}}
                                </div>
                            </div>
                        </div>

                        <div id="platform-text-container" class="col-12 col-lg-6 inner-platform platform-text">
                            <div>
                                <p class="text-dark font-34" style="line-height: 2;">Platform</p>
                                <p class="text-secondary text-justify mb-sm-1 mt-sm-0 lh-18">
                                    Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:
                                </p>
                            </div>
                            <div class="text-primary text-justify platform-text-inner">
                                <strong>
                                    <p class="m-bot-30 m-top-40">Tailor-made private, institutional white label infatructure</p>
                                    <p class="m-bot-30 m-top-28">Fully-customisable front-end website</p>
                                    <p class="m-bot-30 m-top-28">Completely integrated web-based trading platform</p>
                                    <p class="m-bot-30 m-top-28">Flexible front-end user trading</p>
                                    <p class="m-bot-30 m-top-28">Performance-driven features</p>
                                    <p class="m-bot-30 m-top-28">Secure private cloud hosting</p>
                                    <p class="m-bot-30 m-top-28">Total compatibility with your own branding deck.</p>
                                </strong>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 bg-light  --> {{--#platform--}}


            <div id="crm-section" class="container-fluid crm-container">
                <div class="row max-width-none">
                    <div id="crm-left-container" class="col-12 col-lg-6 bg-white crm second-section">
                        <div class="inner-crm">
                            <div class="text-left">
                                <span class="text-dark font-34">CRM Back Office</span>
                            </div>
                            <div class="">
                                <p class="text-secondary text-justify mt-sm-0 mb-sm-3 lh-18">The Ibinex solution unites the front-end and platform with a full back office suit including CRM with:</p>
                            </div>
                            <div class="text-primary text-justify">
                                <strong>
                                    <p class="m-bot-30 m-top-25">KYC/AML doccumentation collection</p>
                                    <p class="m-bot-30 m-top-25">Documentation verification</p>
                                    <p class="m-bot-30 m-top-25">Account and money management</p>
                                    <p class="m-bot-30 m-top-25">Optimised back-office administrative workflow</p>
                                    <p class="m-bot-28">Enhanced UI/UX</p>
                                </strong>
                            </div>
                        </div>
                    </div> <!-- /.col-12 bg-white crm -->
                    <div id="second-section-container" class="col-12 col-lg-6 second-section">
                        <div class="row">
                            <div class="col-12 bg-white lorem px-0">
                                <div class="macbook-img l2">
                                    <!--                    <img src="assets/images/l2.png" alt="Macbook Laptop"> -->
                                </div>
                            </div> <!-- /.lorem -->
                            <img class="red-ellipse" src="{{asset('img/ellipse.png')}}" alt="Ellipse">

                            <div class="col-12 text-white lorem-ipsum px-0">
                                <div class="inner-lorem">
                                    <p class="text-justify text-sm-left h4 inner-quote">
                                        <em>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </em></p>
                                    <p class="huffpost-bottom">HuffPost</p>
                                </div>
                            </div> <!-- /.lorem -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-12 -->
                </div>
            </div> {{--#CRMbackoffice--}}



            <div id="crypto-bridge-section" class="col-12 cb px-0">
                <div class="container-fluid">
                    <div class="row max-width-none">
                        <div class="d-none d-md-none d-lg-block col-sm-6 col-lg-6 px-0 cb-logo third-section">
                        </div>

                        <div class="d-block d-lg-none col-12 cb1 third-section-mobile">

                        </div>
                        <div class="d-block d-lg-none col-12 cb2 third-section-mobile">

                        </div>
                        <div id="third-section-container" class="col-12 col-sm-6 col-md-12 col-lg-6 cb-text third-section">
                                <p class="text-dark font-34 heading-margin-sm">CryptoBridge<sup>&trade;</sup></p>
                                <p class="text-justify text-sm-left mb-sm-5 pb-sm-5 mt-sm-0">Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite,
                                    CryptoBridge<sup>&trade;</sup>. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through
                                    CryptoBridge<sup>&trade;</sup> by Ibinex.</p>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 CB logo--> {{--#cryptoBridge--}}


            <div id="credit-card-section" class="col-12 bg-white px-md-0">
                <div class="container-fluid">
                    <div class="row max-width-none">
                        <div id="fone-img-container" class="col-12 col-sm-6 col-md-6 d-none d-lg-block">
                            <div class="fone-img fourth-section">
                                <!--                 <img class="w-100" src="assets/images/fone.png" alt="Phone"> -->
                            </div>
                        </div>

                        <div id="fourthSection" class="col-12 col-sm-6 col-md-12 col-lg-4 credit-card fourth-section">
                            <p class="text-dark font-34 heading-margin-sm">Credit Card Processing</p>
                            <p class="text-justify mt-sm-0">
                                We offer full spectrum payment processing for cryptocurrencies, and a complete selection that is unavailable elsewhere.
                                Exchanging your way with Ibinex means experiencing a whole new world of payment options including: credit cards, debit cards,
                                wire transfers, alternative payments, hosted wallets and cold wallets.
                            </p>
                            <img class="w-100" src="{{asset('img/cc.png')}}" alt="Credit Card">
                        </div>
                    </div>
                </div>
            </div> <!-- /.credit-card --> {{--#creditCard--}}

            <div id="custodian-section" class="col-12 custodian px-0 pt-4">
                <div class="container-fluid">
                    <div class="row max-width-none">
                        <div class="col-12 col-sm-6 col-md-12 col-lg-6 custodian-left fifth-section">
                            <p class="font-34 heading-margin-sm text-dark">Custodian Accounts</p>
                            <p class="normal-p text-justify mt-sm-0 m-bot-30">
                                Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license.
                                We are proud to be the first to offer you:
                            </p>
                            <strong>
                                <p class="custodian-p m-bot-30">
                                    Fully-compliant licensed custodian proceeding and accounts
                                </p>
                                <p class="custodian-p m-bot-30">
                                    The choice to instead select a custodian of your choice
                                </p>
                                <p class="custodian-p m-bot-30">
                                    Payments via swipe-and-transmit from FIAT to base currency
                                </p>
                                <p class="custodian-p m-bot-30">
                                    Fully-compliant licensed custodian proceeding and accounts
                                </p>
                            </strong>
                        </div>
                        <div id="fifthSection" class="col-12 col-sm-6 col-md-12 col-lg-6 px-0 fifth-section">
                            <div class="qtt-container">
                                {{--<div class="qtt-image-container">--}}
                                    <div class="col-12 qtt px-0">
                                        <!--<img class="qtt-img" src="" alt=""> -->
                                    </div>
                                {{--</div>--}}
                                <img class="red-ellipse-2" src="{{asset('img/ellipse.png')}}" alt="Ellipse">
                                <div class="col-12 col-sm-10 col-md-12 col-lg-10 text-white px-3 lorem-ipsum-lower">
                                    <p class="text-justify h4 inner-quote">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Distinctio praesentium ex possimus aspernatur consequatur dicta nemo.

                                    </p>
                                    <p class="huffpost-bottom">HuffPost</p>
                                </div> <!-- /.lorem -->
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 custodian --> {{--#custodian--}}
        </div> <!-- /.row -->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset("js/services.js") }}"></script>
@endpush