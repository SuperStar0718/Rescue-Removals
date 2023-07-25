@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
    <!--------------- section 1 --------------->
    <div class="container-content py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/Login/login.png')}}" class="w-100">
            </div>
            <div class="col-md-6">
                <div class="shadow-effect auth-bg-color" style="height: 99%">
                    <div class="p-5">
                        <h4>Sign In</h4>
                        <div class="p-5">
                            <input type="text" class="form-control mb-2" style="height: 40px; border-radius: 0.5rem;" id="email" placeholder="Email Address">
                            <input type="password" class="form-control" style="height: 40px; border-radius: 0.5rem;" id="password" placeholder="Password">
                            <div class="d-flex justify-content-around py-3">
                                <div >
                                    <label class="form-check-label" for="check">
                                        <input type="checkbox" class="form-check-input">Remember Me
                                    </label>
                                </div>                            
                                <div>
                                    <a href="{{ url('/forgot_password') }}">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="border-bottom border-bottom-primary" style="width: 45%; height: 15px"></div>
                                <p>or</p>
                                <div class="border-bottom border-bottom-primary" style="width: 45%; height: 15px"></div>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <button type="button" class="btn d-flex justify-content-around align-items-center text-center my-3 py-2 px-3" style="background-color: white; width: 60%; border: 1px solid gray; border-radius: 1rem;">
                                    <img src="{{asset('images/Login/google.png')}}">
                                    <h6 class=" mb-0">Sign in with Google</h6>
                                </button>
                                <button type="button" class="btn d-flex justify-content-around align-items-center text-center py-2 px-3" style="background-color: white; width: 60%; border: 1px solid gray; border-radius: 1rem;">
                                    <img src="{{asset('images/Login/facebook.png')}}">
                                    <h6 class="mb-0">Sign in with Facebook</h6>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center pt-5">
                                <h6 class="mr-2">No Account?</h6>
                                <a href="{{ url('/register') }}"><h6>Create One</h6></a>

                            </div>
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
