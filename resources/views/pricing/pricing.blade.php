@extends('layouts.app')

@section('title', 'Pricing')

@push('stylesheets')
    <link href="{{ asset("css/pricing.css") }}" rel="stylesheet" />
@endpush

@section('body-class', 'pricing')

@section('header-height', 'full-height')

@section('bg-img','pricing-bg.png')

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12 mx-auto">
        <h1 class="title text-center">Pricing</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection

@section('content')
    <section id="pricing-content" class="container-fluid">
        <section id="pricing-intro" class="text-center">
            <h2>Integration of the Ibinex turnkey cryptocurrency platform to exchange your way requires:</h2>
        </section>

        <section class="row">
            <article id="our-pricing" class="col-lg-6">
                <h5>Our Pricing</h5>
                <div class="text-blue font-weight-bold">
                    <p>$150,000 "reserve only, no payment" deposited in a local Escrow account of your choice for 180 days</p>
                    <p>Your first 90 days of Ibinex are gratis while you build your book.</p>
                </div>
            </article>

            <article id="our-fees" class="col-lg-6">
                <h5>Our Fees</h5>
                <div class="text-green font-weight-bold">
                    <p>0.1% flat-rate fee based on exchange volume with a minimum fee of $20,000 per month</p>
                    <p>Fees begin only at day 91.</p>
                </div>
            </article>
        </section>
        <hr>

        <section class="row">
            <article id="what-you-receive" class="col">
                <h5>What you receive</h5>
                <div class="row text-small">
                    <div class="col-lg-6">
                        <p>Tailored Front End content website ( +CMS ) with integrated web-based trading platform</p>
                        <p>Fully Compliant and Regulated Banking Custodian Services in Europe and North America</p>
                        <p>Full CRM / Back office Solution including KYC/AML, account and money management</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Processing Solutions for Credit Cards, Debit Cards, Wire Transfers, Alternative Payments, Hosted Wallets, Cold Wallets and various others for both FIAT and CryptoCurrencies</p>
                        <p>Aggregated Liquidity Exchange with "Top of Book" API bridge from over 60 exchanges for hundreds of CryptoCurrencies</p>
                    </div>
                </div>
            </article>
        </section>
        <hr>

        <section class="row">
            <article id="setup" class="col-lg-6">
                <h5>Setup</h5>
                <p>In order to proceed with setup, we require:</p>
                <div class="text-blue font-weight-bold">
                    <p>Your company to sign out Letter of Intent (LOI)</p>
                    <p>Proof of the Escrow deposit at a bank or with an attorney of your choice.</p>
                </div>
            </article>

            <article id="onboarding-time" class="col-lg-6">
                <h5>Onboarding time</h5>
                <p>Please note that, due to incredibly high demand of the Ibinex exchange solutions suite, the current onboarding waiting time is 4 months.</p>
                <p>We are doing our utmost to reduce time to market while retaining our trademark standard of excellence, and appreciate your interest in our innovations.</p>
            </article>
        </section>
    </section>

    <div class="footer-buffer"></div>
@endsection

@push('custom-scripts')
    <script src={{ asset("js/pricing.js") }}></script>
@endpush
