@extends('layouts.app')

@section('title','Home')


@push('stylesheets')
    <link href="{{ asset("css/home.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12">
        <div class="col-xl-12 col-sm-12 order-xl-1 header-div header-pad">
            <h1 class="title text-left">Introducing CryptoBridge™</h1>
            <p class="description1 text-justify">Our patent-pending proprieta&shy;ry software, CryptoBridge, is the nexus that aggregates premier cryptocurrency ex&shy;changes and indexes for your customers, in real-time.</p>
            <p class="description2 text-justify">The CryptoBridge algorithm benefits your customers by showing them a unique com&shy;bination of the best and most select cryptocurrency exchan&shy;ges and most attractive live prices - only available via the Ibinex trading platform.</p>
            <button class="semi-circle green"><span style="line-height:0">Request a Demo</span></button>
        </div>
    </section>
@endsection

@section('body-class','home')
{{--@section('header-height','full-height')--}}
@section('bg-img','home-cover.png')

@push('custom-scripts')
    <script src="http://hammerjs.github.io/dist/hammer.min.js"></script>
    <script>

        $(function() {
            //floating button will remain a circle at all times
            let faButton = $('.faButton');
            faButton.css('display', 'block').css('height', faButton.width());
            $(window).resize(function() {
            });

            //floating play button's position
            let playButton = $('.playButton');
            let playSize =  parseInt(playButton.height()) / 2;
            if($( document ).width() > 1201)
                playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', (0 - playSize));
            else
                playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', parseInt($('div.embed-image.halfed').width()) / 2 - playSize);

            $(window).resize(function() {
                //floating button will remain a circle at all times
                faButton.css('height', faButton.width());

                //margin-right fix for fifth-fold
                marginRight = parseInt($('#third-fold > .row').css('margin-right'));
                $('#fifth-fold > .row').css('margin-right', marginRight).css('margin-left', marginRight);

                //play button position
                if($( document ).width() > 1200)
                    playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', (0 - playSize));
                else
                    playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', parseInt($('div.embed-image.halfed').width()) / 2 - playSize).delay(1000);
            });
        });

    </script>
@endpush

