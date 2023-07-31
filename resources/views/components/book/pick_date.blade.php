<div class="shadow-effect" style="background-color: white; border-radius: 2rem;">
    <div class="row" style="">
        @if($component=="OfficeRemovals.pick_date")
        <div class="col-md-4 bg-primary-light d-flex justify-content-center align-items-center" style="border-radius: 2rem 0rem 0rem 2rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white pl-4">Select the date that you would like to move?</h3>
            </div>                        
        </div>
        <div class="col-md-8 men car">
        @else
        <div class="col-md-12 pick_date ">
        @endif
            <div class=" container py-3">
                <div class="select_month py-2 row">
                    <div class="dropdown col-md-2">
                        <button class="btn month  dropdown-toggle month" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">July</button>
                        <div class="dropdown-menu month" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">January</a>
                            <a class="dropdown-item" href="#">February</a>
                            <a class="dropdown-item" href="#">March</a>
                            <a class="dropdown-item" href="#">April</a>
                            <a class="dropdown-item" href="#">May</a>
                            <a class="dropdown-item" href="#">June</a>
                            <a class="dropdown-item" href="#">July</a>
                            <a class="dropdown-item" href="#">August</a>
                            <a class="dropdown-item" href="#">September</a>
                            <a class="dropdown-item" href="#">October</a>
                            <a class="dropdown-item" href="#">November</a>
                            <a class="dropdown-item" href="#">December</a>
                        </div>
                    </div>
                    <div class="dropdown col-md-2">
                        <button class="btn year dropdown-toggle year" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2023</button>
                        <div class="dropdown-menu year" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2021</a>
                            <a class="dropdown-item" href="#">2022</a>
                            <a class="dropdown-item" href="#">2023</a>
                            <a class="dropdown-item" href="#">2024</a>
                            <a class="dropdown-item" href="#">2025</a>
                            <a class="dropdown-item" href="#">2026</a>
                            <a class="dropdown-item" href="#">2027</a>
                            <a class="dropdown-item" href="#">2028</a>
                            <a class="dropdown-item" href="#">2029</a>
                            <a class="dropdown-item" href="#">2030</a>
                            <a class="dropdown-item" href="#">2031</a>
                            <a class="dropdown-item" href="#">2032</a>
                            <a class="dropdown-item" href="#">2033</a>
                            <a class="dropdown-item" href="#">2034</a>
                            <a class="dropdown-item" href="#">2035</a>
                            <a class="dropdown-item" href="#">2036</a>
                            <a class="dropdown-item" href="#">2037</a>
                            <a class="dropdown-item" href="#">2038</a>
                            <a class="dropdown-item" href="#">2039</a>
                            <a class="dropdown-item" href="#">2040</a>
                            <a class="dropdown-item" href="#">2041</a>
                            <a class="dropdown-item" href="#">2042</a>
                            <a class="dropdown-item" href="#">2043</a>
                            <a class="dropdown-item" href="#">2044</a>
                            <a class="dropdown-item" href="#">2045</a>
                            <a class="dropdown-item" href="#">2046</a>
                            <a class="dropdown-item" href="#">2047</a>
                            <a class="dropdown-item" href="#">2048</a>
                            <a class="dropdown-item" href="#">2049</a>
                            <a class="dropdown-item" href="#">2050</a>
                        </div>
                    </div>
                </div>
                <div class="calendar calendar-first" id="calendar_first">
				    <div class="calendar_weekdays"></div>
				    <div class="calendar_content"></div>
					</div>
            </div>
            
        </div>
    </div>
</div>