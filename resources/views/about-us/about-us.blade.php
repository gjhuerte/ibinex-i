@extends('layouts.app')

@section('title','About Us')


@push('stylesheets')
<link href="{{ asset("css/about-us.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
<section id="hero-content" class="col-xl-7 col-lg-12 mx-auto">
<h1 class="title text-center">About Ibinex</h1>
<p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</section>
@endsection

@section('body-class','about')
@section('bg-img','about-us/about-bg.png')
@section('content')
<div class="container-fluid px-lg-3">

<div id="transparency">

<div class="row pt-lg-5">
<div class="col-lg-2"><!-- spacer --></div>
<div class="col-lg-4 mt-5 px-3 py-lg-5">
    <h2 class="mb-4" style="font-size:34px;">
        Transparency
    </h2>
    <p>
        Ibinex is a collaboration of pioneers. With decades of combined experience within the finance, technology, cyber security and SaaS worlds, today we are proud to work with over 60 of the leading exchanges for hundreds of cryptocurrencies.
    </p>
    <p>
        We channel our extensive industry knowledge and vision into the live and developing cryptocurrency arena, to provide you with premium solutions for you to create tailored exchange platforms with our seasoned experience as your competitive edge.
    </p>
    <p>
        We are trusted by thousands of customers world-wide daily as their white-label exchange platform, and pride ourselves on exhibiting the very highest standards of transparency and professionalism.
    </p>
    <p>
        Ibinex is defined by our dedication to unifying trading standards in the cryptocurrency world, increasing accountability, integrity and excellence in service.
    </p>
</div>
<div class="col-lg-6 pl-lg-4">
    <div class="row mb-5">
        <div class="col-5" style="flex:0 auto; width:auto; padding-right:0">
            <img src="/img/about-us/r1.png" class="img-fluid">
            <div class="mt-lg-4 mt-2 row">
                <div class="col-7 py-0 pr-2">
                    <img src="/img/about-us/r2.png" class="img-fluid">
                </div>
                <div class="col-5 pl-0">
                    <img src="/img/about-us/r3.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col pr-0 pt-lg-5 pt-0">
            <img id="transparency-right-floater" src="/img/about-us/r5.png" class="img-fluid">
        </div>
    </div>
    <div class="row  hide-on-lg">
        <div class="col-lg-auto">
            <img src="/img/about-us/r4.png" class="img-fluid">
        </div>
        <div class="col-lg-5 m-4">
            <p id="transparency-quote" class="quotes">
                We can never be sure what the next day, the next week, the next decade will bring. The future is an unexplored realm packed with dreams, surprises, even possible victories.
            </p>
        </div>
    </div>
</div>

</div> <!-- row -->
</div>

<div id="executive-team">
<div class="row py-5 mb-lg-5" id="people-behind-bg">
<div class="col-lg-12 pb-3 pb-xl-5 text-center">
<h2>
    The people behind Ibinex
</h2>
</div>
<div class="row w-100">
<div class="col-lg-3 order-1">
    <!--spacer-->
</div>
<div class="col-lg-3 mr-2 mx-lg-3 order-2 mb-lg-5 pb-lg-5 order-lg-2" id="exec-desc">
    <p class="blue-ibinex my-0" style="font-size:32px;">
        Michael Peers
    </p>
    <p class="blue-ibinex mt-0" style="font-weight:bold;">
        Sales Consultant, EMEA
    </p>
    <p style="color:#5f5f5f;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p class="py-2">
        <button class="btn blue-ibinex-bg btn-primary round-btn px-4 py-2 linked-in-btn">
            <img src="/img/about-us/linked_in.png" /> Linkedin profile
        </button>
    </p>
</div>
<div class="col-lg-4 order-1 order-lg-3 text-center text-lg-left">

    <img src="/img/about-us/taov2.png" class="img-fluid ml-3 mh-100" id="circ-pic"/>
    <div><img src="/img/about-us/circ.png" class="img-fluid" id="circ" /></div>
</div>
<div class="col-lg-2 order-4">
    <!--spacer-->
</div>
</div>
</div>
</div>

<div class="my-0" id="press">
<div class="row">

<div id="media-coverage-floater" class="col-lg-6 col-md-12 blue-ibinex-bg">
    <div class="row">
        {{--<div class="col-xl-6">--}}
            {{--<!-- spacer-->--}}
        {{--</div>--}}
        {{--<div class="col-xl-6 my-5 p-5 pr-3">--}}
            <div class="quotes text-white px-3 py-5 px-lg-0 py-lg-0 mr-lg-4 mr-0">
                <p id="thirdfold-p1">This is the dawn of a new era. A great era, we believe. Because with every beat of the heart, a starting signal rings out.</p>
                <p>With each tick of the clock we gain one second. With each new thought we change the way we think forever.</p>
            </div>
        {{--</div>--}}
    </div>
