@extends('layouts.main_layout')

@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="py-1">
        <div class="bg-primary-light py-1">
            <div class="container-content d-flex flex-column align-items-center  text-center">                
                <div class="py-5" style="width: 45%; height: 60%">             
                    <h3 class="text-white">We would love to hear from you...</h3>                       
                    <div class="my-3 px-4" style="background-color: white; border-radius: 2rem;">
                        <h6 class="py-5">Want to send us a message? Simply fill in all fields on this form and hit the send button</h6>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control  mr-2" style="height: 40px; border-radius: 0.5rem;" id="name" placeholder="Name">
                            <input type="text" class="form-control" style="height: 40px; border-radius: 0.5rem;" id="number" placeholder="Number">
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <input type="text" class="form-control  mr-2" style="height: 40px; border-radius: 0.5rem;" id="email" placeholder="Email Address">
                            <input type="text" class="form-control" style="height: 40px; border-radius: 0.5rem;" id="subject" placeholder="Subject">
                        </div>
                        <textarea type="text" class="form-control" rows="8" style="border-radius: 0.5rem;" id="message" placeholder="Message"></textarea> 
                        <div class="text-center py-5">
                            <button type="button" class="btn bg-primary-light text-white rounded-pill px-4 py-2">
                                <h6 class="mb-0">Send Message</h6>
                            </button>
                        </div>       
                    </div>
                    <div class="py-3 px-2" style="background-color: white; height: 6%; border-radius: 2rem;">
                        <h6 class="btn-text-primary-light mb-0">Rescue Removals, 6-8 Great Eastern Street, London, EC2A 3NT</h6>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
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
    <!--------------- end section 2 --------------->

@endsection
   
@section('footer')
    @include('components.footer')    
@endsection