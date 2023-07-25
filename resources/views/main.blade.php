@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-5">
        <div class="container-content" >
            <div class="row pb-3">
                <div class="col-md-7">
                    <h1 style="color: #8B8B8B; font-size: 45px;">Save money on your move, so you can focus on settling in.</h1>  
                    <p class="py-2" style="color: #8B8B8B; font-size: 20px;">The UK’s choice for delivery, removals, and transportation services.</p>
                    <img src="{{asset('images/RescueRemovals-logo.svg')}}" alt="rescue-removals-logo" class="w-100 py-2">
                </div>                
                <div class="col-md-5" style="margin-top: -66px; ">
                    <div class="align-items-center text-center">
                        <img src="{{asset('images/courier.png')}}" alt="courier" class="w-60"> 
                    </div>
                    <div style="position:relative;">                    
                        <input type="text" id="moving-input" class="form-control form-control-lg" style="height: 60px" id="moving" placeholder="What are you moving?"> 
                        <div class="mt-2 py-4 px-5" id="dropdown-frame" style="position: absolute; width: 130%; right:0px; background-color: white; border-radius: 0.5rem; border: 1px solid #353ea3;  display:none;">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="homes" onclick = "set_value('Home Removals')">
                                        <img src="{{asset('images/Book/home.png')}}" alt="home-removals-logo" class="w-5">
                                        <h6 class="pl-3 mb-0">Home Removals</h6>
                                    </div>                                
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="man_van" onclick = "set_value('Man & Van')">
                                        <img src="{{asset('images/Book/man&van.png')}}" alt="home-removals-logo" class="w-5">
                                        <h6 class="pl-3 mb-0">Man & Van</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="office" onclick = "set_value('Office Removals')">
                                        <img src="{{asset('images/Book/office.png')}}" alt="home-removals-logo" class="w-5">
                                        <h6 class="pl-3 mb-0">Office Removals</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="motorbike" onclick = "set_value('Motorbikes')">
                                        <img src="{{asset('images/Book/motorbikes.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Motorbikes</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="furniture" onclick = "set_value('Furniture & Appliances')">
                                        <img src="{{asset('images/Book/furniture.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Furniture & Appliances</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="european" onclick = "set_value('European moves')">
                                        <img src="{{asset('images/Book/european.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">European moves</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="waste" onclick = "set_value('Waste Removals')">
                                        <img src="{{asset('images/Book/waste.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Waste Removals</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="storage" onclick = "set_value('Storage')">
                                        <img src="{{asset('images/Book/storage.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Storage</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="ebay" onclick = "set_value('eBay Deliveries')">
                                        <img src="{{asset('images/Book/eBay.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">eBay Deliveries</h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between  py-2">
                        <input type="text" class="form-control form-control-lg mr-2" style="height: 60px" id="pickUp" placeholder="Pick Up Location">
                        <input type="text" class="form-control form-control-lg" style="height: 60px" id="dropOff" placeholder="Drop Off Location">
                    </div>
                    <div class="d-flex justify-content-between">
                        <img src="{{asset('images/Trustpilot Logo.svg')}}" alt="courier" style="width: 120px;">
                        <a href="{{ url('/') }}" id="quote_url">
                            <button type="button" class="btn bg-primary-light text-white px-5 py-3" >
                                <h5 class="mb-0">Get Quote Now</h5>
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
    <div>
        <div class="d-flex justify-content-center text-center">
            <div class="border-bottom border-grey " style="width: 75%">
                <h3 class="py-4">Your Journey Begins With Us!</h3>
            </div>            
        </div>
        
        <div class="bg-primary-dark my-5">
            <div class="container-content">                
                <img src="{{asset('images/car.png')}}" class="w-100" alt="car">               
                              
            </div>
        </div>

        <div class="d-flex justify-content-center text-center">
            <div class="border-bottom border-grey " style="width: 75%">                
            </div>            
        </div>
    </div>    
    
    <!--------------- end section 2 --------------->

    <!--------------- section 3 --------------->
    <div class="bg-warning-light my-5">
        <div class="container-content py-5 ">
            <h3>Our Services - We love what we do & we do it well…</h3>            
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_home_removals') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Home Removals</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_storage') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Storage</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_furniture&appliance') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Furniture & Large Items Delivery</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_eBay_deliveries') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">eBay Deliveries</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_man&van') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Man & Van Services</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_european_moves') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">European Moves</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_motorbikes') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Motorbikes</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_waste_removals') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Waste Removals</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/service_storage') }}">
                        <div class="position-relative" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Storage</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="w-100" style="filter: brightness(0.6);">
                        </div>
                    </a>
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
                            <h3  class="btn-text-primary-light">Ready to Move?</h3>
                            <p>
                                Fill in our simple form and let
                                us take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text-center mt-1">
                        <button type="button" class="btn bg-primary-light text-white rounded-pill px-5 py-3">
                            <h5 class="mb-0">Book Now</h5>
                        </button>
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

@section('script')
    <script>
        $('#moving-input').focus(function() {
            $('#dropdown-frame').toggle()
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('#moving-input, #dropdown-frame').length) {
                $('#dropdown-frame').hide();
            }
        });

        function set_value(val) {
            $('#moving-input').val(val);
            $('#dropdown-frame').hide();
            let quote_url = "{{ url('/') }}";
            if(val === "Furniture & Appliances" || val === "Man & Van" || val === "eBay Deliveries")
            {
                quote_url = "{{ url('/furnitureappliance_manvan_eBaydeliveries/book1') }}";            
            }
            else if(val === "Office Removals")
            {
                quote_url = "{{ url('/officeremovals/book1') }}";
            }
            else if(val === "Home Removals")
            {
                quote_url = "{{ url('/homeremovals/book1') }}";
            }
            else if(val === "Motorbikes")
            {
                quote_url = "{{ url('/motorbikes/book1') }}";
            }
            else if(val === "Waste Removals" || val === "European moves" || val === "Storage")
            {
                quote_url = "{{ url('/wasteremovals_europeanmoves_storage/book1') }}";
            }
            else
            {
                quote_url = "{{ url('/') }}";
            }

            $('#quote_url').attr('href', quote_url);
            console.log(quote_url);

        }
    </script>   
@endsection