</div>
<div id="media-coverage-images" class="col-lg-4 py-5 mx-5 text-center text-lg-left">
    <h2 style="font-size:34px;color:#333">
        Ibinex media coverage
    </h2>
    <img class="my-5 img-fluid" src="/img/about-us/companies.png" />
</div>
<div class="col-xl-2">
    <!--spacer-->
</div>
</div>
</div>

<div class="my-0" id="advisory-board">

<div class="row">
<div class="col-12 advisory-board">
    <div class="py-5 text-center">
        <h2 class="mx-5">Ibinex Advisory Board</h2>
    </div>

    <ul class="advisory-board-members-list list-inline text-center d-none d-lg-block">

        <li class="col-lg-2"><!--spacer --></li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid w-s-100" src="/img/about-us/p1.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jeremy Corbein</div>
            <div class="advisory-board-members-list-item-desc mb-5">Chief Operational Officer, Deiteriy</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p2.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jimmy Fallon</div>
            <div class="advisory-board-members-list-item-desc mb-5">Head of Economics Department, Stockholm School of Economics in Riga</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p3.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Stephen Colbert</div>
            <div class="advisory-board-members-list-item-desc mb-5">Head of Products and Services Development Department, XB Software</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p4.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Artem Kushik</div>
            <div class="advisory-board-members-list-item-desc mb-5">Business Analyst, Credit Agricole CIB</div>
        </li>

        <li class="col-lg-2"><!--spacer --></li>
        <li class="col-lg-2"><!--spacer --></li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p1.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jeremy Corbein</div>
            <div class="advisory-board-members-list-item-desc mb-5">Chief Operational Officer, Deiteriy</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p2.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jimmy Fallon</div>
            <div class="advisory-board-members-list-item-desc mb-5">Head of Economics Department, Stockholm School of Economics in Riga</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p3.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Stephen Colbert</div>
            <div class="advisory-board-members-list-item-desc mb-5">Head of Products and Services Development Department, XB Software</div>
        </li>

        <li class="advisory-board-members-list-item list-inline-item col-s-12 col-lg-2 align-top">
            <img class="advisory-board-members-list-item-image img-fluid" src="/img/about-us/p4.png" />
            <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Artem Kushik</div>
            <div class="advisory-board-members-list-item-desc mb-5">Business Analyst, Credit Agricole CIB</div>
        </li>
        <li class="col-lg-2"><!--spacer --></li>
    </ul>

    <div class="carousel slide d-lg-none text-center" data-interval="false" data-ride="carousel" id="advisory-board-members-carousel" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/about-us/p1.png">

                <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jeremy Corbein</div>
                <div class="advisory-board-members-list-item-desc mb-5">Chief Operational Officer, Deiteriy</div>
                <br/>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="/img/about-us/p2.png">
                <div class="carousel-item-caption align-middle">
                    <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Jimmy Fallon</div>
                    <div class="advisory-board-members-list-item-desc mb-5">Head of Economics Department, Stockholm School of Economics in Riga</div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="/img/about-us/p3.png">
                <div class="carousel-item-caption align-middle">
                    <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Stephen Colbert</div>
                    <div class="advisory-board-members-list-item-desc mb-5">Head of Products and Services Development Department, XB Software</div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="/img/about-us/p4.png">

                <div class="advisory-board-members-list-item-name font-weight-bold mt-5">Artem Kushik</div>
                <div class="advisory-board-members-list-item-desc mb-5">Business Analyst, Credit Agricole CIB</div>
                <br/>
            </div>

            <a class="carousel-control-prev" href="#advisory-board-members-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#advisory-board-members-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
</div>
</div>






<div class="py-lg-5">
<div class="row py-lg-5">
<div class="col-lg-3"></div>
<div class="col-lg-6 text-center px-3 my-5">
    <p class="quotes blue-ibinex">
        Tommorow does not yet exist, but our dreams do. So, we get to work today, like always. Because "tomorrow" will be what we make it. And if we can create the future in our heads, it will meet us halfway.
    </p>
</div>
<div class="col-lg-3"> </div>
</div><!-- row -->
</div>

</div><!--container-->
@endsection

@push('custom-scripts')
    <script src="{{ asset("js/about-us.js") }}"></script>
    <script src="http://hammerjs.github.io/dist/hammer.min.js"></script>

@endpush


