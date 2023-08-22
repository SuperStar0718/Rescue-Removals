<div class="shadow-effect px-4" style="background-color: white; border-radius: 2rem;">                    
    <div class="p-5 panel_row">
        <div class="display-none-sm">
            <img src="{{asset('images/search.png')}}" alt="search" class="w-10">
            <input type="search" class="form-control cart_input" style="height: 60px; border-color: #353ea3;  border-radius: 1rem 1rem 0rem 1rem;" id="search" placeholder="Enter your item(s) here e.g. Sofa">
        </div>                        
        <div class="pt-530">
            <div class="display-sm select-item-text">
                Enter Payment Details.
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/visa_card.png')}}" alt="">
            </div>
            <div class="row removals_items">
                <form  class="needs-validation w-100" novalidate method="POST">
                    @csrf
                    <div class="booking_details my-5 d-flex align-items-center flex-column">
                        <div class="content-wrapper w-1000">
            
                            <div class="input-block" >
                                <input type="text" name="name_on_card" class="form-control"  required >
                                <span class="placeholder">
                                    Name On Card
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="card_number" class="form-control"  required  >
                                <span class="placeholder">
                                    Card Number
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="expiry_date" class="form-control"  required  >
                                <span class="placeholder">
                                    Expiry Date
                                </span>
                            </div>
                            <div class="input-block">
                                <input type="text" name="cvv" class="form-control"  required  >
                                <span class="placeholder">
                                    CVV
                                </span>
                            </div>
                            <div class="price_panel_mobile">
                                <div class="price_text">
                                    Total Price
                                </div>
                                <div class="price_number">
                                    £{{$result->getPrice()}}
                                </div>
                            </div>
                            
                        </div>
                            <input type="submit" value="next" class="submit_hidden" hidden>
                    </div>
                </form>                    
            </div>
        </div>       
    </div>
</div>