@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

     <!--------------- section 1 --------------->
     <div class="bg-primary-dark py-5 display-none-sm">
        <div class="container-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/Blue Truck.png')}}" class="w-100" alt="person">
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center">
                        <h3 class="text-white">European Moves</h3>
                        <div class="text-center">
                            <a href="{{ url('/') }}">
                                <button type="button" class="btn bg-white btn-text-primary-dark rounded-pill px-5 py-3">
                                    <h5 class="mb-0">Call Us</h5>
                                </button>   
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-sm">
        <div class="top-content">
            <div class="text">
                EUROPEAN MOVES
            </div>
            <div class="book-now">
                <a href="{{route('main')}}">
                    BOOK NOW
                </a>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <h4 class="container-content font-weight-bolder display-none-sm my-4">European Moves</h4>
    <div class="bg-warning-light">
        <div class="container-content py-5 sevice_text_content">
            <div class="row">
                <div class="col-md-5 left_image">
                    <img src="{{asset('images/European Moves/european-moves-1.png')}}" >
                </div>
                <div class="col-md-7 right_context">
                    <div class="mt-4 mt-md-0" style="margin-bottom: 95px;">
                        <p>
                            Experience a seamless and cost-effective European move with Rescue Removals. 
                            Our international removals services ensure that your logistical needs are entrusted to reliable professionals, 
                            whether you’re relocating your home or office. Request an instant free quote and let us alleviate the stress of your move. 
                            Rest assured that your belongings receive the highest level of care and attention throughout the entire journey, 
                            thanks to our trusted transport partners. Our team of expert European move coordinators oversees every aspect of your international move, 
                            providing constant support and reassurance. With qualified and experienced transport partners, 
                            we offer transportation services to various European destinations, including Spain, France, Italy, and more. 
                            Count on us to deliver an exceptional service that combines expertise with affordability.
                        </p>
                    </div>
                    <div class="display-none-sm">
                        <img src="{{asset('images/European Moves/european-moves-2.png')}}" class="img_wid_100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->
    <div class="display-sm">
        <img src="{{asset('images/European Moves/european-moves-2.png')}}" class="img_wid_100">
    </div>
    <!--------------- section 3 --------------->
    <div class="py-10 service-container">
        <div class="container-content py-10 sevice_text_content" style="padding-top: 4rem !important; padding-bottom: 2rem !important;">
            <h5>Professional removals to all parts of Europe</h5>
            <p class="mb-3">
                When it comes to moving to or from Europe, whether it’s for personal or work-related reasons, 
                there are numerous factors to consider beyond a straightforward move. 
                Renting and driving a van on your own can come with various challenges and inconveniences. 
                Not only do you need precise knowledge of the route to your destination, but you must also navigate international road regulations with certainty. 
                Moreover, additional expenses like insurance and fuel further complicate the process of European van hire. On the surface, 
                it can seem overwhelmingly daunting. However, with Rescue Removals, it doesn’t have to be.
            </p>
            <p class="mb-5">
                We offer highly competitive prices, allowing you to initiate your move promptly and with the confidence that you’re in capable hands. 
                Simultaneously, if you prefer to plan your international removal well in advance, we are more than accommodating. 
                We value your schedule and are always prepared to take swift action when needed.
            </p>            
        </div>
        <div class="container-content service_category services">
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-3.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-4.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-5.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-6.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-7.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/European Moves/european-moves-8.png')}}" class="">
                </div>
        </div>
    </div>
    <!--------------- end section 3 --------------->


    <!--------------- section 4 --------------->
    <div class="container-content book_now_btn" style="margin-bottom: -100px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row book-now">
                    <div class="d-flex justify-content-center">
                        <div class="bottom-book-now">
                            <h3  class="btn-text-primary-light">Looking to Move Abroad?</h3>
                            <p>
                                Fill in our simple form and let
                            us take care of the rest.
                            </p>
                        </div>
                    </div>
                    <div class="text-center mt-1">
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn bg-primary-light text-white rounded-pill px-5 py-3">
                                <h5 class="mb-0">Call Us</h5>
                            </button>
                        </a>
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
$(document).ready(function(){
            // Create a new Date object to get the current date and time
            const today = new Date();

            // Get the day of the week as a number (0: Sunday, 1: Monday, ..., 6: Saturday)
            const dayOfWeekNumber = today.getDay();

            var text = $('.weekday').children('div').eq(dayOfWeekNumber-1).css('color','yellow ')
            console.log(text)

        })
</script>
@endsection