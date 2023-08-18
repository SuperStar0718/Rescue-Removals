<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row" style="">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white description">Do you require Packing Services?</h3>
            </div>                        
        </div>
        <div class="col-md-8 congestion right_panel">
            <div class=" row py-5 my-5">
                <div class="px-5 col-md-5 py-3 button yes" @if($result->packing_service==1) style='background-color:#353EA3; color:white;' @endif >
                    Yes
                </div>
                <div class="px-5 col-md-5 py-3 button no" @if($result->packing_service==0) style='background-color:#353EA3; color:white;' @endif>
                    No
                </div>
            </div>
            
        </div>
    </div>
</div>