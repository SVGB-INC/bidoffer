@extends('layouts.master')

@push('styles')
    <!-- //Home css  -->
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}" />
@endpush
@section('content')
    <div class="container">
        <h1 class="w-50">Bringing an innovative way to sell & buy real estate through transparent bidding</h1>
    </div>
    <!-- Inner Curved Div -->
    <div class="curved"></div>
    <div class="contentDetails">
        <div class="container">


            <div class="selectionRoom row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="mb-3">
                        <select id="disabledSelect" class="form-select">
                            <option>City, County, ZIP, Address...</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="mb-3">
                        <select id="disabledSelect" class="form-select">
                            <option>Bedrooms</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="mb-3">
                        <select id="disabledSelect" class="form-select">
                            <option>Bathrooms</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="mb-3">
                        <select id="disabledSelect" class="form-select">
                            <option>Property Types</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="pt-3">
                <button class="btn startButton w-50 m-auto">Start</button>
            </div>


            <!-- //Map Detials  -->
            <div class="homeMap text-center">
                <h2 class="mt-5 p-0 mb-4">Serving All of Florida!</h2>
                <img class="img-fluid" src="{{ asset('assets/pictures/home/servingFlorida.jpg') }}" alt="map" />
            </div>
            <!-- //Offer Detials  -->
            <div class="homeOffer">
                <h2 class="text-center mt-5 p-0 mb-4">What do we offer?</h2>
                <div class="content container">
                    <p><b>Bid Your Offer</b> provides a brand-new approach to <b>real estate bidding</b>. It allows Sellers
                        and Buyers to enjoy full transparency when it comes to purchasing <b>real estate properties</b>.
                        Instead of blindly bidding on a property, Buyers/Buyer’s agents can easily see what others are
                        proposing. As a result, they can bid accordingly and can acquire their desired property.</p>
                    <p>Sellers/Seller’s agents will set up an auction according to their Terms and Conditions. Sellers can
                        define the terms for their listing and Buyers can bid on their property of choice by providing their
                        offering price and terms.</p>
                    <p>Both parties can include their terms on this platform before having to solidify a contract. This
                        process keeps everything simple and transparent for all parties. Once the Seller accepts the winning
                        bid, then the Seller/Seller’s agent will provide the Buyers/Buyer’s Agent agent with the contract
                        and necessary addendums.</p>
                    <p>By utilizing this transparent <b>real estate bidding platform</b>, we aim to create a solid
                        foundation for Trust and Honesty for all parties, as these traits are fundamentally the most
                        important aspects to all parties in a real estate transaction.</p>
                    <ul class="text-left p-0">
                        <li><i class="fa fa-check"></i> Building Trust For All Parties</li>
                        <li><i class="fa fa-check"></i> Transparent Bidding</li>
                        <li><i class="fa fa-check"></i> Optional Buyer's Premium (Buyer Credits Seller)</li>
                        <li><i class="fa fa-check"></i> Optional Seller's Premium (Seller Credits Buyer)</li>
                    </ul>
                    <!-- Video Baner -->
                    <video class="w-100" src="{{ asset('assets/pictures/home/offerVideo.mp4') }}" controls
                        controlslist="nodownload" poster="{{ asset('assets/pictures/home/offerPoster.jpg') }}"></video>
                </div>
            </div>
            <!-- //End  -->



            <!-- Transparent Binding -->
            <div class="transParentBinding">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center"><img class="w-100"
                            src="{{ asset('assets/pictures/home/transparentBidding.jpg') }}" alt="transparentBidding" />
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 transDetails">
                        <h2>Transparent Bidding</h2>
                        <p class="text-center">Buying and Selling Real Estate</p>
                        <div class="footer">
                            <a href="addListing.html">
                                <button class="btn">Add Auction</button>
                            </a>
                            <a href="listingDescription.html">
                                <button class="btn">Start Search</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h2 class="p-0">Connecting Sellers, Buyers, & Agents</h2>
                        <p class="text-center">Transparent Real Estate Bidding made possible through Bid Your Offer &
                            Innovate Real Estate</p>
                        <div class="footer">
                            <img class="w-100" src="{{ asset('assets/pictures/home/connectingSeller.jpg') }}"
                                alt="connectingSeller" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->

        </div>
        <!-- Home Signup  -->
        <div class="homeSignup">
            <div class="container d-flex justify-content-between">
                <h2 class="text-light">Create your free account today!</h2>
                <button class="btn"><a href="signup.html">Signup Now <i class="fa fa-arrow-right"></i></a></button>
            </div>
        </div>
        <!-- End  -->
    @endsection
