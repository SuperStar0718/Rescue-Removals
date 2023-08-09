<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white pl-4">Select how many flights of stairs our team will need to climb?</h3>
            </div>                        
        </div>
        <div class="col-md-8 stairs right_panel">
            <div class="p-5">
                <h4 class="btn-text-primary-light pt-50" style="padding-top: 50px;">Pickup Details</h4>
                <div class="row justify-content-between location_input">
                    <div class="dropdown col-md-7">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="address_abb">{{$result->getFromAddress()}}</span>
                        </button>
                        
                    </div>
                    <div class="dropdown col-md-5">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Option
                        </button>
                        <div class="dropdown-menu from" aria-labelledby="dropdownMenuButton">
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
                <h4 class="btn-text-primary-light pt-5001" style="padding-top: 50px;">Delivery Details</h4>
                <div class="row justify-content-between pb-5 location_input">
                    <div class="dropdown col-md-7">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="address_abb">{{$result->getToAddress()}}</span>
                        </button>
                       
                    </div>
                    <div class="dropdown col-md-5">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Option
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