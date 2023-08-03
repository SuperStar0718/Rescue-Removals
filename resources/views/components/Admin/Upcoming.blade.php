<div class="row order">
                <div class="row">
                    <div class="col-md-12 grid">
                         @for ($i = 0; $i < 12; $i++)
                            <div class="item" style="margin-bottom:40px">
                                <div class="header pink">
                                    <div>
                                        Ref: #714586953
                                    </div>
                                        <img src="{{asset('images/medium_wheel_based.png')}}" alt="">
                                </div>
                                <div class="main_body">
                                    <div class="service">
                                        <div class="heading">
                                            Service
                                        </div>
                                        <div class="context">
                                            Furniture & Appliances
                                        </div>
                                    </div>
                                    <div class="date_info d-flex flex-row">
                                        <div class="date col-md-6">
                                            <div class="heading">
                                                Date
                                            </div>
                                            <div class="context">
                                                23 May 2023
                                            </div>
                                        </div>
                                        <div class="time col-md-6">
                                            <div class="heading">
                                                Time
                                            </div>
                                            <div class="context">
                                                18:00 ~ 20:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="status pink">
                                            Pending
                                        </div>
                                        <img src="{{asset('images/Admin/pink.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>