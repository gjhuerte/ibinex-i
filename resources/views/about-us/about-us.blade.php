@extends('layouts.app')

@section('title','About Us')


@push('stylesheets')
<link href="{{ asset("./css/about-us.css") }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
@endpush

@section('header-content')
<section id="hero-content" class="col-xl-7 col-lg-12 mx-auto">
    <h1 class="title text-center">About Ibinex</h1>
    <p class="description text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiulgod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
</section>
@endsection

@section('body-class','about')
@section('bg-img','./about-bg.png')
@section('content')
<div class="container-fluid">
<div>
<div id="transparency" class="row">
<div id="transparency-left">
    <h2 id="trans-title" class="mb-4">
        Transparency
    </h2>
    <p>
        Ibinex is a collaboration of pioneers. With decades of combined experience
        within the finance, technology, cyber security and SaaS worlds, today we are
        proud to work with over 60 of the leading exchanges for hundreds of cryptocurrencies.
    </p>
    <p>
        We channel our extensive industry knowledge and vision into the live and developing
        cryptocurrency arena, to provide you with premium solutions for you to create tailored
        exchange platforms with our seasoned experience as your competitive edge.
    </p>
    <p>
        We are trusted by thousands of customers world-wide daily as their white-label
        exchange platform, and pride ourselves on exhibiting the very highest standards
        of transparency and professionalism.
    </p>
    <p>
        Ibinex is defined by our dedication to unifying trading standards in the
        cryptocurrency world, increasing accountability, integrity and excellence in service.
    </p>
</div>
<div id="transparency-right">
    <div class="row mb-5">
        <div class="inner-left col-5">
            <img src="{{asset('img/trans1.png')}}" class="img-fluid">
            <div class="mt-lg-4 mt-2 row">
                <div class="col-7 py-0 pr-2">
                    <img src="{{asset('img/trans2.png')}}" class="img-fluid">
                </div>
                <div class="col-5 pl-0">
                    <img src="{{asset('img/trans3.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col pr-0 pt-lg-5 pt-0">
            <img id="transparency-right-floater" src="{{asset('img/trans5.png')}}" class="img-fluid">
        </div>
    </div>
    <div class="row  hide-on-med">
        <div id="transparency-right-4" class="col-lg-auto">
            <img src="{{asset('img/trans4.png')}}" class="img-fluid">
        </div>
        <div id="trans-quote-div" class="col-lg-5 m-4">
            <p id="transparency-quote" class="quotes">
                We can never be sure what the next day, the next week, the next decade
                will bring. The future is an unexplored realm packed with dreams,
                surprises, even possible victories.
            </p>
        </div>
    </div>
</div>
</div> <!-- row -->
</div>

<div id="executive-team">
    <div class="row mb-lg-5" id="people-behind-bg">
        <div class="col-lg-12 pb-3 pb-xl-5 text-center">
        <h2 id="exec-title">
            The people behind Ibinex
        </h2>
        </div>
        <div id="exec-inner" class="row w-100">
            <div id="exec-spacer-left" class="col-lg-2 order-1">
                <!--spacer-->
            </div>
            <div id="exec-inner-left" class="col-lg-4 mr-2 mx-lg-3 order-2 mb-lg-5 pb-lg-5 order-lg-2" id="exec-desc">
                <p class="exec-name blue-ibinex my-0">
                    Michael Peers
                </p>
                <p class="exec-rank blue-ibinex mt-0">
                    Sales Consultant, EMEA
                </p>
                <p class="exec-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiulgod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
                <p class="py-2">
                    <button class="btn blue-ibinex-bg btn-primary round-btn linked-in-btn">
                        <img src="{{asset('img/linked_in.png')}}" /> Linkedin profile
                    </button>
                </p>
            </div>
            <div id="exec-inner-right" class="col-lg-4 order-1 order-lg-3 text-center text-lg-left">
                <span class="exec-helper"></span>
                <img src="{{asset('img/taov2.png')}}" class="img-fluid ml-3 mh-100 exec-img" id="circ-pic"/>
                <div><img src="{{asset('img/circ.png')}}" class="img-fluid" id="circ" /></div>
            </div>
            <div class="med-hide col-lg-2 order-4">
                <!--spacer-->
            </div>
        </div>
    </div>
</div>

