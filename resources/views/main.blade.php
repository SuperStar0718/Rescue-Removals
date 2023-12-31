@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-5 display-none-sm" style="padding-top: 3rem !important;">
        <div class="container-content" >
            <div class="row pb-3">
                <div class="col-md-7" style="padding-left: 0;">
                    <h1 style="color: #000000; font-size: 45px;font-weight: bold;line-height: 45px;">Save money on your move, so <br>you can focus on settling in.</h1>  
                    <p class="py-2" style="color: #8B8B8B; font-size: 20px;">The UK’s choice for delivery, removals, and transportation services.</p>
                    <img src="{{asset('images/RescueRemovals-logo.svg')}}" alt="rescue-removals-logo" class="w-100 py-2">
                </div>                
                <div class="col-md-5 options" style="margin-top: -66px; ">
                    <div class="align-items-center text-center">
                        <img src="{{asset('images/courier.png')}}" alt="courier" class="w-60"> 
                    </div>
                    <div style="position:relative;" class = "categories">                    
                        <input type="text" id="moving-input" class="form-control form-control-lg" style="height: 60px" id="moving" placeholder="What are you moving?"> 
                        <div class="mt-2 py-4 px-5" id="dropdown-frame" style="    padding-top: 2rem !important;    padding-left: 1rem !important;position: absolute; width:650px; right:0px; background-color: white; border-radius: 0.5rem; border: 4px solid #353ea3;  display:none; z-index: 1;">
                        <i class=""></i>
                            <div class="row">
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="homes" onclick = "set_value('Home Removals')">
                                        <img src="{{asset('images/Book/home removals icon (1).png')}}" alt="home-removals-logo" class="w-5 home_removals">
                                        <h6 class="pl-3 mb-0">Home Removals</h6>
                                    </div>                                
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="man_van" onclick = "set_value('Man & Van')">
                                        <img src="{{asset('images/Book/man & van icon (1).png')}}" alt="home-removals-logo" class="w-5">
                                        <h6 class="pl-3 mb-0">Man & Van</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="office" onclick = "set_value('Office Removals')">
                                        <img src="{{asset('images/Book/office icon (1).png')}}" alt="home-removals-logo" class="w-5">
                                        <h6 class="pl-3 mb-0">Office Removals</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="motorbike" onclick = "set_value('Motorbikes')">
                                        <img src="{{asset('images/Book/motorbike icon (1).png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Motorbikes</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="furniture" onclick = "set_value('Furniture & Appliances')">
                                        <img src="{{asset('images/Book/sofa icon (1).png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">Furniture & Appliances</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="european" onclick = "set_value('European Moves')">
                                        <img src="{{asset('images/Book/european union icon.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">European Moves</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="waste" onclick = "set_value('Waste Removals')">
                                        <img src="{{asset('images/Book/waste icon-ai (1).png')}}" alt="home-removals-logo" class="w-5 waste_removals ">
                                        <h6 class="pl-3 mb-0" style="padding-left: 18px !important;">Waste Removals</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="storage" onclick = "set_value('Storage')">
                                        <img src="{{asset('images/Book/storage icon (1).png')}}" alt="home-removals-logo" class="w-5 storage ">
                                        <h6 class="pl-3 mb-0" style="padding-left: 13px !important;">Storage</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="ebay" onclick = "set_value('eBay Deliveries')">
                                        <img src="{{asset('images/Book/ebay icon (1).png')}}" alt="home-removals-logo" class="w-5 ebay ">
                                        <h6 class="pl-3 mb-0" style="padding-left: 18px !important;">eBay Deliveries</h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between row location_input  py-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg mr-2 target placeholder01" style="height: 60px" id="pac-input" placeholder="Pick Up Location">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg target placeholder02 dropOff" style="height: 60px" id="dropOff" placeholder="Drop Off Location">
                        </div>

                    </div>
                    <div class="d-flex justify-content-between location_input row">
                        <div class="col-md-6">
                            <img src="{{asset('images/Trustpilot Logo-1.svg')}}" alt="courier" style="width: 120px;">
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn bg-primary-light text-white px-5 py-3 quote_btn" style="font-size: 20px;" id="quote_btn" >
                                Get Quote Now
                            </button>
                        </div>
                    </div>
                    <div class = "warning">
                        Already received a quote?
                    </div>
                </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div style="" class="display-none-sm">
        <div class="d-flex justify-content-center text-center">
            <div class=" border-grey " style="width: 75%">
                <h3 class="py-4" style="font-weight: bold; font-size: 30px;padding-top: 2.5rem !important;">Your Journey Begins With Us!</h3>
            </div>            
        </div>
        
        <div class=" my-5" style="margin-bottom: 6rem !important;">
            <div class="container-content">                
                <img src="{{asset('images/iPhone Rescue Removals.png')}}" class="w-100" alt="car">               
                              
            </div>
        </div>

        <div class="d-flex justify-content-center text-center">
            <div class="border-bottom border-grey " style="width: 75%">                
            </div>            
        </div>
    </div>    
    
    <!--------------- end section 2 --------------->

