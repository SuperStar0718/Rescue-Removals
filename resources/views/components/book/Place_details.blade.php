<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-start align-items-center">
            <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 210px;">
            <div class="ml-2 header_text">
                <h2 class="mb-0">Final Step-Tell us what you're moving</h2>
                <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
            </div>                      
        </div>
    </div>
    <div class="col-md-4">
        <div class="d-flex justify-content-end align-items-center pt-3" style="height:179px;">
            <div class="header_text_right">
                <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                <h6 >Quote Ref: 1887654</h6>
            </div>                    
        </div>
    </div>
</div>
<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white pl-4">Where are you moving from and to?</h3>
            </div>                        
        </div>
        <div class="col-md-8 stairs right_panel">
            <div class="p-5">
                <h4 class="btn-text-primary-light pt-5">Pickup Details</h4>
                <div class="row justify-content-between location_input">
                    <div class="dropdown col-md-6">
                        <button class="btn  dropdown-toggle" type="button" id="pickup_details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$result->getFromAddress()}}
                        </button>
                        
                    </div>
                    
                    <div class="dropdown col-md-6">
                        
                        <button class="btn  dropdown-toggle" type="button" id="pickup_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if($result->from_type=='')Select Property Type @else {{$result->from_type}} @endif

                        </button>
                        <div class="dropdown-menu from" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown_widget">
                                <div class="house drop_item">
                                    <div>
                                        <img src="{{asset('images/house.svg')}}" alt="">House
                                    </div>
                                    <li>1 Bed House</li>
                                    <li>2 Bed House</li>
                                    <li>3 Bed House</li>
                                    <li>4+ Bed House</li>
                                </div>
                                <div class="flat drop_item">
                                    <div>
                                        <img src="{{asset('images/flat.svg')}}" alt="">Flat
                                    </div>
                                    <li>1 Bed Flat</li>
                                    <li>2 Bed Flat</li>
                                    <li>3 Bed Flat</li>
                                    <li>4+ Bed Flat</li>
                                </div>
                                <div class="other drop_item">
                                    <div>
                                        <img src="{{asset('images/other.svg')}}" alt="">Other
                                    </div>
                                    <li>Studio</li>
                                    <li>Storage Unit</li>
                                    <li>Flatshare</li>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <h4 class="btn-text-primary-light pt-5 ">Delivery Details</h4>
                <div class="row justify-content-between pb-5 location_input">
                    <div class="dropdown col-md-6">
                        <button class="btn  dropdown-toggle" type="button" id="delivery_details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$result->getToAddress()}}
                        </button>
                       
                    </div>
                    <div class="dropdown col-md-6">
                        <button class="btn  dropdown-toggle" type="button" id="delivery_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ground Floor
                        </button>
                        <div class="dropdown-menu to" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Basement</a>
                            <a class="dropdown-item" href="#">Ground floor</a>
                            <a class="dropdown-item" href="#">1st floor</a>
                            <a class="dropdown-item" href="#">2nd floor</a>
                            <a class="dropdown-item" href="#">3rd floor</a>
                            <a class="dropdown-item" href="#">4th floor</a>
                            <a class="dropdown-item" href="#">5th floor</a>
                            <a class="dropdown-item" href="#">6th floor</a>
                            <a class="dropdown-item" href="#">Above 6th floor</a>
                        </div>
                    </div>
                </div>
            </div>                       
                
        </div>
    </div>
</div>