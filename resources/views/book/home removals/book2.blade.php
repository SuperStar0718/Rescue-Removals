@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-3">
        <div class="container-content">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 150px;">
                    <div class="ml-2">
                        <h2 class="mb-0"><i>Final Step-Tell us what you're moving</i></h2>
                        <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
                    </div>                      
                </div>
                <div class="shadow-effect px-4" style="background-color: white; border-radius: 2rem;">                    
                    <div class="p-5">
                        <div>
                            <!-- <img src="{{asset('images/search.png')}}" alt="search" class="w-10"> -->
                            <input type="search" class="form-control" style="height: 50px; border-color: #353ea3;  border-radius: 1rem 1rem 0rem 1rem;" id="search" placeholder="Enter your item(s) here e.g. Sofa">
                        </div>                        
                        <div class="py-5">
                            <p>Or quickly add from our list of popular items</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Sofas
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Wardrobes
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Boxes
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Beds & Mattresses
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Tables
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Televisions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Clothing
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Chairs
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <button type="button" class="btn dropdown-toggle mb-3 py-2 px-3" data-toggle="dropdown" style="background-color: white; width: 100%; border: 1px solid gray; border-radius: 1rem;">
                                    Add your own items
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Apple</a>
                                        <a class="dropdown-item" href="#">Orange</a>
                                    </div>
                                </div>                                     
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="d-flex justify-content-between py-5">
                    <a href="{{ url('/homeremovals/book1') }}" id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Previous</h5>
                        </button>
                    </a>
                    <a href="{{ url('/homeremovals/book3') }}" id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Next</h5>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex justify-content-end align-items-center pt-3">
                    <div>
                        <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                        <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                        <h6 >Quote Ref: 1887654</h6>
                    </div>                    
                </div>
                <div class="shadow-effect my-3 p-4" style="background-color: white; height: 62%; border-radius: 0rem 2rem 2rem 0rem;">   
                    <h5 class="btn-text-primary-light">My List(3)</h5>
                </div>                
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div class="container-content mt-5" style="margin-bottom: -85px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="d-flex justify-content-center align-items-center ">
                <div>
                    <h1>Your Journey Begins With Us!</h1>
                </div>   
                <div style="width: 105px;">
                    <img src="{{asset('images/book-car.png')}}" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection