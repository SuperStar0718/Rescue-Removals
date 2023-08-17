
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary modal_button" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog house_type get_price_modal" role="document">
    <div class="modal-content">
        <div class="section">
            <img src="{{asset('images/logo_blue.svg')}}" alt="">
        </div>
        <div class="section w-100 mb-5" style="letter-spacing: -1px;" >
            Please enter your email address and mobile number to get instant prices
        </div>
        <form  class="needs-validation" novalidate method="POST" action="{{route($url)}}">
            @csrf
            <div class="email_input mb-5">
                <div class="content-wrapper ">
    
                    <div class="input-block" style="margin-bottom: 10px;">
                        <input type="email" name="email" class="form-control"  required >
                        <span class="placeholder">
                            Enter your Email address
                        </span>
                    </div>
                    <div class="input-block">
                        <input type="number" name="mobile" class="form-control"  required >
                        <span class="placeholder">
                            Enter your Mobile Number
                        </span>
                    </div>
                    <input type="text" value="{{$quote_ref}}" name="quote_ref" hidden>
                </div>
                    <button type="submit" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                        <h5 class="mb-0">Get Prices Now</h5>
                    </button>
            </div>
        </form>
    </div>
</div>
</div>