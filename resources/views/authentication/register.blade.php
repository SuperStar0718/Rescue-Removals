@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
    <!--------------- section 1 --------------->
    <div class="container-content">
        <div class="row main_container_content mar5">
            <div class="col-md-6 left_image">
                <img src="{{asset('images/Register/signup.png')}}" class="">
            </div>
            <div class="col-md-6 right_content">
                <div class="shadow-effect auth-bg-color" style="height: 99%">
                    <div class="p-5">
                        <h4>Create Account</h4>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="p-5">
                                <input type="text" name="email" class="form-control mb-41" style="height: 50px; border-radius: 0.5rem;margin-bottom: 24px;" id="email" placeholder="Email Address">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="password" name="password" class="form-control mb-41" style="height: 50px; border-radius: 0.5rem;margin-bottom: 24px;" id="password" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="password" name="password_conf" class="form-control" style="height: 50px; border-radius: 0.5rem;margin-bottom: 24px;" id="confirm password" placeholder="Conrfirm Password">
                                @error('password_conf')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="text-center mt-1">
                                    <button type="submit" class="btn my-5 py-2 px-3 bg-primary-light text-white" style="border-radius: 0.5rem;">
                                        <h5 class="mb-0">Create Account</h5>
                                    </button>
                                </div>
                                <div class="border-bottom border-bottom-primary mb-5" style="width: 100%; height: 15px"></div>
                                    
                                <h6 class="mr-2 text-center">By creating an account you agree to our <a href="">Terms of Service</a> and <a href="">Privacy Policy</a></h6>
                            </div>   
                        </form>                
                    </div>                                                     
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
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
                    <a href="{{ url('/') }}">
                        <button type="button" class="btn bg-primary-light text-white rounded-pill px-5 py-4">
                            <h5 class="mb-0">
                                <a href="{{route('main')}}">
                                    BOOK NOW
                                </a>
                            </h5>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection
