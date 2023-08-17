<div class="shadow-effect px-4" style="background-color: white; border-radius: 2rem;">                    
    <div class="p-5 panel_row">
        <div class="display-none-sm">
            <img src="{{asset('images/search.png')}}" alt="search" class="w-10">
            <input type="search" class="form-control cart_input" style="height: 60px; border-color: #353ea3;  border-radius: 1rem 1rem 0rem 1rem;" id="search" placeholder="Enter your item(s) here e.g. Sofa">
        </div>                        
        <div class="pt-530">
            <p class="display-none-sm">Or quickly add from our list of popular items</p>
            <div class="display-sm select-item-text">
                Your Booking Details
            </div>
            <div class="row removals_items">
                <form  class="needs-validation w-100" novalidate method="POST" action="{{route('HomeRemovals.BookingDetails_POST')}}">
                    @csrf
                    <div class="booking_details my-5 d-flex align-items-center flex-column">
                        <div class="content-wrapper w-1000">
            
                            <div class="input-block" >
                                <input type="text" name="name" class="form-control"  required >
                                <span class="placeholder">
                                    First Name & Last Name
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="email" name="email" class="form-control"  required value="{{$result->email}}">
                                <span class="placeholder">
                                    Email
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="number" name="number" class="form-control"  required value="{{$result->phone_number}}" >
                                <span class="placeholder">
                                    Phone Number
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