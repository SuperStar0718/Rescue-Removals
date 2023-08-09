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
                        <img src="{{asset('images/Blue Truck.png')}}" class="w-100" alt="person">
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center">
                        <h3 class="text-white">Man & Van</h3>
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
    <h4 class="container-content font-weight-bolder my-4">Man & Van</h4>
    <div class="bg-warning-light">
        <div class="container-content py-5 sevice_text_content">
            <div class="row">
                <div class="col-md-5 left_image">
                    <img src="{{asset('images/Man & Van/man-and-van-1.png')}}" class="">
                </div>
                <div class="col-md-7 right_context">
                    <div class="mt-4 mt-md-0" style="margin-bottom: 64px;">
                        <p>
                            Rescue Removals is here to handle all your transportation needs with our reliable man with a van service. 
                            We offer professional van hire with a driver at highly competitive prices. Our network of transport partners operates throughout the UK, 
                            ensuring that we can provide man and van hire services in your vicinity whenever you need them. 
                        </p>
                        <p>
                            We prioritise the peace of mind of our customers and go above and beyond to deliver exceptional service. When you choose Rescue Removals.
                        </p>
                        <p>
                            With our man and van hire, you also benefit from free basic compensation cover for fire and theft, 
                            offering protection up to £50k (in accordance with our Terms and Conditions). 
                            Say goodbye to the risks associated with cheap rent a van services and the do-it-yourself approach. At Rescue Removals, 
                            we provide substantial savings while maintaining an outstanding reputation.
                        </p>
                    </div>
                    <div>
                        <img src="{{asset('images/Man & Van/man-and-van-2.png')}}" class="img_wid_100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->

    <!--------------- section 3 --------------->
    <div class="py-10" style="padding-top: 0rem !important;margin-bottom: 10rem;">
        <div class="container-content py-10 sevice_text_content" style="padding-top: 4rem !important; padding-bottom: 2rem !important;">
            <h5>Your Affordable Solution for Smooth Moves</h5>
            <p class="mb-3">
                Get ready for a hassle-free house move with Rescue Removals. We understand the importance of competitive
                pricing, allowing you to start your journey without any financial worries. Whether you’re planning weeks
                ahead or need immediate assistance, we strive to make your relocation easy and convenient.
            </p>
            <p class="mb-3">
                On the big day, our dedicated team will take care of all your requirements. Equipped with lifting gear,
                protective attire, and top-notch packing materials, we ensure the safe transportation of your
                belongings.
                From assembly and packing to storage and disassembly, we come prepared with the necessary tools for a
                seamless experience. Regardless of the size of your property, we have mastered the art of efficient and
                secure packing. Bid farewell to return trips and the risk of breakages.
            </p>
            <p class="mb-5">
                Choose Rescue Removals for an affordable and worry-free move that exceeds your expectations.
            </p>
        </div>
        <div class="container-content service_category services">
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-3.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-4.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-5.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-6.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-7.png')}}" class="">
                </div>
                <div class="">
                    <img src="{{asset('images/Man & Van/man-and-van-8.png')}}" class="">
                </div>
        </div>
    </div>
    <!--------------- end section 3 --------------->

    <!--------------- section 4 --------------->
    <div class="container-content  book_now_btn" style="margin-bottom: -100px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row book-now">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h3  class="btn-text-primary-light">Need a Man & Van?</h3>
                            <p>
                                Fill in our simple form and let
                                us take care of the rest.
                            </p>
                        </div>
                    </div>
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