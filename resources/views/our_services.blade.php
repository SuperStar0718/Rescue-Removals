@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
<div class="bg-warning-light">
        <div class="container-content py-5 ">
            <h3>Our Services - We love what we do & we do it well…</h3>            
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_home_removals') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Home Removals</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_storage') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Storage</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_furniture&appliance') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Furniture & Large Items Delivery</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_eBay_deliveries') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">eBay Deliveries</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_man&van') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Man & Van Services</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_european_moves') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">European Moves</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_motorbikes') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Motorbikes</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_waste_removals') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Waste Removals</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_storage') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Storage</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100 service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--------------- section 1 --------------->
    <div class="container-content pt-5" style="margin-bottom: -85px; background-color:#f5f5fa;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row book-now">
                    <div class="d-flex justify-content-start">
                        <div class="">
                            <h3  class="btn-text-primary-light">Ready to Move?</h3>
                            <p>
                                Fill in our simple form and let
                                us take care of the rest.
                            </p>
                        </div>
                    </div>
                    <div class="text-center mt-1">
                        <button type="button" class="btn bg-primary-light text-white px-5 py-3">
                            <h5 class="mb-0">Book Now</h5>
                        </button>
                    </div>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection