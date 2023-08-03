@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-3">
        <div class="container-content">
        <div class="row">
            
            @if($component=="eBay.price_page")
            <div class="col-md-12">
                @include('components.book.price_page')
                @php($next = "eBay.billing")
                @php( $previous = "eBay.final_calculation")
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
            <div class="col-md-9">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 150px;">
                    <div class="ml-2">
                        <h2 class="mb-0"><i>Final Step-Tell us what you're moving</i></h2>
                        <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
                    </div>                      
                </div>
                @switch($component)
                    @case('eBay')
                        @include('components.book.cart')
                        @php($next = "eBay.hours_need")
                        @php( $previous = "main")
                        @break
                    @case('eBay.hours_need')
                        @include('components.book.hour')
                        @php($next = "eBay.men")
                        @php( $previous = "eBay")
                        @break
                    @case('eBay.men')
                        @include('components.book.men')
                        @php($next = "eBay.select_car")
                        @php( $previous = "eBay.hours_need")
                        @break
                    @case('eBay.select_car')
                        @include('components.book.select_car')
                        @php($next = "eBay.number_of_car")
                        @php( $previous = "eBay.men")
                        @break
                    @case('eBay.number_of_car')
                        @include('components.book.number_of_car')
                        @php($next = "eBay.stairs")
                        @php( $previous = "eBay.select_car")
                        @break
                    @case('eBay.stairs')
                        @include('components.book.stairs')
                        @php($next = "eBay.congestion")
                        @php( $previous = "eBay.number_of_car")
                        @break
                    @case('eBay.congestion')
                        @include('components.book.congestion')
                        @php($next = "eBay.pick_date")
                        @php( $previous = "eBay.stairs")
                        @break
                    @case('eBay.pick_date')
                        @include('components.book.pick_date')
                        @php($next = "eBay.arrange_time")
                        @php( $previous = "eBay.congestion")
                        @break
                    @case('eBay.arrange_time')
                        @include('components.book.arrange_time')
                        @php($next = "eBay.final_calculation")
                        @php( $previous = "eBay.pick_date")
                        @break
                    @case('eBay.final_calculation')
                        @include('components.book.final_calculation')
                        @php($next = "eBay.price_page")
                        @php( $previous = "eBay.arrange_time")
                        @break
                    @case('eBay.billing')
                        @include('components.book.final_calculation')
                        @php($next = "main")
                        @php( $previous = "eBay.price_page")
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
            <div class="col-md-3">
                <div class="d-flex justify-content-end align-items-center pt-3" style="height:128px;">
                    <div>
                        <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                        <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                        <h6 >Quote Ref: 1887654</h6>
                    </div>                    
                </div>
                @if($component=="eBay.final_calculation" || $component=="eBay.billing" )  
                    <div class="map-wrapper shadow-effect">
                        <div id="googleMap">
                            <div class="mapouter">
                                <div id="gmap_canvas">
                                    
                                </div>
                            </div>
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
                                <p>Items</p>
                                <div class="d-flex flex-column">
                                @if(json_decode($result->cart_list, true)!==null)
                                    @foreach(json_decode($result->cart_list, true) as $key => $cart)
                                        <span>{{$key}}</span>
                                    @endforeach
                                @endif
                                </div>
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
                                <span>{{$result->getFromAddress()}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Drop Off Location</p>
                                <span>{{$result->getToAddress()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="extra-detail shadow-effect mt-4">
                        <p>YOU ARE COVERED WITH OUR COMPREHENSIVE PUBLIC, LIABILITY AND GOODS & TRANSIT INSURANCE.</p>
                        <p>FOR MORE INFORMATION REFER TO <a href="#">OUR TERMS AND CONDITIONS</a></p>
                    </div>
                @else
                    <div class="cart_panel shadow-effect p-4" style="background-color: white; border-radius: 0rem 3rem 3rem 0rem;"> 
                        <h5 class="btn-text-primary-light">My List(<span class="cart_amount">0</span>)</h5>
                        <div class="carts">
                    </div>
                @endif
                </div>                
            </div>
            @endif
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div class="container-content book_now_btn" style="margin-bottom: -120px;">
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
    if(lists!=""){
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
    }

})
 $(document).ready(function(){
            // Create a new Date object to get the current date and time
            const today = new Date();

            // Get the day of the week as a number (0: Sunday, 1: Monday, ..., 6: Saturday)
            const dayOfWeekNumber = today.getDay();

                        var text = $('.weekday').children('div').eq(dayOfWeekNumber-1).css('color','yellow ')
            console.log(text)

        })

    function update_cart(title, amount){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.cart')}}',
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
@if($component=="eBay")
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
@if($component=="eBay.hours_need")
<script>
    function update_time(hour,min){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.time')}}',
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
@if($component=="eBay.select_car")
<script>
    function update_car(car){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.car')}}',
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
@if($component=="eBay.men")
<script>
    function update_men(men){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.men')}}',
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

@if($component=="eBay.number_of_car")
<script>
    function update_number_of_car(count){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.number_of_car')}}',
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
        $(this).parent().parent().children('div.number_panel').children('h1').text(count);
        update_number_of_car(count)
    })

    $('.men_count i.down').click(function(){
        var count = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())-1
        if(count>0){
            $(this).parent().parent().children('div.number_panel').children('h1').text(count);
            update_number_of_car(count)
        }
    })
</script>
@endif

@if($component=='eBay.stairs')
<script>
 function update_stair(direction, value){
    var csrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        url: '{{ route('eBay.cart.update.stair')}}',
        method: 'POST',
        data: {
            direction: direction,
            value:value
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

$('.dropdown .dropdown-menu.from .dropdown-item').click(function(){
    var content = $(this).text()
    $(this).parent().parent().children('button').text(content)
    update_stair('from', content)
})
$('.dropdown .dropdown-menu.to .dropdown-item').click(function(){
    var content = $(this).text()
    $(this).parent().parent().children('button').text(content)
    update_stair('to', content)

})

$(document).ready(function(){
    var from_stair = "{{$result->from_stair}}"
    var to_stair = "{{$result->to_stair}}"
    console.log(from_stair)
    if(from_stair!="")
    $('.dropdown .dropdown-menu.from').parent().children('button').text(from_stair)
    if(to_stair!="")
    $('.dropdown .dropdown-menu.to').parent().children('button').text(to_stair)
})

</script>
@endif
@if($component=='eBay.congestion')
<script>
    function update_congestion(value){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('eBay.cart.update.congestion')}}',
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

@if($component=="eBay.pick_date")
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
            url: '{{ route('eBay.cart.update.pick_date')}}',
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
@if($component=="eBay.arrange_time")
<script>
function update_time(hour,min){
    var csrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        url: '{{ route('eBay.cart.update.arrange_hour')}}',
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
@if($component=="eBay.billing")
<script>
$(document).ready(function(){
    $('button.modal_button').trigger('click');
})
</script>
@endif

@if($component=="eBay.final_calculation")
<script>
$('div.phone_number.first button').click(function(){
    var content = " <div class='row py-3 second_phone' style='flex-direction:row-reverse;'><div class='col-6'><div class='input-block phone_number'><input type='text' name ='input-text' required ><span class='placeholder'>Phone Number</span><button>-</button></div></div></div>"
    if($('div.second_phone').length<1)
    {
        $('.booking-form').append(content)
        $('.second_phone button').click(function(){
            $(this).parent().parent().parent().remove()
        })
    }
})


function initMap() {
    var from = @json($result->from)  
    from = JSON.parse(from)
    var to = @json($result->to)  
    to = JSON.parse(to)
    var position1 = { lat: parseInt(from.lat), lng:parseInt(from.lng) };
    var position2 = { lat: parseInt(to.lat), lng:parseInt(to.lng) };

    var map = new google.maps.Map(document.getElementById("gmap_canvas"), {
      center: position1,
      zoom: 10, // Adjust the zoom level as needed
    });

    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer({
      map: map,
    });

    var request = {
      origin: position1,
      destination: position2,
      travelMode: google.maps.TravelMode.DRIVING, // You can change the travel mode (DRIVING, WALKING, etc.)
    };

    directionsService.route(request, function (response, status) {
      if (status === "OK") {
        directionsRenderer.setDirections(response);
      } else {
        console.error("Error:", status);
      }
    });
  }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdwK0YxzP31-BE703RBfLYC8WESqH9FUU&libraries=places&callback=initMap" async defer></script>
@endif


@endsection