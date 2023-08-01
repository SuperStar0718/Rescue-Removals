<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white pl-4">What time would you like to arrange the removal?</h3>
            </div>                        
        </div>
        <div class="col-md-8 right_panel">
            <div class="d-flex justify-content-center py-5">
                <div class="text-center py-5 hour">                                
                    <i class="fa fa-play pointer up" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(-90deg);"></i>                                
                    <div class="bg-primary-light px-5 py-4 my-3" style="border-radius: 1.5rem;"><h1 class="text-white" style="font-size: 80px">{{sprintf("%02d", $result->arrange_hour)}}</h1></div>
                    <i class="fa fa-play pointer down" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(90deg);"></i>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center px-3">
                    <div class="bg-primary-light mb-3" style="width: 15px; height: 15px; border-radius: 50%;"></div>
                    <div class="bg-primary-light" style="width: 15px; height: 15px; border-radius: 50%;"></div>
                </div>
                <div class="text-center py-5 minute">
                    <i class="fa fa-play pointer up" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(-90deg);"></i>
                    <div class="bg-primary-light px-5 py-4 my-3" style="border-radius: 1.5rem;"><h1 class="text-white" style="font-size: 80px">{{sprintf("%02d", $result->arrange_minute)}}</h1></div>
                    <i class="fa fa-play pointer down" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(90deg);"></i>                          
                </div>
            </div>
            
        </div>
    </div>
</div>