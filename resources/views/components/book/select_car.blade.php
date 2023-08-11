<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row">
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white px-3">What type of Van will you need.</h3>
            </div>                        
        </div>
        <div class="col-md-8 car-panel">
            <div class="car_selection ">
                <div class="text-center  select_car">                                
                    @if($component!="HomeRemovals.select_car")
                    <div class="arrow carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="fa fa-play pointer up" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px; transform: rotate(180deg);"></i></div>
                    @endif
                    <div id="carouselExampleControls" class="carousel slide col-md-8" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            @foreach($vans as $key => $van)
                                <div class="carousel-item @if(++$key == ($result->van)) active @endif">
                                    <img class="d-block w-100" src="{{asset($van->image)}}" alt="First slide">
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
                    @if($component!="HomeRemovals.select_car")

                    <div class="arrow carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="fa fa-play pointer down" style="color: white; background-color:#353EA3; border-radius:50%; padding:10px;"></i></div>
                    @endif
                </div>
                
            </div>
            <div class="car_title_container">
                <div class="car_title_section">
                    <div class="car_title"><span class="car_name">{{$vans[$result->van-1]->name}}</span> Van</div>
                    <svg id="Group_889" data-name="Group 889" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20.001" viewBox="0 0 20 20.001">
                        <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_834" data-name="Rectangle 834" width="20" height="20.001" fill="#f5f5fa"/>
                        </clipPath>
                        </defs>
                        <g id="Group_869" data-name="Group 869" clip-path="url(#clip-path)">
                        <path id="Path_353" data-name="Path 353" d="M20,9.987A10,10,0,1,1,9.64.005,9.989,9.989,0,0,1,20,9.987m-9.886,8.771a8.756,8.756,0,1,0-8.87-8.722,8.758,8.758,0,0,0,8.87,8.722" transform="translate(0 0.001)" fill="#f5f5fa"/>
                        <path id="Path_354" data-name="Path 354" d="M49.658,53.631c-.183.166-.371.328-.548.5a.339.339,0,0,1-.473.046.349.349,0,0,1-.1-.372,3.26,3.26,0,0,1,.685-1.361,3.38,3.38,0,0,1,.993-.872,1.65,1.65,0,0,1,1.3-.2,1.435,1.435,0,0,1,1.035,1.4q0,2.068,0,4.136v.138l.03.019c.155-.136.308-.276.466-.408a.831.831,0,0,1,.271-.19.3.3,0,0,1,.386.361,2.927,2.927,0,0,1-.2.625,3.688,3.688,0,0,1-1.4,1.626,1.789,1.789,0,0,1-1.158.3,1.428,1.428,0,0,1-1.259-1.4V53.659l-.036-.027" transform="translate(-41.12 -43.479)" fill="#f5f5fa"/>
                        <path id="Path_355" data-name="Path 355" d="M53.234,28.339a1.512,1.512,0,1,1,1.49,1.514,1.506,1.506,0,0,1-1.49-1.514" transform="translate(-45.109 -22.732)" fill="#f5f5fa"/>
                        </g>
                    </svg>
                    
                </div>
            </div>
        </div>
    </div>
</div>