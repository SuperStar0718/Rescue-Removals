@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-3">
        <div class="container-content">
        <div class="row">
            
            @if($component=="OfficeRemovals.price_page")
            <div class="col-md-12">
                @include('components.book.price_page')
                @php($next = "OfficeRemovals.billing")
                @php( $previous = "OfficeRemovals.final_calculation")
                <div class="d-flex justify-content-between py-5">
                    <a class="previous_button" href="{{route($previous)}}"  id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Previous</h5>
                        </button>
                    </a>
                    <a href="{{route($next)}}" class="next_button" id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Next</h5>
                        </button>
                    </a>
                </div>
            </div>
            @else
            <div @if($component=="OfficeRemovals.final_calculation" || $component=="OfficeRemovals.billing" ) class="col-md-9" @else class="col-md-12" @endif>
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 150px;">
                    <div class="ml-2">
                        <h2 class="mb-0"><i>Final Step-Tell us what you're moving</i></h2>
                        <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
                    </div>                      
                </div>
                @switch($component)
                    @case('OfficeRemovals.hours_need')
                        @include('components.book.hour')
                        @php($next = "OfficeRemovals.men")
                        @php( $previous = "main")
                        @break
                    @case('OfficeRemovals.men')
                        @include('components.book.men')
                        @php($next = "OfficeRemovals.select_car")
                        @php( $previous = "OfficeRemovals.hours_need")
                        @break
                    @case('OfficeRemovals.select_car')
                        @include('components.book.select_car')
                        @php($next = "OfficeRemovals.number_of_car")
                        @php( $previous = "OfficeRemovals.men")
                        @break
                    @case('OfficeRemovals.number_of_car')
                        @include('components.book.number_of_car')
                        @php($next = "OfficeRemovals.stairs")
                        @php( $previous = "OfficeRemovals.select_car")
                        @break
                    @case('OfficeRemovals.stairs')
                        @include('components.book.stairs')
                        @php($next = "OfficeRemovals.congestion")
                        @php( $previous = "OfficeRemovals.number_of_car")
                        @break
                    @case('OfficeRemovals.congestion')
                        @include('components.book.congestion')
                        @php($next = "OfficeRemovals.packing_service")
                        @php( $previous = "OfficeRemovals.stairs")
                        @break
                    @case('OfficeRemovals.packing_service')
                        @include('components.book.packing_service')
                        @php($next = "OfficeRemovals.pick_date")
                        @php( $previous = "OfficeRemovals.congestion")
                        @break
                    @case('OfficeRemovals.pick_date')
                        @include('components.book.pick_date')
                        @php($next = "OfficeRemovals.arrange_time")
                        @php( $previous = "OfficeRemovals.congestion")
                        @break
                    @case('OfficeRemovals.arrange_time')
                        @include('components.book.arrange_time')
                        @php($next = "OfficeRemovals.final_calculation")
                        @php( $previous = "OfficeRemovals.pick_date")
                        @break
                    @case('OfficeRemovals.final_calculation')
                        @include('components.book.final_calculation')
                        @php($next = "OfficeRemovals.price_page")
                        @php( $previous = "OfficeRemovals.arrange_time")
                        @break
                    @case('OfficeRemovals.billing')
                        @include('components.book.final_calculation')
                        @php($next = "main")
                        @php( $previous = "OfficeRemovals.price_page")
                        @break
                    @default
                        
                @endswitch

                <div class="d-flex justify-content-between py-5">
                    <a class="previous_button" href="{{route($previous)}}"  id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Previous</h5>
                        </button>
                    </a>
                    <a href="{{route($next)}}" class="next_button" id="quote_url">
                        <button type="button" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Next</h5>
                        </button>
                    </a>
                </div>
            </div>
            @if($component=="OfficeRemovals.final_calculation" || $component=="OfficeRemovals.billing")
            <div class="col-md-3">
                <div class="d-flex justify-content-end align-items-center pt-3" style="height:128px;">
                    <div>
                        <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                        <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                        <h6 >Quote Ref: 1887654</h6>
                    </div>                    
                </div>
                    <div class="map-wrapper shadow-effect">
                        <div id="googleMap">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=300&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;border-top-left-radius:3rem;}.gmap_iframe {height:300px!important;width:100%}</style></div>
                        </div>
                        <div class="map-content-wrapper">
                            <div class="content pb-3">
                                <p>Your Reference</p>
                                <span>{{$result->reference_id}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Job Type</p>
                                <span>{{$job_type}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Hours Needed</p>
                                <span>{{$result->hour}} Hours {{$result->minute}} Minutes</span>
                            </div>
                            <div class="content pb-3">
                                <p>No. & of Men</p>
                                <span>{{$result->men}} Man + Self Load</span>
                            </div>
                            <div class="content pb-3">
                                <p>No. & Type of Van</p>
                                <span>{{$result->number_of_car}} {{$van->name}} Van</span>
                            </div>
                            <div class="content pb-3">
                                <p>Floors</p>
                                <span>Ground Floor to 1st Floor</span>
                            </div>
                            <div class="content pb-3">
                                <p>Congestion Zone</p>
                                <span>{{$result->congestion ? "Yes" : "No"}} </span>
                            </div>
                            <div class="content pb-3">
                                <p>Date</p>
                                <span>{{$result->getDateInfo()}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Pick Up Location</p>
                                <span>London N22 6JD</span>
                            </div>
                            <div class="content pb-3">
                                <p>Drop Off Location</p>
                                <span>Barking IG11 0AD</span>
                            </div>
                        </div>
                    </div>
                    <div class="extra-detail shadow-effect mt-4">
                        <p>YOU ARE COVERED WITH OUR COMPREHENSIVE PUBLIC, LIABILITY AND GOODS & TRANSIT INSURANCE.</p>
                        <p>FOR MORE INFORMATION REFER TO <a href="#">OUR TERMS AND CONDITIONS</a></p>
                    </div>
                </div>                
            </div>
            @endif
            @endif
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div class="container-content mt-5" style="margin-bottom: -120px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="d-flex justify-content-center align-items-center ">
                <div>
                    <h1>Your Journey Begins With Us!</h1>
                </div>   
                <div style="width: 105px;">
                    <img src="{{asset('images/book-car.png')}}" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 2 --------------->
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection

@section('script')
<script>
$(document).ready(function(){
    var lists = @json($result->cart_list)  
    lists = JSON.parse(lists)
    console.log(lists)
    const keys = Object.keys(lists);
    console.log(keys)
    var index=1
    var total_carts=0

    keys.forEach(key=>{
        if(lists[key]=='0')
            return;
        total_carts+=parseInt(lists[key])
        var content = '<div class="title">'+key+'</div><div class="operation"><div class="minus">-</div><div class="amount">'+lists[key]+'</div><div class="plus">+</div></div>';
        var element = $('<div class="cart '+ (index) +' ">').html(content);
        $('.cart_panel .carts').append(element);
        $(".cart_panel .carts .cart."+ (index) +" .operation .minus").click(function(e){
            var amount = parseInt($(this).parent().children('.amount').text());
            var title = $(this).parent().parent().children('.title').text();
            update_cart(title, amount-1)
            if(amount==1)
                $(this).parent().parent().remove();
            
            else
                $(this).parent().children('.amount').text(amount-1)
            var cart_amount = parseInt($(".cart_panel .cart_amount").text());
            $(".cart_panel .cart_amount").text(cart_amount-1);
        })
    
        $(".cart_panel .carts .cart."+ (index) +" .operation .plus").click(function(){
            var amount = parseInt($(this).parent().children('.amount').text());
            var title = $(this).parent().parent().children('.title').text();
            update_cart(title, amount+1)
            $(this).parent().children('.amount').text(amount+1)
            var cart_amount = parseInt($(".cart_panel .cart_amount").text());
            $(".cart_panel .cart_amount").text(cart_amount+1);
        })
        index++
    })
    $(".cart_panel .cart_amount").text(total_carts);

})


    function update_cart(title, amount){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.cart')}}',
            method: 'POST',
            data: {
                title: title,
                amount: amount
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
    function add_cart(title){
        var item_count = $(".cart_panel .carts").find('.title').length;
        var iteration = 0;
        $(".cart_panel .carts").find('.title').each(function(){
            if($(this).text()== title){
                var amount = parseInt($(this).parent().children('.operation').children('.amount').text());
                update_cart (title, amount+1)
                $(this).parent().children('.operation').children('.amount').text(amount+1)
            } 
            else
                iteration++;

            if(iteration==item_count){
            var content = '<div class="title">'+title+'</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div>';
            var element = $('<div class="cart '+ (iteration+1) +' ">').html(content);
            $('.cart_panel .carts').append(element);
            update_cart (title, 1)
            $(".cart_panel .carts .cart."+ (iteration+1) +" .operation .minus").click(function(e){
                var amount = parseInt($(this).parent().children('.amount').text());
                update_cart(title, amount-1)
                if(amount==1)
                    $(this).parent().parent().remove();
                
                else
                    $(this).parent().children('.amount').text(amount-1)
                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount-1);
            })
        
            $(".cart_panel .carts .cart."+ (iteration+1) +" .operation .plus").click(function(){
                var amount = parseInt($(this).parent().children('.amount').text());
                update_cart(title, amount+1)
                $(this).parent().children('.amount').text(amount+1)
                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount+1);
            })


            }
        });
        if(item_count==0)
        {
            var content = '<div class="title">'+title+'</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div>';
            var element = $('<div class="cart '+ 1 +'">').html(content);
            $('.cart_panel .carts').append(element);
            update_cart (title, 1)
            
            $(".cart_panel .carts .cart.1 .operation .minus").click(function(e){
                var amount = parseInt($(this).parent().children('.amount').text());
                update_cart(title, amount-1)

                if(amount==1)
                    $(this).parent().parent().remove();
                
                else
                    $(this).parent().children('.amount').text(amount-1)
                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount-1);
            })
        
            $(".cart_panel .carts .cart.1 .operation .plus").click(function(){
                var amount = parseInt($(this).parent().children('.amount').text());
                $(this).parent().children('.amount').text(amount+1)
                update_cart(title, amount+1)

                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount+1);
            })
        }
        var cart_amount = parseInt($(".cart_panel .cart_amount").text());
        $(".cart_panel .cart_amount").text(cart_amount+1);
    }

    </script>
@if($component=="OfficeRemovals")
<script>
    $(".removals_items li.dropdown-item").click(function(){
        var title = $(this).find('span').text();
        add_cart(title);
    });

    $(".cart_input").on("keypress", function(event){
        if(event.keyCode===13 || event.which===13){
            var value = $(this).val();
            add_cart(value)
            $(this).val('');
        }
    })
</script>  
@endif
@if($component=="OfficeRemovals.hours_need")
<script>
    function update_time(hour,min){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.time')}}',
            method: 'POST',
            data: {
                hour: hour,
                min: min
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
    $('.hour i.up').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())+1
        var minute = parseInt($(this).parent().parent().children('div.minute').children('div').children('h1').text())
        if(hour<25){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.hour i.down').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())-1
        var minute = parseInt($(this).parent().parent().children('div.minute').children('div').children('h1').text())
        if(hour>-1){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.minute i.up').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())+30
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        hour = hour+ Math.floor(minute/60)
        minute = minute%60
        $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
        $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
        update_time(hour,minute%60)
    })
    $('.minute i.down').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        var minute = parseInt($(this).parent().children('div').children('h1').text())-30
        hour = hour+ Math.floor(minute/60)
        minute = (minute+60)%60
        $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
        $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
        update_time(hour,minute)
    })
