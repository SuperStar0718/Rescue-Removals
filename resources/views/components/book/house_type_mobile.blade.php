<div class="main_content component">
    <div class="title_mobile">
        Where are you moving from and to?
    </div>
    <div class="location_input">
        <div>Pickup Details</div>
        <div class="dropdown col-md-6">
            <button class="btn  dropdown-toggle" type="button" id="pickup_details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class='address_abb'></span>
            </button>
            
        </div>
        
        <div class="dropdown col-md-6">
            
            <button class="btn  dropdown-toggle" type="button" id="pickup_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Property Type  
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
</div>