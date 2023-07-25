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
                    <div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
                        <div class="row">
                            <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h3 class="text-white">How many hours<br>will you need us for?</h3>
                                </div>                        
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-center py-5">
                                    <div class="text-center py-5">                                
                                        <i class="fa fa-play pointer" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(-90deg);"></i>                                
                                        <div class="bg-primary-light px-5 py-4 my-3" style="border-radius: 1.5rem;"><h1 class="text-white" style="font-size: 80px">02</h1></div>
                                        <i class="fa fa-play pointer" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(90deg);"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center px-3">
                                        <div class="bg-primary-light mb-3" style="width: 15px; height: 15px; border-radius: 50%;"></div>
                                        <div class="bg-primary-light" style="width: 15px; height: 15px; border-radius: 50%;"></div>
                                    </div>
                                    <div class="text-center py-5">
                                        <i class="fa fa-play pointer" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(-90deg);"></i>
                                        <div class="bg-primary-light px-5 py-4 my-3" style="border-radius: 1.5rem;"><h1 class="text-white" style="font-size: 80px">00</h1></div>
                                        <i class="fa fa-play pointer" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(90deg);"></i>                          
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between py-5">
                        <a href="{{ url('/furnitureappliance_manvan_eBaydeliveries/book1') }}" id="quote_url">
                            <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                                <h5 class="mb-0">Previous</h5>
                            </button>
                        </a>
                        <a href="{{ url('/furnitureappliance_manvan_eBaydeliveries/book3') }}" id="quote_url">
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