<div class="content-wrapper booking-detail shadow-effect">
    <h3>Your Booking Details</h3>
    <div class="booking-form">
        <div class="row py-3">
            <div class="col-12">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" class="form-control" class="form-control"  required >
                    <span class="placeholder">
                        First Name & Last Name
                    </span>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-6">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" class="form-control" required  >
                    <span class="placeholder">
                        Email Address
                    </span>
                </div>
            </div>
            <div class="col-6">
                <div class="input-block phone_number first">
                    <input type="text" class="form-control" name="input-text"  required  >
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
                    <input type="text" name="input-text" class="form-control" value="{{$result->getPostCodeFrom()}}" required>
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Contact Name at Pickup
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Pickup Contact Number
                    </span>
                </div>
            </div>
            <div class="check-box-wrapper col-md-12 pt-3">
                <div class="useContact">
                    <input type="checkbox" name="useMyContact"/>
                    <span>Use my contact details</span>
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
                    <input type="text" name="input-text" class="form-control" value="{{$result->getPostCodeTo()}}" required  >
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
           
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Contact Name at Pickup
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" class="form-control" required  >
                    <span class="placeholder">
                        Pickup Contact Number
                    </span>
                </div>
            </div>
            <div class="check-box-wrapper col-md-12 pt-3">
                <div class="useContact">
                    <input type="checkbox" name="useMyContact"/>
                    <span>Use my contact details</span>
                </div>
                <div class="pt-2">
                    <p>It is your responsibility to make this person aware that AnyVan and a driver will contact them during the course of the job. By clicking ‘Book Now’ you are authorising AnyVan to share essential booking information with this person and a driver.</p>
                </div>
            </div>
        </div>
    </div>
</div>