<div class="bg-primary-light display-none-sm">
    <div class="section_content container-content main_body ">
        <div class="left_image">
            <img src="{{asset('images/people website.png')}}" >               
        </div>
        <div class="right_content" style="padding-top: 100px;">
            <div class="pb-5" style="    padding-bottom: 3rem !important;">
                Welcome to Rescue Removals, your trusted Removal Company based in the heart of London and covering all surrounding areas! We take pride in providing top-notch moving services, ensuring a smooth and stress-free relocation experience for our valued customers. Whether you’re moving your home or office, locally or nationally, our dedicated team is here to rescue you from the complexities of the moving process.
            </div>
            <div>
                With years of experience in the industry, Rescue Removals understands the importance of handling your belongings with care and precision. We treat each move as unique, tailoring our services to meet your specific needs and requirements. Our goal is to take the burden off your shoulders, allowing you to focus on the excitement of your new journey.
            </div>
        </div>
    </div>
</div>

    <!--------------- section 3 --------------->
    <div class="display-none-sm mt-5">
        <div class="container-content reviews">
            <div class="left item">
                <img src="{{asset('images/left.png')}}" class="avatar" alt="">
                <div class="star" >
                    <div><img src="{{asset('images/CompositeLayer.png')}}" class="w-100"  alt=""></div>
                        <div class="text title">Excellent Service</div>
                        <div class="text content">Amazing team did a fantastic job cant recommend enough</div>
                </div>
            </div>
            <div class="center item">
                <img src="{{asset('images/center.png')}}" class="avatar" alt="">
                <div class="star" >
                    <div><img src="{{asset('images/CompositeLayer.png')}}" class="w-100"  alt=""></div>
                        <div class="text title">Good Job</div>
                        <div class="text content">Did what they said, I have no complaints. I am a happy customer.</div>
                </div>

            </div>
            <div class="right item">
                <img src="{{asset('images/right.png')}}" class="avatar" alt="">
                <div class="star" >
                    <div><img src="{{asset('images/CompositeLayer.png')}}" class="w-100"  alt=""></div>
                        <div class="text title">WOW</div>
                        <div class="text content">Got me moved to my new house hassle free.</div>
                </div>
            </div>
        </div>
        <div class="container-content text-context">
            <div class="">
                At Rescue Removals, customer satisfaction is at the core of everything we do. Our team of highly-trained professionals is committed to providing exceptional service from start to finish, ensuring that all your possessions are transported safely and securely to their new destination.
            </div>
            <div class="">  
                Our strategic location in London enables us to serve the city and its surroundings promptly and efficiently. We know that time is of the essence, especially in the bustling city, and our fleet of specialised vehicles is equipped to handle any move with ease and precision.
            </div>
            <div>
                As a fully licensed and insured company, you can trust Rescue Removals to handle your move with transparency, integrity, and professionalism. We believe in building lasting relationships with our clients, and our dedication to quality has earned us a reputation as one of London’s leading removal companies.
            </div>
            <div>
                Experience the difference with Rescue Removals and let us guide you through a seamless and enjoyable moving experience. Contact us today for a no-obligation quote, and let our friendly team rescue you from the stresses of moving. 
            </div>
        </div>

        <div class="container-content service_category py-5">
                <div class="">
                    <a href="{{ url('/service_home_removals') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Home Removals</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_office_removals') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Office Removals</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class=" service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_furniture&appliance') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Furniture & Appliances</h4>
                            <img src="{{asset('images/Main/Image 2.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_eBay_deliveries') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">eBay Deliveries</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_man&van') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Man & Van Services</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_european_moves') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white" style="text-transform: capitalize;">European Moves</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_motorbikes') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Motorbikes</h4>
                            <img src="{{asset('images/Main/Image 4.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_waste_removals') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white">Waste Removals</h4>
                            <img src="{{asset('images/Main/Image 3.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
                <div class=" ">
                    <a href="{{ url('/service_storage') }}">
                        <div class="position-relative service_card" style="text-align: center">
                            <h4 class="position-absolute center-character text-white" style="padding-left: 13px !important;">Storage</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
        </div>
        <div class="container-content full-size">
            <img src="{{asset('images/imgpsh_fullsize_anim (1).png')}}" alt="">
        </div>
    </div>
    <!--------------- end section 3 --------------->

    <!--------------- section 4 --------------->
    <div class="display-none-sm container-content book_now_btn" style="margin-bottom: -100px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row book-now">
                    <div class="d-flex justify-content-start">
                        <div  class="bottom-book-now">
                            <h3  class="btn-text-primary-light">Ready to Move?</h3>
                            <p>
                                Fill in our simple form and let
                                us take care of the rest.
                            </p>
                        </div>
                    </div>
                    <div class="text-center mt-1">
                        <button type="button" class="btn bg-primary-light text-white rounded-pill px-5 py-4">
                            <h5 class="mb-0">Book Now</h5>
                        </button>
                    </div>
            </div>
        </div>
    </div>
      <div id="map"></div>

    <!--------------- end section 4 --------------->



    <div class="display-sm">
        <div class="dashboard main_content">
            {{-- <div class="logo">
                <img src="{{asset('images/logo.svg')}}" alt="">
            </div>
            <div class="logo-text">
                Your Journey Begins With Us!
            </div> --}}
            <div class="banner">
                <img src="{{asset('images/courier.png')}}" alt="">
            </div>
            <div  class = "categories">                    
                <input type="text" id="moving-input-mobile" class="form-control form-control-lg"  id="moving" placeholder="What are you moving?"> 
                <div class=" py-4 " id="dropdown-frame-mobile" >
                <i class=""></i>
                    <div class="row">
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="homes" onclick = "set_value('Home Removals')">
                                <img src="{{asset('images/Book/home removals icon (1).png')}}" alt="home-removals-logo" class="w-5 home_removals">
                                <h6 class="pl-3 mb-0">Home Removals</h6>
                            </div>                                
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="man_van" onclick = "set_value('Man & Van')">
                                <img src="{{asset('images/Book/man & van icon (1).png')}}" alt="home-removals-logo" class="w-5">
                                <h6 class="pl-3 mb-0">Man & Van</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="office" onclick = "set_value('Office Removals')">
                                <img src="{{asset('images/Book/office icon (1).png')}}" alt="home-removals-logo" class="w-5">
                                <h6 class="pl-3 mb-0">Office Removals</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="motorbike" onclick = "set_value('Motorbikes')">
                                <img src="{{asset('images/Book/motorbike icon (1).png')}}" alt="home-removals-logo" class="w-5  ">
                                <h6 class="pl-3 mb-0">Motorbikes</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="furniture" onclick = "set_value('Furniture & Appliances')">
                                <img src="{{asset('images/Book/sofa icon (1).png')}}" alt="home-removals-logo" class="w-5  ">
                                <h6 class="pl-3 mb-0">Furniture & Appliances</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="european" onclick = "set_value('European Moves')">
                                <img src="{{asset('images/Book/european union icon.png')}}" alt="home-removals-logo" class="w-5  ">
                                <h6 class="pl-3 mb-0">European Moves</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="waste" onclick = "set_value('Waste Removals')">
                                <img src="{{asset('images/Book/waste icon-ai (1).png')}}" alt="home-removals-logo" class="w-5 waste_removals ">
                                <h6 class="pl-3 mb-0" style="padding-left: 17px !important;">Waste Removals</h6>
                            </div> 
                        </div>
                        <div class="col-md-6 mb-2 category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="storage" onclick = "set_value('Storage')">
                                <img src="{{asset('images/Book/storage icon (1).png')}}" alt="home-removals-logo" class="w-5 storage ">
                                <h6 class="pl-3 mb-0" style="padding-left: 17px !important;">Storage</h6>
                            </div> 
                        </div>
                        <div class="col-md-6  category">
                            <div class="d-flex justify-content-start align-items-center text-center pointer" id="ebay" onclick = "set_value('eBay Deliveries')">
                                <img src="{{asset('images/Book/ebay icon (1).png')}}" alt="home-removals-logo" class="w-5 ebay ">
                                <h6 class="pl-3 mb-0" style="padding-left: 18px !important;">eBay Deliveries</h6>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between row location_input">
                <div class="">
                    <input type="text" class="form-control form-control-lg mr-2 target placeholder01" id="pac-input-mobile" placeholder="Pick Up Location">
                </div>
                <div class="">
                    <input type="text" class="form-control form-control-lg target placeholder02 dropOff" id="dropOff-mobile" placeholder="Drop Off Location">
                </div>

            </div>
            <div class = "warning">
                Already received a quote?
            </div>
            <div class="get-quote">
                <button type="button" class="btn quote_btn  " id="quote_btn" >
                    GET PRICE NOW
                </button>
            </div>
            <div class="courier">
                <img src="{{asset('images/Trustpilot Logo.svg')}}" alt="courier">
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')    
@endsection

