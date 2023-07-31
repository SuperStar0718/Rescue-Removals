<div class="content-wrapper booking-detail shadow-effect">
    <h3>Your Booking Details</h3>
    <div class="booking-form">
        <div class="row py-3">
            <div class="col-12">
                <div class="input-block">
                    <input type="text" name="input-text"  required >
                    <span class="placeholder">
                        First Name & Last Name
                    </span>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-6">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Email Address
                    </span>
                </div>
            </div>
            <div class="col-6">
                <div class="input-block phone_number first">
                    <input type="text" class="" name="input-text"  required  >
                    <span class="placeholder">
                        Phone Number
                    </span>
                    <button>
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
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Contact Name at Pickup
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
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
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Search Postcode
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Address Line 1
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Address Line 2
                    </span>
                </div>
            </div>
           
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        City
                    </span>
                </div>
            </div>
            <div class="col-md-12 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        County
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Contact Name at Pickup
                    </span>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary modal_button" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Payment Details</h5>
    </div>
    <div>
        <img src="{{asset('images/visa_card.png')}}" alt="">
    </div>
    <div class="modal-body content-wrapper">
        <div class="row">
            <div class="col-md-8  py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Name on card
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Card Number
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4  py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Exp. Month
                    </span>
                </div>
            </div>
            <div class="col-md-4  py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Exp. Year
                    </span>
                </div>
            </div>
            <div class="col-md-4  py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        CVV
                    </span>
                </div>
            </div>
        </div>
        <div class="row price">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div class="">Total Price</div>
                <div class="price_number">£121.00</div>

            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6">By clicking Book Now, you agree with our Privacy Policy and Terms of Use.</div>
            <div class="col-md-6">

                <button type="button" class="btn cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn book_now">Book Now</button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>