@section('content')
    <!--1  -->
    <section id="second-fold" class="container-fluid bg-color-grey">
        <section class="row no-gutters pt-md-5 position-relative fixed-height">
            <!--Will remove fixed-height -->
            <aside class="col-xl-8 order-xl-2 d-none  d-xl-block position-absolute stick-right">
                <img class="lap-right" src="{{asset("img/qHjq1P1.png")}}" height="590" alt="bootstrap">
            </aside>
            <div class="col-xl-7 order-xl-1">
                <h2 class="title text-left text-center-sm lap-text1">Ibinex - The Gateway to your Own</h2>
                <h2 class="title text-left text-center-sm lap-text2">Customised Cryptocurrency Ecosystem</h2>
                <h2 class="title text-left text-center-sm lap-text9">Ibinex - The Gateway to your Own Customised Cryptocurrency Ecosystem</h2>
                <p class="text-justify pt-2 ws-5 lap-p1">With an in-depth understanding of evolving blockchain technology and cryptocurrency development, Ibinex invite you to engage with a fully-customisable, private, institutional white label platform. Trailblazing turnkey solutions to merge with
                    your own web-based platform, Ibinex, will show you definitely how to build a cryptocurrency exchange, your way.</p>
            </div>
        </section>
    </section>


    <!-- 2 -->
    <section id="third-fold" class="container-fluid bg-color-white mb-5 ex-sec">
        <section class="row pt-lg-5 position-relative pt-3">
            <div class="col-xl-6 order-xl-12">
                <h2 class="title text-left title-sm third-div">
                    <div class="d-lg-block d-none">
                        <h2 class="title text-left text-center-sm lap-text3">Exchange your Way with Ibinex.</h2><br>
                        <h2 class="title text-left text-center-sm lap-text4">Your Turn-Key Solution Includes:</h2>
                    </div>
                    <div class="d-lg-none">
                        <span>Exchange your Way with Ibinex.
                        Your Turn-Key Solution Includes:</span>
                    </div>
                </h2>

                <section class="pt-4">
                    <h2 class="lap-text5 sub-title blue bold">Tailored Front End content website</h2>
                    <p class="lap-text6 description text-justify pt-1 ws-5">Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand, the Ibinex solution showcases enhanced practicality and performance driven features.</p>
                </section>

                <section class="mt-5 pt-1">
                    <h2 class="lap-text7 sub-title blue bold">Full CRM & Back Office Solution</h2>
                    <p class="lap-text8 description text-justify pt-2 ws-5">The Ibinex ecosystem assimilates a com&shy;plete Customer Relationship Manage&shy;ment (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account & money man&shy;agement. The result is an effortless back office administration workflow and smooth UI/UX for your customers.</p>
                </section>

            </div>

            <aside class="col-xl-6 order-xl-1 position-relative">
                <img class="raise-image" src="{{asset("img/3nSwpAa.png")}}" height="520" alt="bootstrap">
            </aside>

        </section>
    </section>

    <!--3 -->
    <section id="fourth-fold" class="container-fluid bg-color-grey mb-5 position-relative">
        <section class="row embed-parent ex-sec1">
            <div class="col-xl-6 order-xl-1 ex-div1">
                <section class="pt-3">
                    <h2 class="sub-title blue bold title-1 ex-h2-1">Aggregated Liquidity Exchange</h2>
                    <p class="description text-justify ex-p1">Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.</p>
                </section>

                <section class="pt-4">
                    <h2 class="sub-title blue bold title-2 ex-h2-2">Complete processing solution</h2>
                    <p class="description text-justify pt-1 ex-p2">With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilities for your exchange to thrive in maximum liquidity.</p>
                </section>
            </div>


            <aside class="col-xl-6 order-xl-12 embed-parent-wrap top right ex-image">
                <div class="embed-image ex-image1" style="background-image: url('{{ asset("img/home-card.png") }}');">&nbsp;</div>
                <div class="embed-blue-wrap shadow">
                    <div class="faButton top-half red-button shadow d-flex justify-content-center ex-quote">
                        <img src="{{ asset('img/quote-mark.png') }}" alt="Quotation Mark" class="quote-mark">
                    </div>
                    <section class="quote-wrapper">
                        <p class="quote text-justify font-weight-bold mb-2 ex-p3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <span class="author ex-p4">HuffPost</span>
                    </section>
                </div>
            </aside>


        </section>
    </section>

    <!--4 -->
    <section id="fifth-fold" class="container-fluid position-relative">
        <section class="row embed-parent max-width-none" style="margin-right: 390px;margin-left: 390px;margin-bottom: 124px;">
            <section class="row mx-0">
                <div class="col-xl-6 order-xl-2 ex-col">
                    <section class="pt-4">
                        <h2 class="sub-title blue bold sm-title-lh ex-h2-3">Compliant Banking Custodian Service</h2>
                        <h2 class="sub-title blue bold sm-title-lh ex-h2-7">Compliant Banking Custodian service</h2>
                        <p class="description text-justify pt-2 ex-p5">Ibinex is the first ever cryptocurrency ex&shy;change platform in the world that has a finance transaction license. We can offer fully-compliant and licensed custo&shy;dian processing and accounts, or you can choose to operate with your own custodian. Ibinex is licensed to facilitate pay&shy;ments via swipe-and-transmit from FIAT to a base currency. This preferred solution is unavailable to the bigger crypto&shy;currency exchanges, and is only offered by Ibinex.</p>
                    </section>

                    <section class="pt-4">
                        <h2 class="sub-title blue bold sm-title-lh pt-2 ex-h2-4">Hosted in a secure private cloud environment</h2>
                        <p class="description text-justify pt-1 ex-p6">Security is a 360 degree operation, with the Ibinex platform guarded 24/7 in a pri&shy;vate cloud and crypto-based funds held in shielded cold wallets. Cyber security ex&shy;perts maintain and defend the platform. While cold wallets containing funds are im&shy;pregnable, offline, and safely out of unau&shy;thorised reach.</p>
                    </section>

                    <section class="pt-4">
                        <h2 class="sub-title blue bold sm-title-lh ex-h2-5">Our Vision</h2>
                    </section>
                </div>

                <div class="col-xl-6 order-xl-1 d-none d-lg-block d-xl-block" style=""></div>
            </section>

            <aside class="col-xl-6 order-xl-1 embed-parent-wrap left ex-wrap">
                <div class="embed-image halfed shadow ex-image2">
                    <div class="playButton faButton raise-half blue-button shadow d-flex justify-content-center ex-quote1">
                        <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="13" viewBox="0 0 448 512" fill="white"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"/></svg>
                    </div>
                </div>
            </aside>

        </section>
    </section>

    <!--5 -->
    <section id="sixth-fold" class="container-fluid bg-color-grey py-5 ex-sec2">
        <header class="title-section text-center">
            <h2 class="sub-title grey bold ex-h2-6">Learn more about Ibinex</h2>
            <h1 class="title black smaller bold ex-h1">Technical Papers & Legal Circular</h1>
        </header>
        <section class="row slide text-center d-none d-md-block bro-sec">

            <section id="downloadables" class="d-flex justify-content-around flex-wrap">
                <!-- FIRST ROW START -->

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img1" src="{{ asset('img/b1.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-1" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p class="bro-p-1">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-1">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img2" src="{{ asset('img/b2.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-2" style="color: rgb(139, 81, 54)">One Page Brochure</h2>
                    <p class="bro-p-2">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-2">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img3" src="{{ asset('img/b3.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-3" style="color: rgb(157, 80, 74)">Custodian Guidelines</h2>
                    <p class="bro-p-3">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-3">Download</button>
                </div>
                <!-- FIRST ROW END -->
                <!-- SECOND ROW START -->

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img4" src="{{ asset('img/b4.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-4" style="color: rgb(116, 133, 92)">Pricing Model</h2>
                    <p class="bro-p-4">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-4">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img5" src="{{ asset('img/b5.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-5" style="color: rgb(102, 70, 129)">Terms & Conditions</h2>
                    <p class="bro-p-5">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-5">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="bro-img6" src="{{ asset('img/b6.png')}}" alt="Brochure"/>
                    <h2 class="grey bold bro-h2-6" style="color: rgb(74, 93, 134)">KYC & AML Requirements</h2>
                    <p class="bro-p-6">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure bro-btn-6">Download</button>
                </div>
                <!-- SECOND ROW END -->
            </section>

        </section>

        <div class="carousel slide d-md-none" data-interval="false" data-ride="carousel" id="brochures-carousel">

            <div id="downloadables" class="carousel-inner">


                <!-- FIRST ROW START -->

                <div class="carousel-item text-center active">
                    <!-- 1 -->
                    <img class="bro-img1" src="{{ asset('img/b1.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">Business Model</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="carousel-item text-center">
                    <!-- 1 -->
                    <img class="bro-img2" src="{{ asset('img/b2.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(139, 81, 54);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">One Page Brochure</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="carousel-item text-center">
                    <!-- 1 -->
                    <img class="bro-img3" src="{{ asset('img/b3.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(157, 80, 74);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">Custodian Guidelines</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>
                <!-- FIRST ROW END -->
                <!-- SECOND ROW START -->

                <div class="carousel-item text-center">
                    <!-- 1 -->
                    <img class="bro-img4" src="{{ asset('img/b4.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(116, 133, 92);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">Pricing Model</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="carousel-item text-center">
                    <!-- 1 -->
                    <img class="bro-img5" src="{{ asset('img/b5.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(102, 70, 129);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">Terms & Conditions</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="carousel-item text-center">
                    <!-- 1 -->
                    <img class="bro-img6" src="{{ asset('img/b6.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(74, 93, 134);font-size:  1.23em;margin-top:  1.3em;margin-left: -0.2em;letter-spacing: -0.3px;">KYC & AML Requirements</h2>
                    <p style="margin-top: -0.55em; letter-spacing: -0.2px; margin-left: -0.1em;">PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>
                <!-- SECOND ROW END -->

                <a class="carousel-control-prev" href="#brochures-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#brochures-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>

        </div>

    </section>
    <section id="seventh-fold" class="text-center my-5 cov-sec-1">
        <header>
            <h1 class="title black smaller bold cov-h1-1">Ibinex Media Coverage</h1>
        </header>
        <section id="logo" class="mt-5">
           <img alt="" class="flexed-image cov-img-1" src="{{ asset("img/logo/logo-1.png") }}">
           <img alt="" class="flexed-image cov-img-2" src="{{ asset("img/logo/logo-2.png") }}">
           <img alt="" class="flexed-image cov-img-3" src="{{ asset("img/logo/logo-3.png") }}">
           <img alt="" class="flexed-image cov-img-4" src="{{ asset("img/logo/logo-4.png") }}">
           <img alt="" class="flexed-image cov-img-5" src="{{ asset("img/logo/logo-5.png") }}">
           <img alt="" class="flexed-image cov-img-6" src="{{ asset("img/logo/logo-6.png") }}">
        </section>
    </section>
@endsection


@push('scripts')
    <script src="{{ asset("js/home.js") }}"></script>
@endpush