</script>
@endif
@if($component=="OfficeRemovals.select_car")
<script>
    function update_car(car){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.car')}}',
            method: 'POST',
            data: {
                car: car,
            },
            success: function(response) {
                // Handle the successful response
                $('.car_name').text(response)
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
    $('.carousel-control-next').click(function(){
        var cars = $('.carousel-item');
        cars.each(function(index, car){
            if($(this).hasClass('active')){
                console.log((index+1)%3+1)
                update_car((index+1)%3+1)
            }

        })
    })

    $('.carousel-control-prev').click(function(){
        var cars = $('.carousel-item');
        cars.each(function(index, car){
            if($(this).hasClass('active'))
                update_car((index+2)%3+1)
        })
    })
</script>
@endif
@if($component=="OfficeRemovals.men")
<script>
    function update_men(men){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.men')}}',
            method: 'POST',
            data: {
                men: men,
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
    $('.men_count i.up').click(function(){
        var men = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())+1
        $(this).parent().parent().children('div.number_panel').children('h1').text(men.toString().padStart(2, '0'));
        update_men(men)
    })

    $('.men_count i.down').click(function(){
        var men = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())-1
        if(men>0){
            $(this).parent().parent().children('div.number_panel').children('h1').text(men.toString().padStart(2, '0'));
            update_men(men)
        }
    })
</script>
@endif

@if($component=="OfficeRemovals.number_of_car")
<script>
    function update_number_of_car(count){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.number_of_car')}}',
            method: 'POST',
            data: {
                count: count,
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
    $('.men_count i.up').click(function(){
        var count = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())+1
        $(this).parent().parent().children('div.number_panel').children('h1').text(count.toString().padStart(2, '0'));
        update_number_of_car(count)
    })

    $('.men_count i.down').click(function(){
        var count = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())-1
        if(count>0){
            $(this).parent().parent().children('div.number_panel').children('h1').text(count.toString().padStart(2, '0'));
            update_number_of_car(count)
        }
    })
</script>
@endif

@if($component=='OfficeRemovals.stairs')
<script>
$('.dropdown .dropdown-menu .dropdown-item').click(function(){
    var content = $(this).text()
    $(this).parent().parent().children('button').text(content)
})
</script>
@endif
@if($component=='OfficeRemovals.congestion')
<script>
function update_congestion(value){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.congestion')}}',
            method: 'POST',
            data: {
                congestion:value
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
$('.congestion .button').click(function(){
    $('.congestion .button').attr('style','background-color:white; color:#353EA3;')
    $(this).attr('style','background-color:#353EA3; color:white;')
    if($(this).hasClass('yes'))
        update_congestion(1)
    else
        update_congestion(0)
})
</script>
@endif

@if($component=='OfficeRemovals.packing_service')
<script>
function update_packing_service(value){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.packing_service')}}',
            method: 'POST',
            data: {
                packing_service:value
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
$('.congestion .button').click(function(){
    $('.congestion .button').attr('style','background-color:white; color:#353EA3;')
    $(this).attr('style','background-color:#353EA3; color:white;')
    if($(this).hasClass('yes'))
        update_packing_service(1)
    else
        update_packing_service(0)
})
</script>
@endif

@if($component=="OfficeRemovals.pick_date")
<script src="{{asset('js/jquery.min.js')}}"></script>    
{{-- <script src="{{asset('js/bootstrap.min.js')}}"></script>     --}}
<script src="{{asset('js/popper.js')}}"></script>    
<script>
    function update_date(year, month, day){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('OfficeRemovals.cart.update.pick_date')}}',
            method: 'POST',
            data: {
                year: year,
                month:month,
                day: day
            },
            success: function(response) {
                // Handle the successful response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    }
$(document).ready(function(){
var year = "{{$result->year}}"
var month = "{{$result->month}}"
var day = "{{$result->day}}"


})
</script>
<script src="{{asset('js/main.js')}}"></script>    
@endif
@if($component=="OfficeRemovals.arrange_time")
<script>
function update_time(hour,min){
    var csrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        url: '{{ route('OfficeRemovals.cart.update.arrange_hour')}}',
        method: 'POST',
        data: {
            hour: hour,
            min: min
        },
        success: function(response) {
            // Handle the successful response
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log(error);
        }
    });
}


    $('.hour i.up').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())+1
        var minute = parseInt($(this).parent().parent().children('div.minute').children('div').children('h1').text())
        if(hour<25){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.hour i.down').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())-1
        var minute = parseInt($(this).parent().parent().children('div.minute').children('div').children('h1').text())
        if(hour>-1){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.minute i.up').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())+30
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        hour = hour+ Math.floor(minute/60)
        minute = minute%60
        $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
        $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
        update_time(hour,minute%60)
    })
    $('.minute i.down').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        var minute = parseInt($(this).parent().children('div').children('h1').text())-30
        hour = hour+ Math.floor(minute/60)
        minute = (minute+60)%60
        $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
        $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
        update_time(hour,minute)
    })
</script>
@endif
@if($component=="OfficeRemovals.billing")
<script>
$(document).ready(function(){
    $('button.modal_button').trigger('click');
})
</script>
@endif
@endsection