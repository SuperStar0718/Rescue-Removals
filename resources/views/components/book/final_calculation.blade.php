<div class="content-wrapper booking-detail shadow-effect">
    <h3>Your Booking Details</h3>
    <div class="booking-form">
        <div class="row py-3">
            <div class="col-12">
                <div class="input-block">
                    <input type="text" name="name" class="form-control" id="name"   required >
                    <span class="placeholder">
                        First Name & Last Name
                    </span>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-6">
                <div class="input-block">
                    <input type="text" name="email" id="email"  class="form-control" required  value="{{$result->email}}" >
                    <span class="placeholder">
                        Email Address
                    </span>
                </div>
            </div>
            <div class="col-6">
                <div class="input-block phone_number first">
                    <input type="tel" class="form-control" name="phone" id="phone"  required  >
                    <span class="placeholder">
                        Phone Number
                    </span>
                    <button type="button">
                    +
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="content-wrapper address-detail m-40 shadow-effect">
    <h3>Pickup Address & Contact Details</h3>
    <div class="address-form">
        <div class="row">
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_postcode" class="form-control" value="{{$result->getPostCodeFrom()}}" required>
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_add1" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_add2" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_city" class="form-control" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_county" class="form-control" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_contact_name" class="form-control" id="pickup_contact_name" required  >
                    <span class="placeholder">
                        Contact Name at Pickup
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="pickup_contact_number" class="form-control" id="pickup_phone" required  >
                    <span class="placeholder">
                        Pickup Contact Number
                    </span>
                </div>
            </div>
            <div class="check-box-wrapper col-md-12 pt-3">
                <div class="useContact" >
                    <input type="checkbox" name="useMyContact" id="pickup_use"/>
                    <label for="pickup_use"><span>Use my contact details</span></label>
                </div>
                <div class="pt-2">
                    <p>It is your responsibility to make this person aware that AnyVan and a driver will contact them during the course of the job. By clicking ‘Book Now’ you are authorising AnyVan to share essential booking information with this person and a driver.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-wrapper address-detail m-40 shadow-effect">
    <h3>Delivery Address & Contact Details</h3>
    <div class="address-form">
        <div class="row">
            <div class="col-md-6  py-3">
                <div class="input-block">
                    <input type="text" name="delivery_postcode" class="form-control" value="{{$result->getPostCodeTo()}}" required  >
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_add1" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_add2" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
           
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_city" class="form-control" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_county" class="form-control" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_contact_name" id="delivery_name" class="form-control" required  >
                    <span class="placeholder">
                        Contact Name at Delivery
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="delivery_contact_phone" id="delivery_phone" class="form-control" required  >
                    <span class="placeholder">
                        Delivery Contact Number
                    </span>
                </div>
            </div>
            <div class="check-box-wrapper col-md-12 pt-3">
                <div class="useContact"  id="delivery_use">
                    <input type="checkbox" name="useMyContact" id="deliver_info"/>
                    <label for="deliver_info"><span>Use my contact details</span></label>
                </div>
                <div class="pt-2">
                    <p>It is your responsibility to make this person aware that AnyVan and a driver will contact them during the course of the job. By clicking ‘Book Now’ you are authorising AnyVan to share essential booking information with this person and a driver.</p>
                </div>
            </div>
        </div>
    </div>
</div>