@section('script')



      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdwK0YxzP31-BE703RBfLYC8WESqH9FUU&callback=initMap&libraries=places&v=weekly"
        defer
      ></script>
      {{-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps/api/place/js/AutocompletionService.GetPredictionsJson?1sE2%20&amp;2u3&amp;4sen&amp;6m6&amp;1m2&amp;1d49.686402&amp;2d-7.678393&amp;2m2&amp;1d59.241507&amp;2d1.73144&amp;9sgeocode&amp;15e3&amp;21m1&amp;2e1&amp;callback=initMap&amp;key=AIzaSyDDkvdRgP5NAgi1sMPuITttk1752-fkyfw&amp;channel=40&amp;token=126173"></script> --}}
      {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdwK0YxzP31-BE703RBfLYC8WESqH9FUU&callback=initMap&libraries=places&v=weekly"
        defer
      ></script> --}}
      
      {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5iAjd-YzWe_wWv2pK9-SR9i-IvGF7Gr0&callback=initMap&libraries=places&v=weekly"
        defer
      ></script> --}}
    <script>
    function initMap() {




// Replace with your API key and desired postcode
const apiKey = 'AIzaSyCdwK0YxzP31-BE703RBfLYC8WESqH9FUU';
const postcode = "LU5 4UH";

// Perform a geocoding request using Google Geocoding API
// Perform a geocoding request using Google Geocoding API
// Perform a geocoding request using Google Geocoding API
const geocoder = new google.maps.Geocoder();
geocoder.geocode(
  {
    address: postcode,
    componentRestrictions: { country: 'UK' }, // Adjust the country as needed
  },
  (results, status) => {
    if (status === google.maps.GeocoderStatus.OK) {
      const flatNumbers = [];

      results.forEach((result) => {
        const addressComponents = result.address_components || [];

        // Find and collect flat number components
        const flatNumber = addressComponents.find(
          (component) => component.types.includes('subpremise')
        );

        if (flatNumber) {
          flatNumbers.push(flatNumber.long_name);
        }
      });

      // Display the collected flat numbers
      if (flatNumbers.length > 0) {
        console.log('Available Flat Numbers:', flatNumbers.join(', '));
      } else {
        console.log('No flat numbers found in the given postcode.');
      }
    }
  }
);















        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 40.749933, lng: -73.98633 },
            zoom: 13,
            mapTypeControl: false,
        });





       
        const card = document.getElementById("pac-card");
        const from = document.getElementById("pac-input");
        const from_mobile = document.getElementById("pac-input-mobile");
        const to = document.getElementById("dropOff");
        const to_mobile = document.getElementById("dropOff-mobile");
        const biasInputElement = document.getElementById("use-location-bias");
        const strictBoundsInputElement = document.getElementById("use-strict-bounds");
        const options = {
            fields: ["address_components", "geometry", "name", "formatted_address"],
            strictBounds: true,
            componentRestrictions: { country: 'UK' }, // Limit results to the United Kingdom
              types: ['geocode'],
        };

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

        const autocomplete = new google.maps.places.Autocomplete(from, options);
        const autocomplete_from_mobile = new google.maps.places.Autocomplete(from_mobile, options);
        const autocomplete_to_mobile = new google.maps.places.Autocomplete(to_mobile, options);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        const autocomplete1 = new google.maps.places.Autocomplete(to, options);
        // Listen for the place_changed event
        autocomplete.addListener('place_changed', function() {
            const place = autocomplete.getPlace();
            if (place && place.address_components) {
                console.log('Selected Address:', place);
                const data = {
                    'address_components':place.address_components,
                    'formatted_address':place.formatted_address,
                    'lat':place.geometry.location.lat(),
                    'lng':place.geometry.location.lng(),
                }
                localStorage.setItem('from', JSON.stringify(data));
            } else {
            console.log('No address selected or not found.');
            }
        });
        autocomplete1.addListener('place_changed', function() {
            const place = autocomplete1.getPlace();
            if (place && place.address_components) {
                console.log('Selected Address:', place);
                const data = {
                    'address_components':place.address_components,
                    'formatted_address':place.formatted_address,
                    'lat':place.geometry.location.lat(),
                    'lng':place.geometry.location.lng(),
                }
                localStorage.setItem('to', JSON.stringify(data));
            } else {
            console.log('No address selected or not found.');
            }
        });
        autocomplete_from_mobile.addListener('place_changed', function() {
            const place = autocomplete_from_mobile.getPlace();
            if (place && place.address_components) {
                console.log('Selected Address:', place);
                const data = {
                    'address_components':place.address_components,
                    'formatted_address':place.formatted_address,
                    'lat':place.geometry.location.lat(),
                    'lng':place.geometry.location.lng(),
                }
                localStorage.setItem('from', JSON.stringify(data));
            } else {
            console.log('No address selected or not found.');
            }
        });
        autocomplete_to_mobile.addListener('place_changed', function() {
            const place = autocomplete_to_mobile.getPlace();
            if (place && place.address_components) {
                console.log('Selected Address:', place);
                const data = {
                    'address_components':place.address_components,
                    'formatted_address':place.formatted_address,
                    'lat':place.geometry.location.lat(),
                    'lng':place.geometry.location.lng(),
                }
                localStorage.setItem('to', JSON.stringify(data));
            } else {
            console.log('No address selected or not found.');
            }
        });
    }

        $(document).ready(function(){
            // Create a new Date object to get the current date and time
            const today = new Date();

            // Get the day of the week as a number (0: Sunday, 1: Monday, ..., 6: Saturday)
            const dayOfWeekNumber = today.getDay();

            var text = $('.weekday').children('div').eq(dayOfWeekNumber-1).css('color','yellow ')
            console.log(text)

        })


        $('#moving-input').click(function() {
            $('#dropdown-frame').toggle()
        });
        $('#moving-input-mobile').click(function() {
            $('#dropdown-frame-mobile').toggle()
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('#moving-input, #dropdown-frame').length) {
                $('#dropdown-frame').hide();
            }
            if (!$(event.target).closest('#moving-input-mobile, #dropdown-frame-mobile').length) {
                $('#dropdown-frame-mobile').hide();
            }
        });

        $('.quote_btn').click(function(){
            var category = $('#moving-input').val()
            var category_mobile = $('#moving-input-mobile').val()
            category = category_mobile ? category_mobile : category;
            var from  =  $('#pac-input').val()
            var to = $('#dropOff').val()
            var from_mobile  =  $('#pac-input-mobile').val()
            var to_mobile = $('#dropOff-mobile').val()
            from = from_mobile ? from_mobile : from;
            to = to_mobile ? to_mobile : to;
            if(category!='')
                if(from !== '' && to !==''){
                    // Retrieve the JSON string from localStorage and parse it back to an object
                    var from = localStorage.getItem('from');
                    from = JSON.parse(from);
                    var to = localStorage.getItem('to');
                    to = JSON.parse(to);
                    console.log("category",category)
                    switch (category) {
                        case "eBay Deliveries":
                            var url = "{{route('eBay')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        case "Furniture & Appliances":
                            var url = "{{route('Furniture_Appliance')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        case "Man & Van":
                            var url = "{{route('ManVan')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        case "Office Removals":
                            var url = "{{route('OfficeRemovals.hours_need')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        case "Home Removals":
                            var url = "{{route('HomeRemovals.house_type')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        case "Motorbikes":
                            var url = "{{route('Motorbike.hours_need')}}"
                            window.location.assign(url)
                            // update_from_to(url, from, to)
                            break;
                        default:
                            break;
                    }
                    console.log(from)
                    console.log(to)

                }
                switch (category) {
                        case "Waste Removals":
                            var url = "{{route('WasteRemovals')}}"
                            window.location.assign(url)
                            break;
                        case "European Moves":
                            var url = "{{route('European_moves')}}"
                            window.location.assign(url)
                            break;
                        case "Storage":
                            var url = "{{route('Storage')}}"
                            window.location.assign(url)
                            break;
                        default:
                            break;
                    }
        })

        function update_from_to(url, from, to){
            var csrfToken = "{{ csrf_token() }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    from: from,
                    to: to
                },
                success: function(response) {
                    // Handle the successful response
                    console.log(response);
                    
                    window.location.assign(response)

                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log(error);
                }
            });
        }

        function set_value(val) {
            $('#moving-input').val(val);
            $('#moving-input-mobile').val(val);
            $('#dropdown-frame').hide();
            $('#dropdown-frame-mobile').hide();
            $(".options .warning").show();
            let quote_url = "{{ url('/') }}";
            if(val === "eBay Deliveries")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{route('eBay')}}";            
            }
            else if(val === "Furniture & Appliances")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{route('Furniture_Appliance')}}";            
            }
            else if(val === "Man & Van")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{route('ManVan')}}";            
            }
            else if(val === "Office Removals")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{ route('OfficeRemovals.hours_need') }}";
            }
            else if(val === "Home Removals")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{ route('HomeRemovals.house_type') }}";
            }
            else if(val === "Motorbikes")
            {
                $('.dropOff').prop('disabled', false);
                quote_url = "{{ route('Motorbike.hours_need') }}";
            }
            else if(val === "Waste Removals")
            {
                $('.dropOff').prop('disabled', true);
                quote_url = "{{ route('WasteRemovals') }}";
            }
            else if(val === "European Moves")
            {
                $('.dropOff').prop('disabled', true);
                quote_url = "{{ route('European_moves') }}";
            }
            else if(val === "Storage")
            {
                $('.dropOff').prop('disabled', true);
                quote_url = "{{ route('Storage') }}";
            }
            else
            {
                quote_url = "{{ url('/') }}";
            }

            $('#quote_url').attr('href', quote_url);
            console.log(quote_url);

        }
        
    </script>   
      <style>

        .ui-effects-wrapper input{
    
                  background: #faed6d;
    
        }   
        
      
    
    </style>
        
        <script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"> </script>
        
        
        <script type = "text/javascript" language = "javascript">
        $('.quote_btn').click(function(){
            
            // Get the Login Name value and trim it
            var name = $('#pac-input').val();
            var name1 = $('#dropOff').val();
            var moving_input = $('#moving-input').val();
            var name_mobile = $('#pac-input-mobile').val();
            var name1_mobile = $('#dropOff-mobile').val();
            var moving_input_mobile = $('#moving-input-mobile').val();
            name = name_mobile ? name_mobile : name;
            name1 = name1_mobile ? name1_mobile : name1;
            moving_input = moving_input_mobile ? moving_input_mobile : moving_input;
            // Check if empty of not
            if (name.length < 1) {
                $(".target").effect( "shake", {times:5}, 500 );
                $('.target').css('background-color' , '#FFFCD9');
                return false;
            }
        // Check if empty of not
        if (name1.length < 1 && moving_input!='Storage'  && moving_input!='Waste Removals'  && moving_input!='European Moves' ) {
            $(".target").effect( "shake", {times:5}, 500 );
              $('.target').css('background-color' , '#FFFCD9');
            return false;
        }else {
            $('.target').css('background-color' , '#ffffff');
        }
        
    
    });
        $('#quote_btn-mobile').click(function(){
            
            // Get the Login Name value and trim it
            var name = $('#pac-input-mobile').val();
            
            var name1 = $('#dropOff').val();
            var moving_input = $('#moving-input-mobile').val();
            // Check if empty of not
            if (name.length < 1) {
                $(".target").effect( "shake", {times:5}, 500 );
                $('.target').css('background-color' , '#FFFCD9');
                return false;
            }
        // Check if empty of not
        if (name1.length < 1 && moving_input!='Storage'  && moving_input!='Waste Removals'  && moving_input!='European Moves' ) {
            $(".target").effect( "shake", {times:5}, 500 );
              $('.target').css('background-color' , '#FFFCD9');
            return false;
        }else {
            $('.target').css('background-color' , '#ffffff');
        }
        
    
    });
    
    
    $(function(){
      $('.placeholder01').mouseover(function(){
        //gets the current placeholder
        this.holder=$(this).attr('placeholder');
        $(this).attr('placeholder', 'Postcode or Town');
        $('.placeholder01').css('background-color' , '#FFFCD9');
      });
      $('.placeholder01').mouseout(function(){
        $(this).attr('placeholder', this.holder); //sets it back to the initial value
         $('.target').css('background-color' , '#ffffff');
      });
    })
    
    $(function(){
      $('.placeholder02').mouseover(function(){
        //gets the current placeholder
        this.holder=$(this).attr('placeholder');
        $(this).attr('placeholder', 'Postcode or Town');
        $('.placeholder02').css('background-color' , '#FFFCD9');
      });
      $('.placeholder02').mouseout(function(){
        $(this).attr('placeholder', this.holder); //sets it back to the initial value
         $('.target').css('background-color' , '#ffffff');
      });
    })
          </script>
          
       
@endsection
