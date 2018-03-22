@extends('layouts.app')

@section('title','Security')


@push('stylesheets')
    <link href='{{ asset('css/security.css') }}' rel='stylesheet' />
@endpush

@section('header-content')
    <section id='hero-content' class='col-xl-7 col-sm-12'>
        <h1 class='title text-center' id='security_title'>Security</h1>
        <p class='description text-center'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection

@section('body-class','security')
{{--@section('bg-img','security-banner-temp.png')--}}
@section('bg-img','security.PNG')

@section('content')

        <section class='first-section' id='protection'>
            <article class='container-fluid'>
                <div class='row security-width'>
                    <div class='col-md-6'>
                        <h1 class='subtitle black' id='subtitle_1'>Protection of Funds</h1>
                        <div id='para_1'>
                            <p>
                                The protection of your crypto-funds is of paramount importance to us. For this reason, we take the ultimate lengths to ensure your funds remain safe at all times.
                            </p>
                            <p>
                                As an indication of the high protective standards we hold, Ibinex has been granted the status of fully-licensed, fully compliant and as a regulated custodian and account processor.
                            </p>
                            <p>
                                We are the first cryptocurrency exchange platform to hold this mantle and offer exclusive payment solutions. As such, we must demonstrate a consistent level of regulatory compliance
                                in order to retain professional distinction; a title of which we are immensely proud.
                            </p>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <h1 class='subtitle black' id='subtitle_2'>Encryption and Technologies</h1>
                        <div id='para_2'>
                            <p>
                                A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no encryption technology stone unturned,
                                and has implemented the highest level of SSL security into the platform, complete with the most solid and secure technology.
                            </p>
                            <p>
                                We ensure that no weak links exist to threaten the stability and core security of Ibinex for our customers. Threats are neutralised before they present themselves &ndash;
                                we take no chances, and anticipate potential breaches before they arise, entirely removing their potential before they ever eventuate.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class='second-section' id='technology'>
            <article class='container-fluid position-relative'>
                <div class='row security-width'>
                    <div class='col-md-5' id='infor-security'>
                        <h1 class='subtitle black'>Information Security</h1>
                        <p>
                           Our platform is a 24/7 guarded operation, with all crypto-based funds help in cold-wallets, shielded by our team of cyber security experts who work around the clock to ensure all funds are safe and untouchable by unauthorised seekers.
                        </p>
                        <h1 class='subtitle black' id="privacy">Privacy</h1>
                        <p>
                            Security and confidentiality are of the utmost importance for our clients, and you can learn more about our completely transparent Regulation and Privacy Policy,
                            to have complete peace of mind and confidence in Ibinex.
                        </p>
                    </div>
                </div>
                <div class='security-section'>&nbsp;</div>
            </article>
        </section>

@endsection

@push('custom-scripts')
    <script src={{ asset('js/security.js') }}></script>
@endpush