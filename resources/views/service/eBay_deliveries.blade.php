@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-primary-dark py-5">
        <div class="container-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/car.png')}}" class="w-100" alt="person">
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center">
                        <h3 class="text-white">eBay Deliveries</h3>                        
                        <div class="text-center">
                            <a href="{{ url('/') }}">
                                <button type="button" class="btn bg-white btn-text-primary-dark rounded-pill px-5 py-3">
                                    <h5 class="mb-0">Book Now</h5>  
                                </button>
                            </a> 
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <h4 class="container-content font-weight-bolder my-4">eBay Deliveries</h4>
    <div class="bg-warning-light">
        <div class="container-content py-5">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-1.png')}}" class="w-100">
                </div>
                <div class="col-md-7">
                    <div class="mt-4 mt-md-0" style="margin-bottom: 72px;">
                        <p>
                            Rescue Removals offers reliable and cost-effective courier services tailored for valuable eBay deliveries and collections. 
                            We understand the significance of these transportation operations, which often involve a cherished item for one person and a 
                            potential sale for another. To provide peace of mind, we include free basic insurance (subject to our Terms & Conditions). 
                            Our goal is to simplify and reduce costs associated with delivering small items to nearby towns or collecting bulky items from distant cities. 
                            With a widespread network of vans and industry professionals covering the entire UK, 
                            we can promptly arrange transport to any address, at any time. By leveraging our partners’ existing routes near your location, 
                            we can offer substantial savings compared to standard rates. 
                            We ensure our transport partners are well-equipped to handle any delivery requirement, whether it’s a fragile ornament or a large pool table. 
                            Contact us now and experience the same exceptional service that our satisfied customers have enjoyed.
                        </p>
                    </div>
                    <div>
                        <img src="{{asset('images/eBay Deliveries/ebay-deliveries-2.png')}}" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->

    <!--------------- section 3 --------------->
    <div>
        <div class="container-content py-5">
            <h5>Get quality eBay courier services for less</h5>
            <p class="mb-2">
                When it comes to assessing eBay courier quotes, the reputation of the delivery company holds significant importance. 
                With Rescue Removals, making the right choice becomes effortless. Simply reach out to us for an instant price quote, and we’ll handle the rest.
            </p>
            <p class="mb-2">
                We offer complimentary basic compensation cover, providing protection against fire and theft for up to £50k (subject to our Terms and Conditions). 
                No matter the nature of your items or their destination, we will match you with the perfect courier. 
                Our extensive fleet of transport partners allows us to select a courier operating on a nearby route, 
                ensuring sufficient space for your goods and equipping them with the necessary resources for your specific requirements. 
                These combined factors contribute to a premium service at highly competitive prices.
            </p>
            
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-3.png')}}" class="w-100">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-4.png')}}" class="w-100">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-5.png')}}" class="w-100">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-6.png')}}" class="w-100">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-7.png')}}" class="w-100">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{asset('images/eBay Deliveries/ebay-deliveries-8.png')}}" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 3 --------------->

    <!--------------- section 4 --------------->
    <div class="container-content mt-5" style="margin-bottom: -85px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h3  class="btn-text-primary-light">Need Parcels Collected & Delivered?</h3>
                            <p>
                                Fill in our simple form and let
                                us take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text-center mt-1">
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn bg-primary-light text-white rounded-pill px-5 py-3">
                                <h5 class="mb-0">Book Now</h5>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 4 --------------->


@endsection
   
@section('footer')
    @include('components.footer')    
@endsection