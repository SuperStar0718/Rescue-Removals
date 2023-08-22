<div class="shadow-effect px-4" style="background-color: white; border-radius: 2rem;">                    
    <div class="p-5 panel_row">
        <div class="display-none-sm">
            <img src="{{asset('images/search.png')}}" alt="search" class="w-10">
            <input type="search" class="form-control cart_input" style="height: 60px; border-color: #353ea3;  border-radius: 1rem 1rem 0rem 1rem;" id="search" placeholder="Enter your item(s) here e.g. Sofa">
        </div>                        
        <div class="pt-530">
            <div class="display-sm select-item-text">
                Pickup Address & Contact Details!
            </div>
            <div class="row removals_items">
                <form  class="needs-validation w-100" novalidate method="POST" >
                    @csrf
                    <div class="booking_details my-5 d-flex align-items-center flex-column">
                        <div class="content-wrapper address-form w-1000">
            
                            <div class="input-block postalcode" id="postcode_pickup"></div>
                            <div class="input-block">
                                <input type="text" name="address_1" id="formatted_address_0_pickup" class="form-control"  required  >
                                <span class="placeholder">
                                    Address Line 1
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="address_2" id="formatted_address_1_pickup" class="form-control optional"  >
                                <span class="placeholder">
                                    Address Line 2
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="city" class="form-control" id="town_or_city_pickup"  required  >
                                <span class="placeholder">
                                    City
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="contact_name_pickup" class="form-control"  required  >
                                <span class="placeholder">
                                    Contact Name at Pickup
                                </span>
                            </div>
                            
                        </div>
                            <input type="submit" value="next" class="submit_hidden" hidden>
                    </div>
                </form>                    
            </div>
        </div>       
    </div>
</div>