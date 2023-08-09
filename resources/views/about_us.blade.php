@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="">
        <div class="container-content">
            <div class="py-4" style="padding-top: 3rem !important;">
                <h2 style="    font-size: 32px;font-weight: bold;line-height: 32px;">We are a team of experts</h2>
                <h4 style="line-height: 12px;">A bit about Us</h4>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4" style="padding-left: 0;padding-right: 10px;">
                    <img src="{{asset('images/About Us/about-us-1.png')}}" class="w-100" style="width: 100% !important;">
                </div>
                <div class="col-md-4 mb-4" style="padding-left: 0;padding-right: 5px;">
                    <img src="{{asset('images/About Us/about-us-2.png')}}" class="w-100" style="width: 100% !important;">
                </div>
                <div class="col-md-4 mb-4" style="padding-left: 5px;padding-right: 0;">
                    <img src="{{asset('images/About Us/about-us-3.png')}}" class="w-100" style="width: 100% !important;">
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div class="container-content py-5 sevice_text_content" style="padding-top: 3rem !important; padding-bottom: 3rem !important;">
        <div>
            <p>
                Welcome to Rescue Removals, where we turn the chaos of moving into a seamless experience filled with ease, efficiency, and a touch of magic. 
                We understand that relocating can be a daunting task, and that’s precisely why we exist—to rescue you from the overwhelming challenges and 
                make your move an unforgettable journey.
            </p>
            <p>
                At Rescue Removals, we are more than just a moving company; we are your trusted partners, dedicated to saving the day and making your transition as smooth as silk. 
                With our extensive expertise, unwavering commitment, and passion for perfection, we have become the go-to heroes in the realm of relocations. 
            </p>
        </div>
    </div>
    <!--------------- end section 2 --------------->

    <!--------------- section 3 --------------->
    <div>        
        <div class="bg-primary-dark my-4">
            <div class="container-content">     
                <img src="{{asset('images/Blue Truck.png')}}" class="w-100" alt="car">              
            </div>
        </div>
    </div>        
    <!--------------- end section 3 --------------->

    <!--------------- section 4 --------------->
    <div class="container-content py-5 sevice_text_content" style="padding-top: 3rem !important;     padding-bottom: 9rem !important;">
        <div class="row">            
            <div class="col-md-7"   style="padding-left: 0;">
                <div class="mt-4 mt-md-0" style="margin-bottom: 39px;">
                    <p>
                        But our superpowers don’t end there. We believe in going the extra mile to make your move extraordinary. 
                        Our team possesses an innate ability to transform the mundane into something magical. From packing and unpacking to organizing and setting up your new space, 
                        we’ll conjure an atmosphere of comfort and familiarity, making your new house feel like home from the moment you step through the door.
                    </p>
                    <p>
                        Rescue Removals is not just committed to saving your belongings; we’re also passionate about saving the environment. 
                        We champion eco-friendly practices throughout our operations, using sustainable materials, minimizing waste, 
                        and supporting local initiatives to create a greener future for all.                        
                    </p>                   
                </div>                
            </div>
            <div class="col-md-5">
                <img src="{{asset('images/About Us/about-us-4.png')}}" class="w-100">
            </div>
        </div>
        <p class="my-5">
            So, when the time comes to embark on your next adventure, trust Rescue Removals to be your knight in shining armor. With our superhuman capabilities, 
            exceptional service, and a touch of enchantment, we’ll make your move an epic triumph. 
            Remember, when it comes to relocation, we’re not just a moving company—we’re your ultimate heroes, here to rescue you and your dreams.
        </p>
    </div>
    <!--------------- end section 4 --------------->

    <!--------------- section 5 --------------->
    <div class="container-content book_now_btn" style="margin-bottom: -100px;">
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
    <!--------------- end section 5 --------------->
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