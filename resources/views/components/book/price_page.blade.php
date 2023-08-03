<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-start align-items-center">
            <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 150px;">
            <div class="ml-2">
                <h2 class="mb-0"><i>Final Step-Tell us what you're moving</i></h2>
                <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
            </div>                      
        </div>
    </div>
    <div class="col-md-4">
        <div class="d-flex justify-content-end align-items-center pt-3" style="height:128px;">
            <div>
                <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                <h6 >Quote Ref: 1887654</h6>
            </div>                    
        </div>
    </div>
</div>
<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-12 price_page">
            <div class="d-flex ">
                <div class="title">
                    Your Reference No. {{$result->reference_id}}
                </div>
                <div class="price_panel">
                    <div class="price">
                        £{{$result->getPrice()}}
                    </div>
                    <div>
                        Your Price
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