<div class="my-0" id="press">
    <div class="row">
        <div id="media-coverage-floater" class="col-lg-6 col-md-12 blue-ibinex-bg">
            <div class="row">
                <div class="media-quotes quotes text-white px-3 py-5 px-lg-0 py-lg-0 mr-lg-4 mr-0">
                    <p id="thirdfold-p1">This is the dawn of a new era. A great era, we believe. Because with every beat of the heart, a starting signal rings out.</p>
                    <p>With each tick of the clock we gain one second. With each new thought we change the way we think forever.</p>
                </div>
            </div>
        </div>
        <div id="media-coverage-companies" class="col-lg-6 text-center text-lg-left">
            <h2 id="media-title" style="color:#333">
                Ibinex media coverage
            </h2>
            <div id="media-album">
                <img class="media-img" src="{{asset('img/media1.png')}}" alt="mashable"/>
                <img class="media-img" src="{{asset('img/media2.png')}}" alt="businsessinsider"/>
                <img class="media-img" src="{{asset('img/media3.png')}}" alt="huffpost"/>
                <img class="media-img" src="{{asset('img/media4.png')}}" alt="the wall street journal"/>
                <img class="media-img" src="{{asset('img/media5.png')}}" alt="usa today"/>
                <img class="media-img" src="{{asset('img/media6.png')}}" alt="the economist"/>
                <img class="media-img" src="{{asset('img/media7.png')}}" alt="yahoo finance"/>
                <img class="media-img" src="{{asset('img/media8.png')}}" alt="the guardian"/>
                <img class="media-img" src="{{asset('img/media9.png')}}" alt="tech crunch"/>
                <img class="media-img" src="{{asset('img/media10.png')}}" alt="the new york times"/>
                <img class="media-img" src="{{asset('img/media11.png')}}" alt="los angeles times"/>
                <img class="media-img" src="{{asset('img/media12.png')}}" alt="buzzfeed"/>
            </div>
        </div>
        <div class="col-xl-2"></div>
    </div>
</div>

<div class="my-0">
<div class="row">
    <div id="advisory-board" class="col-12">
        <div class="py-4 text-center">
            <h2 id="board-title" class="mx-5">Ibinex Advisory Board</h2>
        </div>
        <div id="board-box">
            <div id="board-list" class="hide-on-med">
                <div class="board-members">
                    <img src="{{asset('img/board1.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jeremy Corbein</span>
                    <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board2.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jimmy Fallon</span>
                    <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board3.png')}}" class="board-img" />
                    <span class="board-name exec-header">Stephen Colbert</span>
                    <span class="board-rank">Head of Products and Services Development Department XB Software</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board4.png')}}" class="board-img" />
                    <span class="board-name exec-header">Artem Kushik</span>
                    <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board1.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jeremy Corbein</span>
                    <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board2.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jimmy Fallon</span>
                    <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board3.png')}}" class="board-img" />
                    <span class="board-name exec-header">Stephen Colbert</span>
                    <span class="board-rank">Head of Products and Services Development Department XB Software</span>
                </div>
                <div class="board-members">
                    <img src="{{asset('img/board4.png')}}" class="board-img" />
                    <span class="board-name exec-header">Artem Kushik</span>
                    <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
                </div>
            </div>
            <div class="board-slick hide-on-lg">
                <div class="board-members slick-members">
                    <img src="{{asset('img/board1.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jeremy Corbein</span>
                    <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board2.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jimmy Fallon</span>
                    <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board3.png')}}" class="board-img" />
                    <span class="board-name exec-header">Stephen Colbert</span>
                    <span class="board-rank">Head of Products and Services Development Department XB Software</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board4.png')}}" class="board-img" />
                    <span class="board-name exec-header">Artem Kushik</span>
                    <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board1.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jeremy Corbein</span>
                    <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board2.png')}}" class="board-img" />
                    <span class="board-name exec-header">Jimmy Fallon</span>
                    <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board3.png')}}" class="board-img" />
                    <span class="board-name exec-header">Stephen Colbert</span>
                    <span class="board-rank">Head of Products and Services Development Department XB Software</span>
                </div>
                <div class="board-members slick-members">
                    <img src="{{asset('img/board4.png')}}" class="board-img" />
                    <span class="board-name exec-header">Artem Kushik</span>
                    <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
                </div>
            </div>
            <div id="board-arrow-box" class="hide-on-lg">
                <a id="board-prev" class="board-arrows" href="#">&lsaquo;</a>
                <a id="board-next" class="board-arrows" href="#">&rsaquo;</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="py-lg-5">
    <div id="last-quote-box" class="row py-lg-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 text-center px-3 my-5">
            <p id="last-quote" class="quotes blue-ibinex">
                Tommorow does not yet exist, but our dreams do. So, we get to work today,
                like always. Because "tomorrow" will be what we make it. And if we can create
                the future in our heads, it will meet us halfway.
            </p>
        </div>
        <div class="col-lg-3"></div>
    </div><!-- row -->
</div>
</div><!--container-->
@endsection

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset("js/about-us.js") }}"></script>
@endpush


