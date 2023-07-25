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
                <div class="shadow-effect bg-warning-light" style="height: 99%">
                    <div class="p-5">
                        <div class="text-center">
                            <img src="{{asset('images/courier.png')}}" class="w-60">
                        </div>
                        <h5 class="text-center">
                            We need some details about what you would like to store. 
                            Please give us a call and a member of our team will get a price for you right away.
                        </h5>
                        <div class="text-center py-5">
                            <div style="text-align: end">
                                <h4 class="btn-text-primary-light">CALL US ON</h4>
                            </div>                            
                            <h1 class="btn-text-primary-light" style="font-size: 60px">0208 0906151</h1>
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
