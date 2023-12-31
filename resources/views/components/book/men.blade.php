<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white px-3">Select how many<br>Men you would like to help you?</h3>
            </div>                        
        </div>
        <div class="col-md-8 men right_panel car">
            <div class="d-flex justify-content-center ">
                <div class="text-center men_image z-indx-1" style="    padding-top: 20px;">                                
                    <img src="{{asset('images/man-courier.png')}}" />
                </div>
                
                <div class="men_count text-center minute d-flex flex-column justify-content-between poisition-relative">
                    <div><i class="fa fa-play pointer up" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(-90deg);"></i></div>
                    <div class="number_panel d-flex align-items-center bg-primary-light my-3" style="border-radius: 2.5rem;">
                        <h1 class="text-white" style="font-size: 146px"> {{$result->men}} </h1>
                        <p>Self Load</p>
                    </div>
                   
                    <div><i class="fa fa-play pointer down" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(90deg);"></i></div>
                </div>
            </div>
            
        </div>
    </div>
</div>