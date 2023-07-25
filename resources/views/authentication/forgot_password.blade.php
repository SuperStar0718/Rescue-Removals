@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
    <!--------------- section 1 --------------->
    <div class="container-content py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/Forgot Password/forgotpassword.png')}}" class="w-100">
            </div>
            <div class="col-md-6">
                <div class="shadow-effect auth-bg-color" style="height: 99%">
                    <div class="p-5">
                        <h4>Forgot Password</h4>
                        <div class="p-5">
                            <input type="text" class="form-control mb-4" style="height: 40px; border-radius: 0.5rem;" id="email" placeholder="Enter Email Address">                            
                            
                            <div class="text-center mt-1">
                                <button type="button" class="btn my-2 py-2 px-3 bg-primary-light text-white" style="border-radius: 0.5rem;">
                                    <h5 class="mb-0">Resend Password</h5>
                                </button>
                            </div>
                            <div class="border-bottom border-bottom-primary my-5" style="height: 15px"></div>
                                
                            <h6 class="mr-2 text-center">Enter the email address you used when you joined and we’ll send you instructions to reset your password</h6>
                        </div>                   
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
