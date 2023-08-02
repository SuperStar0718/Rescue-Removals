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
                <div class="col-md-5 options" style="margin-top: -66px; ">
                    <div class="align-items-center text-center">
                        <img src="{{asset('images/courier.png')}}" alt="courier" class="w-60"> 
                    </div>
                    <div style="position:relative;" class = "categories">                    
                        <input type="text" id="moving-input" class="form-control form-control-lg" style="height: 60px" id="moving" placeholder="What are you moving?"> 
                        <div class="mt-2 py-4 px-5" id="dropdown-frame" style="position: absolute; width:700px; right:0px; background-color: white; border-radius: 0.5rem; border: 4px solid #353ea3;  display:none; z-index: 1;">
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
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="european" onclick = "set_value('European moves')">
                                        <img src="{{asset('images/Book/european union icon.png')}}" alt="home-removals-logo" class="w-5  ">
                                        <h6 class="pl-3 mb-0">European moves</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="waste" onclick = "set_value('Waste Removals')">
                                        <img src="{{asset('images/Book/waste icon-ai (1).png')}}" alt="home-removals-logo" class="w-5 waste_removals ">
                                        <h6 class="pl-3 mb-0">Waste Removals</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="storage" onclick = "set_value('Storage')">
                                        <img src="{{asset('images/Book/storage icon (1).png')}}" alt="home-removals-logo" class="w-5 storage ">
                                        <h6 class="pl-3 mb-0">Storage</h6>
                                    </div> 
                                </div>
                                <div class="col-md-6 mb-2 category">
                                    <div class="d-flex justify-content-start align-items-center text-center pointer" id="ebay" onclick = "set_value('eBay Deliveries')">
                                        <img src="{{asset('images/Book/ebay icon (1).png')}}" alt="home-removals-logo" class="w-5 ebay ">
                                        <h6 class="pl-3 mb-0">eBay Deliveries</h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between row location_input  py-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg mr-2" style="height: 60px" id="pac-input" placeholder="Pick Up Location">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" style="height: 60px" id="dropOff" placeholder="Drop Off Location">
                        </div>

                    </div>
                    <div class="d-flex justify-content-between location_input row">
                        <div class="col-md-6">
                            <img src="{{asset('images/Trustpilot Logo-1.svg')}}" alt="courier" style="width: 120px;">
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn bg-primary-light text-white px-5 py-3" id="quote_btn" >
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
    <div>
        <div class="d-flex justify-content-center text-center">
            <div class="border-bottom border-grey " style="width: 75%">
                <h3 class="py-4">Your Journey Begins With Us!</h3>
            </div>            
        </div>
        
        <div class="bg-primary-dark my-5">
            <div class="container-content py-5">                
                <img src="{{asset('images/Blue Truck.png')}}" class="w-100 py-5" alt="car">               
                              
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
        <div class="container-content service_category">
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
                            <h4 class="position-absolute center-character text-white">Furniture & Large Items Delivery</h4>
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
                            <h4 class="position-absolute center-character text-white">European Moves</h4>
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
                            <h4 class="position-absolute center-character text-white">Storage</h4>
                            <img src="{{asset('images/Main/Image 1.png')}}" class="service" style="filter: brightness(0.6);">
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <!--------------- end section 3 --------------->

    <!--------------- section 4 --------------->
    <div class="container-content book_now_btn" style="margin-bottom: -120px;">
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
                        <button type="button" class="btn bg-primary-light text-white px-5 py-4">
                            <h5 class="mb-0">Book Now</h5>
                        </button>
                    </div>
            </div>
        </div>
    </div>
      <div id="map"></div>

    <!--------------- end section 4 --------------->
@endsection

@section('footer')
    @include('components.footer')    
@endsection

@section('script')
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdwK0YxzP31-BE703RBfLYC8WESqH9FUU&callback=initMap&libraries=places&v=weekly"
        defer
      ></script>
    <script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 40.749933, lng: -73.98633 },
            zoom: 13,
            mapTypeControl: false,
        });
       
        const card = document.getElementById("pac-card");
        const from = document.getElementById("pac-input");
        const to = document.getElementById("dropOff");
        const biasInputElement = document.getElementById("use-location-bias");
        const strictBoundsInputElement = document.getElementById("use-strict-bounds");
        const options = {
            fields: ["formatted_address", "geometry", "name"],
            strictBounds: true,
            types: ["establishment"],
            componentRestrictions: { country: 'UK' } // Limit results to the United Kingdom
        };

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

        const autocomplete = new google.maps.places.Autocomplete(from, options);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        const autocomplete1 = new google.maps.places.Autocomplete(to, options);
        // Listen for the place_changed event
        autocomplete.addListener('place_changed', function() {
            const place = autocomplete.getPlace();
            if (place && place.formatted_address) {
                console.log('Selected Address:', place.formatted_address);
                const data = {
                    'address':place.formatted_address,
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
            if (place && place.formatted_address) {
                console.log('Selected Address:', place.formatted_address);
                const data = {
                    'address':place.formatted_address,
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

        $(document).click(function(event) {
            if (!$(event.target).closest('#moving-input, #dropdown-frame').length) {
                $('#dropdown-frame').hide();
            }
        });

        $('#quote_btn').click(function(){
            var category = $('#moving-input').val()
            var from  =  $('#pac-input').val()
            var to = $('#dropOff').val()
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
                            var url = "{{route('eBay.cart.update.position')}}"
                            update_from_to(url, from, to)
                            break;
                        case "Furniture & Appliances":
                            var url = "{{route('Furniture_Appliance.cart.update.position')}}"
                            update_from_to(url, from, to)
                            break;
                        case "Man & Van":
                            var url = "{{route('ManVan.cart.update.position')}}"
                            update_from_to(url, from, to)
                            break;
                        case "Office Removals":
                            var url = "{{route('OfficeRemovals.cart.update.position')}}"
                            update_from_to(url, from, to)
                            break;
                        case "Home Removals":
                            var url = "{{route('HomeRemovals.cart.update.position')}}"
                            update_from_to(url, from, to)
                            break;
                        case "Motorbikes":
                            var url = "{{route('Motorbike.cart.update.position')}}"
                            update_from_to(url, from, to)
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
                        case "European moves":
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
            $('#dropdown-frame').hide();
            $(".options .warning").show();
            let quote_url = "{{ url('/') }}";
            if(val === "eBay Deliveries")
            {
                quote_url = "{{route('eBay')}}";            
            }
            else if(val === "Furniture & Appliances")
            {
                quote_url = "{{route('Furniture_Appliance')}}";            
            }
            else if(val === "Man & Van")
            {
                quote_url = "{{route('ManVan')}}";            
            }
            else if(val === "Office Removals")
            {
                quote_url = "{{ route('OfficeRemovals.hours_need') }}";
            }
            else if(val === "Home Removals")
            {
                quote_url = "{{ route('HomeRemovals.cart') }}";
            }
            else if(val === "Motorbikes")
            {
                quote_url = "{{ route('Motorbike.hours_need') }}";
            }
            else if(val === "Waste Removals")
            {
                quote_url = "{{ route('WasteRemovals') }}";
            }
            else if(val === "European moves")
            {
                quote_url = "{{ route('European_moves') }}";
            }
            else if(val === "Storage")
            {
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
@endsection
