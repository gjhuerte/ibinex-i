<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Expires" content="30" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title') - Ibinex</title>
    <!-- Le styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset("css/animate.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/ib-loader.css") }}" rel="stylesheet" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset("img/logo/ibinex-red.ico") }}" />
    {{--<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />--}}
    @stack('stylesheets')
</head>

<body class='@yield('body-class')-template' @yield('scrollspy')>
<div id='main-body' class='container-fluid position-relative'>
    <header id="fullscreen-hero" class="@yield('header-height')" style="background-image: url({{ asset("img/")}}{{ "/" }}@yield('bg-img'));">
        <div class="gradient-wrapper">
            <div class="container d-flex flex-wrap">
                @include('layouts.navbar')
                <section class="container">
                    @yield('header-content')
                </section>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</div>
<!-- div container end-->

@yield('nav-links')
<!-- Le javascript
  ================================================== -->
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="{{ asset("js/ib-loader.js") }}"></script>
<script src="{{ asset("js/ibinex.js") }}"></script>
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>--}}
{{--<script src="script.js"></script>--}}
@stack('scripts')
{{--<script src="script.js"></script>--}}
@stack('custom-scripts')
</body>

</html>