{{-- 
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
        <div class="row modal-payment-grid">
            <div class="py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Exp. Month
                    </span>
                </div>
            </div>
            <div class="py-3">
                <div class="input-block">
                    <input type="text" name="input-text" required  >
                    <span class="placeholder">
                        Exp. Year
                    </span>
                </div>
            </div>
            <div class="py-3">
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
                <div class="price_number">£{{$result->getPrice()}}</div>

            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-around">
            <div class="">By clicking Book Now, you agree with our Privacy Policy and Terms of Use.</div>
            <div class="d-flex justify-content-center" >
                <button type="button" class="btn cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn book_now">
                    <a href="{{route('main')}}">
                        BOOK NOW
                    </a>
                </button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>


 --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary modal_button" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog house_type" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enter Payment Details</h5>
        </div>
        <div>
            <img src="{{asset('images/visa_card.png')}}" alt="">
        </div>
        <form  class="needs-validation" novalidate method="POST" >
            @csrf
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
                <div class="row modal-payment-grid">
                    <div class="py-3">
                        <div class="input-block">
                            <input type="text" name="input-text" required  >
                            <span class="placeholder">
                                Exp. Month
                            </span>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="input-block">
                            <input type="text" name="input-text" required  >
                            <span class="placeholder">
                                Exp. Year
                            </span>
                        </div>
                    </div>
                    <div class="py-3">
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
                        <div class="price_number">£{{$result->getPrice()}}</div>
        
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer modal-content">
        <div class="modal-grid">
            <div class="">By clicking Book Now, you agree with our Privacy Policy and Terms of Use.</div>
            <button type="button" class="btn cancel" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn book_now">
                <a href="{{route('main')}}">
                    BOOK NOW
                </a>
            </button>
        </div>
    </div>
</div>
</div>