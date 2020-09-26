@extends('layouts.frontendlayout')
@section('content')
<main>
    <div class="img-background small-jumbotron" style="background-image: url({{url('/')}}/front-end/uploads/banners/pricing_banner.jpg)">
        <div class="text-center small-jumbotron container mt-30">
            <h1 class="white">Experience the Pro Advantage</h1>
        </div>
    </div>

    <div class="medium-container mt-60 mb-50">
        <div class="text-center mb-50 service-lengths flex justify-center">
            <div class="inline-block  ml-20 mr-20 ml-sm-0 mr-sm-15 smol serivce-length " data-target=".month1">
                <span></span>
                <div class="length-name mt-10 mb-5">Monthly</div>

            </div>
            <div class="inline-block ml-20 mr-20 ml-sm-10 mr-sm-10 smol serivce-length" data-target=".month6">
                <span></span>
                <div class="length-name mt-10 mb-5">6 Month</div>
                <div class="discount-percent mt-5 mb-5">Discount up to 20%</div>
            </div>
            <div class="inline-block ml-20 mr-20 ml-sm-15 mr-sm-0 smol serivce-length active" data-target=".month12">
                <span></span>
                <div class="length-name mt-10 mb-5">Annual</div>
                <div class="discount-percent mt-5 mb-5">Discount up to 25%</div>
                <div class="orange-discout-text orange-background white inline-block p-5 pt-7">Most Popular</div>
            </div>
        </div>

        <div class="row">
            <div class="pricing-block  text-center col-lg-4 col-md-12 mb-md-30">
                <div class="light-grey-background service-type pt-25 pb-20 top-curved-border">
                    <h3>Affinos - State Pro</h3>

                </div>
                <div class="inner pb-40 bottom-curver-border">

                    <span class="price inline-block mt-40 mb-20 ">
                        <span class="month1  pricing-info-large">
                            <div class="flex">$99 <div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Monthly</div>
                        </span>
                        <span class="month6 pricing-info-large flex">
                            <div class="flex">$89<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Semi-Annually</div>
                        </span>
                        <span class="month12 show-price pricing-info-large flex">
                            <div class="flex">$59<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Annually</div>
                        </span>
                    </span>

                    <h5 class="orange mb-10">1 State of your Choice </h5>
                    <div class="mb-20">
                        <p class="smol">Basic Matching</p>
                        <p class="smol">Basic Bid Information</p>
                        <p class="smol">Standard Customer Success Package</p>
                    </div>
                    <a class="long-btn month1 " href="checkout.html?i=123&s=m">Get Affinos Pro</a>
                    <a class="long-btn month6" href="checkout.html?i=123&s=m">Get Affinos Pro</a>
                    <a class="long-btn month12 show-price" href="checkout.html?i=123&s=m">Get Affinos Pro</a>
                </div>
            </div>
            <div class="pricing-block  text-center col-lg-4 col-md-12 mb-md-30">
                <div class="light-grey-background service-type pt-25 pb-20 top-curved-border">
                    <h3>Affinos - Regional Pro</h3>

                </div>
                <div class="inner pb-40 bottom-curver-border">

                    <span class="price inline-block mt-40 mb-20 ">
                        <span class="month1  pricing-info-large">
                            <div class="flex">$119 <div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Monthly</div>
                        </span>
                        <span class="month6 pricing-info-large flex">
                            <div class="flex">$99<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Semi-Annually</div>
                        </span>
                        <span class="month12 show-price pricing-info-large flex">
                            <div class="flex">$69<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Annually</div>
                        </span>
                    </span>

                    <h5 class="orange mb-10">1 Multi-State region of your choice </h5>
                    <div class="mb-20">
                        <p class="smol">AI-Powered Relevance Engine</p>
                        <p class="smol">Advanced Bid Information</p>
                        <p class="smol">Standard Customer Success Package</p>
                    </div>
                    <a class="long-btn month1 " href="checkout.html?i=123&s=s">Get Affinos Pro</a>
                    <a class="long-btn month6" href="checkout.html?i=123&s=s">Get Affinos Pro</a>
                    <a class="long-btn month12 show-price" href="checkout.html?i=123&s=s">Get Affinos Pro</a>
                </div>
            </div>
            <div class="pricing-block  text-center col-lg-4 col-md-12 mb-md-30">
                <div class="light-grey-background service-type pt-25 pb-20 top-curved-border">
                    <h3>Affinos - National Pro</h3>
                </div>
                <div class="inner pb-40 bottom-curver-border">

                    <span class="price inline-block mt-40 mb-20 ">
                        <span class="month1  pricing-info-large">
                            <div class="flex">$249 <div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Monthly</div>
                        </span>
                        <span class="month6 pricing-info-large flex">
                            <div class="flex">$179<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Semi-Annually</div>
                        </span>
                        <span class="month12 show-price pricing-info-large flex">
                            <div class="flex">$119<div class="text-left"><sup>.00</sup><sub>/Month</sub></div>
                            </div>
                            <div class="smol mt-10">Billed Annually</div>
                        </span>
                    </span>

                    <h5 class="orange mb-10">Nationwide</h5>
                    <div class="mb-20">
                        <p class="smol">AI-Powered Relevance Engine</p>
                        <p class="smol">Advanced Bid Information</p>
                        <p class="smol">Premium Customer Success Package</p>
                    </div>
                     <a class="long-btn month1 " href="checkout.html?i=123&s=y">Get Affinos Pro</a>
                    <a class="long-btn month6" href="checkout.html?i=123&s=y">Get Affinos Pro</a>
                    <a class="long-btn month12 show-price" href="checkout.html?i=123&s=y">Get Affinos Pro</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container mb-100 mt-100 mt-sm-40 mb-sm-40">
        <div class="text-center">
            <h2 class=" h1 mt-20 mb-40">Not Sure What Government Bidding Plan Is Best For Your Business?</h2>
            <p class="large mb-40">Visit our compare plans page to see a side by side comparison of our Basic, State
                Pro, Regional Pro, and National Pro plans. </p> <a href=""
                class="big-orange-btn large-btn mb-md-20">Compare Plans</a>
        </div>
    </div>

    <div class="orange-background pt-90 pb-90 pb-lg-70 pt-lg-70" style="background-color: #145fa1">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="white h1 mt-20 mb-20">Save Time. Bid Smart. Win More.</h2>
            </div>
        </div>
    </div>
   </main>
   @endsection