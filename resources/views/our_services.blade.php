@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
    <!--------------- section 1 --------------->
    <div class="container-content mt-5" style="margin-bottom: -85px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h3  class="btn-text-primary-light">Ready to Move?</h3>
                            <p>
                                Fill in our simple form and let us take care of the rest.
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
    <!--------------- end section 1 --------------->
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection