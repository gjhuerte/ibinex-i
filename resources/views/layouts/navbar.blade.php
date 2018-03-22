@push('logo-link', asset("img/logo.png"))

<!-- Start menu here -->
<nav class="container navbar navbar-expand-lg navbar-light bg-faded">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!--Logo here-->
            <img src="@stack('logo-link')" alt="bootstrap">
        </a>

        <div onclick="ibinex.open_nav()" id="nav-icon3" class="navbar-toggler custom-toggler">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!--Start menu items here-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link nav" href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/why-ibinex') !!}">Why iBinex</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('pricing') !!}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('services') !!}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/about-us') !!}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/security') !!}">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/contact-us') !!}">Contact Us</a>
                </li>
            </ul>

            <button class="btn my-2 my-sm-0 semi-circle pink" type="submit">Live Demo</button>

        </div>
    </div>
</nav>

@section('nav-links')
    <div class="sidenav " id="mySidenav">
        <ul class="navbar-nav mr-auto">
            <img src="/img/logo/logo-bottom.png" alt="bootstrap" style="min-width:210px;">
            <li class="nav-item active">
                <a class="nav-link nav" href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/why-ibinex') !!}">Why iBinex</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('pricing') !!}">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('services') !!}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/about-us') !!}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/security') !!}">Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Legal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/contact-us') !!}">Contact Us</a>
            </li>
            <button class="btn my-2 my-sm-0 semi-circle pink" style="min-width:210px" type="submit">Live Demo</button>
        </ul>


    </div>
@endsection
<!-- End menu here -->