@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light pt-3">
        <div class="container-content mar5">
            
            @if($component=="ManVan.price_page")
            <div class="row">
            <div class="col-md-12">
                @include('components.book.price_page')
                @include('components.book.BillingModal')
                @php($next = "ManVan.billing")
                @php( $previous = "ManVan.final_calculation")
                <div class="d-flex justify-content-between py-50 button-group">
                    <a class="previous_button" href="{{route($previous)}}"  id="quote_url">
                        <button type="submit" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Previous</h5>
                        </button>
                    </a>
                    <a href="{{route($next)}}" class="next_button" id="quote_url">
                        <button type="submit" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Next</h5>
                        </button>
                    </a>
                </div>
            </div>
            @else
            <div class="main-grid">
            <div class="col-md-72  house_type">
                <div class="d-flex justify-content-start align-items-center  display-none-sm">
                    <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 210px;">
                    <div class="ml-2 header_text">
                        <h2 class="mb-0">Final Step-Tell us what you're moving</h2>
                        <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
                    </div>                      
                </div>
                @if($component=="ManVan.final_calculation")
                    <form class="needs-validation" novalidate method="post" action="">
                        @csrf
                @endif
                @switch($component)
                    @case('ManVan')
                        @include('components.book.cart')
                        @include('components.book.GetPriceModal', ['url'=> 'ManVan.get_email'])
                        @php($next = "ManVan.hours_need")
                        @php( $previous = "main")
                        @break
                    @case('ManVan.hours_need')
                        @include('components.book.hour')
                        @php($next = "ManVan.men")
                        @php( $previous = "ManVan")
                        @break
                    @case('ManVan.men')
                        @include('components.book.men')
                        @php($next = "ManVan.select_car")
                        @php( $previous = "ManVan.hours_need")
                        @break
                    @case('ManVan.select_car')
                        @include('components.book.select_car')
                        @php($next = "ManVan.number_of_car")
                        @php( $previous = "ManVan.men")
                        @break
                    @case('ManVan.number_of_car')
                        @include('components.book.number_of_car')
                        @php($next = "ManVan.stairs")
                        @php( $previous = "ManVan.select_car")
                        @break
                    @case('ManVan.stairs')
                        @include('components.book.stairs')
                        @php($next = "ManVan.congestion")
                        @php( $previous = "ManVan.number_of_car")
                        @break
                    @case('ManVan.congestion')
                        @include('components.book.congestion')
                        @php($next = "ManVan.pick_date")
                        @php( $previous = "ManVan.stairs")
                        @break
                    @case('ManVan.pick_date')
                        @include('components.book.pick_date')
                        @php($next = "ManVan.arrange_time")
                        @php( $previous = "ManVan.congestion")
                        @break
                    @case('ManVan.arrange_time')
                        @include('components.book.arrange_time')
                        @php($next = "ManVan.final_calculation")
                        @php( $previous = "ManVan.pick_date")
                        @break
                    @case('ManVan.final_calculation')
                        @include('components.book.final_calculation')
                        @php($next = "ManVan.price_page")
                        @php( $previous = "ManVan.arrange_time")
                        @break
                    @case('ManVan.billing')
                        @include('components.book.final_calculation')
                        @include('components.book.BillingModal')
                        @php($next = "main")
                        @php( $previous = "ManVan.price_page")
                        @break
                    @default
                        
                @endswitch

                <div class="d-flex justify-content-between py-50 button-group">
                    <a class="previous_button" href="{{route($previous)}}"  id="quote_url">
                        <button type="submit" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Previous</h5>
                        </button>
                    </a>
                    <a href="{{route($next)}}" class="next_button" id="quote_url">
                        <button type="submit" class="btn py-3 px-5 bg-primary-light text-white" style="border-radius: 0.5rem;">
                            <h5 class="mb-0">Next</h5>
                        </button>
                    </a>
                </div>
                @if($component=="ManVan.final_calculation")
                    </form>
                @endif
            </div>
            <div class="col-md-28  header_text_right display-none-sm ">
                <div class="d-flex justify-content-end align-items-center pt-3" style="height:179px;">
                    <div>
                        <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                        <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                        <h6 >Quote Ref: 1887654</h6>
                    </div>                    
                </div>
                @if($component=="ManVan.final_calculation" || $component=="ManVan.billing" )  
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
                                <span>{{$result->from_stair}} to {{$result->to_stair}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Congestion Zone</p>
                                <span>{{$result->congestion ? "Yes" : "No"}} </span>
                            </div>
                            @if(isset($result->packing_service))
                            <div class="content pb-3">
                                <p>Packaging Service</p>
                                <span>{{$result->packing_service ? "Yes" : "No"}} </span>
                            </div>
                            @endif
                            <div class="content pb-3">
                                <p>Date</p>
                                <span>{{$result->getDateInfo()}}</span>
                            </div>
                            <div class="content pb-3">
                                <p>Start Time</p>
                                <span>{{$result->arrange_hour}}:{{$result->arrange_minute}}</span>
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
                    <div class="cart_panel shadow-effect p-4" style="background-color: white;  border-radius: 0rem 3rem 3rem 0rem;"> 
                        <h5 class="btn-text-primary-light">My List (<span class="cart_amount">0</span>)</h5>
                        <div class="carts">
                    </div>
                @endif
                </div>                
            </div>
            @endif
            <div class="display-sm">
                <div class="bottom-buttons">
                    <div class="turst_img">
                        <img src="{{asset('images/trustpilot.png')}}" alt="">
                    </div>
                    <div class="view_item">
                        <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.588" height="16.589" viewBox="0 0 16.588 16.589">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rectangle_834" data-name="Rectangle 834" width="16.588" height="16.589" fill="#fff"/>
                              </clipPath>
                            </defs>
                            <g id="Group_869" data-name="Group 869" clip-path="url(#clip-path)">
                              <path id="Path_353" data-name="Path 353" d="M16.588,8.283A8.295,8.295,0,1,1,8,0a8.284,8.284,0,0,1,8.592,8.278m-8.2,7.275A7.262,7.262,0,1,0,1.032,8.323a7.263,7.263,0,0,0,7.357,7.234" transform="translate(0 0.001)" fill="#fff"/>
                              <path id="Path_354" data-name="Path 354" d="M49.465,53.235c-.152.138-.307.272-.455.414a.281.281,0,0,1-.392.038.289.289,0,0,1-.079-.309,2.7,2.7,0,0,1,.568-1.129,2.8,2.8,0,0,1,.824-.723,1.369,1.369,0,0,1,1.077-.168,1.191,1.191,0,0,1,.859,1.16q0,1.715,0,3.431v.114l.025.016c.129-.113.255-.229.387-.339a.689.689,0,0,1,.225-.157.252.252,0,0,1,.32.3,2.428,2.428,0,0,1-.163.519A3.058,3.058,0,0,1,51.5,57.749a1.484,1.484,0,0,1-.96.252,1.184,1.184,0,0,1-1.044-1.159q0-1.766,0-3.531v-.054l-.03-.023" transform="translate(-42.383 -44.815)" fill="#fff"/>
                              <path id="Path_355" data-name="Path 355" d="M53.234,28.081a1.254,1.254,0,1,1,1.236,1.256,1.249,1.249,0,0,1-1.236-1.256" transform="translate(-46.495 -23.431)" fill="#fff"/>
                            </g>
                          </svg>
                          </i>
                        View Item
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end section 1 --------------->

    <!--------------- section 2 --------------->
    <div class="container-content book_now_btn  display-none-sm" style="margin-bottom: -104px;">
        <div class="moving-home bg-white position-relative p-5">
            <div class="d-flex justify-content-center align-items-center ">
                <div>
                    <h1>Your Journey Begins With Us!</h1>
                </div>   
                <div style="padding-left:30px">
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
    @if($component!='ManVan')
$(document).ready(function(){
    var lists =  @json($result->cart_list)  
    if(lists!=null){

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
                $(this).parent().children('.amount').text(amount+1)
                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount+1);
            })
            index++
        })
        $(".cart_panel .cart_amount").text(total_carts);
    }
})
@endif
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
            url: '{{ route('ManVan.cart.update.cart')}}',
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
                $(this).parent().children('.operation').children('.amount').text(amount+1)
            } 
            else
                iteration++;

            if(iteration==item_count){
            var content = '<div class="title">'+title+'</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div>';
            var element = $('<div class="cart '+ (iteration+1) +' ">').html(content);
            $('.cart_panel .carts').append(element);
            $(".cart_panel .carts .cart."+ (iteration+1) +" .operation .minus").click(function(e){
                var amount = parseInt($(this).parent().children('.amount').text());
                if(amount==1)
                    $(this).parent().parent().remove();
                
                else
                    $(this).parent().children('.amount').text(amount-1)
                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount-1);
            })
        
            $(".cart_panel .carts .cart."+ (iteration+1) +" .operation .plus").click(function(){
                var amount = parseInt($(this).parent().children('.amount').text());
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
            
            $(".cart_panel .carts .cart.1 .operation .minus").click(function(e){
                var amount = parseInt($(this).parent().children('.amount').text());

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

                var cart_amount = parseInt($(".cart_panel .cart_amount").text());
                $(".cart_panel .cart_amount").text(cart_amount+1);
            })
        }
        var cart_amount = parseInt($(".cart_panel .cart_amount").text());
        $(".cart_panel .cart_amount").text(cart_amount+1);
    }

    </script>
@if($component=="ManVan")
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


    $('.next_button').click((event)=>{
        event.preventDefault()
        $('button.modal_button').trigger('click');

    })
    $('.input-block input[type="email"]').on('change', function(){
        var email = $(this).val()
        if(email.length>0)
            $(this).addClass('active')
        else
            $(this).removeClass('active')
    })

    $('.needs-validation').submit(function(event){
        var cart_list = {};
        $('.cart_panel .carts .cart').each(function(){
            var key = $(this).children('div.title').text()
            var value = $(this).children('div.operation').children('.amount').text()

            cart_list[key]=value
        })
        cart_list = JSON.stringify(cart_list)
        var pick_address = localStorage.getItem('from');
        var delivery_address = localStorage.getItem('to');
        $(this).append($('<input>').attr('type', 'hidden').attr('name', 'pickup_address').val(pick_address));
        $(this).append($('<input>').attr('type', 'hidden').attr('name', 'delivery_address').val(delivery_address));
        $(this).append($('<input>').attr('type', 'hidden').attr('name', 'cart_list').val(cart_list));
    })

</script>  
@endif
@if($component=="ManVan.hours_need")
<script>
    function update_time(hour,min){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('ManVan.cart.update.time')}}',
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
        if(hour>0){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.minute i.up').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())+30
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        hour = hour+ Math.floor(minute/60)

        if(hour<24)
        {
            hour = hour+ Math.floor(minute/60)
            minute = minute%60
            $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
            $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
            update_time(hour,minute%60)
        }
    })
    $('.minute i.down').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        var minute = parseInt($(this).parent().children('div').children('h1').text())-30
        if(hour>0){
            hour = hour+ Math.floor(minute/60)
            minute = (minute+60)%60
            $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
            $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
            update_time(hour,minute)
        }
    })
</script>
@endif
@if($component=="ManVan.select_car")
<script>
    function update_car(car){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('ManVan.cart.update.car')}}',
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
@if($component=='ManVan.price_page')
<script>

$(document).ready(function(){
    $('.next_button').click(function(e){
        e.preventDefault()
        $('button.modal_button').trigger('click');

    })
})

</script>

@endif
@if($component=="ManVan.men")
<script>
 $(document).ready(function(){
    var men = $('.number_panel h1').text()
    if(men==0)
        $('.number_panel p').css('display','block')
 })
    function update_men(men){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('ManVan.cart.update.men')}}',
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
        if(men<5){
            $(this).parent().parent().children('div.number_panel').children('h1').text(men);
            update_men(men)
        }
        if(men>0)
            $('.number_panel p').css('display','none')
    })

    $('.men_count i.down').click(function(){
        var men = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())-1
        if(men>-1){
            $(this).parent().parent().children('div.number_panel').children('h1').text(men);
            update_men(men)
        }
        if(men==0)
            $('.number_panel p').css('display','block')
    })
</script>
@endif

@if($component=="ManVan.number_of_car")
<script>
    function update_number_of_car(count){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('ManVan.cart.update.number_of_car')}}',
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
        if(count<5){
            $(this).parent().parent().children('div.number_panel').children('h1').text(count);
            update_number_of_car(count)
        }
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

@if($component=='ManVan.stairs')
<script>
function update_stair(direction, value){
    var csrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        url: '{{ route('ManVan.cart.update.stair')}}',
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
@if($component=='ManVan.congestion')
<script>
function update_congestion(value){
        var csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '{{ route('ManVan.cart.update.congestion')}}',
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

@if($component=="ManVan.pick_date")
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
            url: '{{ route('ManVan.cart.update.pick_date')}}',
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
@if($component=="ManVan.arrange_time")
<script>
function update_time(hour,min){
    var csrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        url: '{{ route('ManVan.cart.update.arrange_hour')}}',
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
        if(hour<21){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.hour i.down').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())-1
        var minute = parseInt($(this).parent().parent().children('div.minute').children('div').children('h1').text())
        if(hour>7){
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
            update_time(hour,minute)
        }
    })
    $('.minute i.up').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())+30
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        if(hour<20)
        {
            hour = hour+ Math.floor(minute/60)
            minute = minute%60
            $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
            $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
            update_time(hour,minute%60)
        }
    })
    $('.minute i.down').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.hour').children('div').children('h1').text())
        var minute = parseInt($(this).parent().children('div').children('h1').text())-30
        if(hour>8){
            hour = hour+ Math.floor(minute/60)
            minute = (minute+60)%60
            $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
            $(this).parent().parent().children('div.hour').children('div').children('h1').text(hour.toString().padStart(2, '0'))
            update_time(hour,minute)
        }
    })
</script>
@endif
@if($component=="ManVan.billing")
<script>
$(document).ready(function(){
    $('button.modal_button').trigger('click');
})
</script>
@endif
@if($component=="ManVan.final_calculation" || $component=="ManVan.billing" )
<script>

    $('#pickup_use').change(function() {
        var name = $('#name').val()
        var phone = $('#phone').val()
        if ($(this).is(':checked')) {
            $('#pickup_contact_name').val(name)
            $('#pickup_phone').val(phone)
        } else {
            $('#pickup_contact_name').val('')
            $('#pickup_phone').val('')
        }
    });
    $('#deliver_info').change(function() {
        var name = $('#name').val()
        var phone = $('#phone').val()
        if ($(this).is(':checked')) {
            $('#delivery_name').val(name)
            $('#delivery_phone').val(phone)
        } else {
            $('#delivery_name').val('')
            $('#delivery_phone').val('')
        }
    });

    $('#name, #phone').on('keyup',function(){
        var name = $('#name').val()
        var phone = $('#phone').val()
        if(name.length>0 && phone.length>0){
            $('.useContact').show()
        }
        else{
            $('.useContact').hide()
        }
    })


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
<script>

(function () {
'use strict'
const forms = document.querySelectorAll('.needs-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()

</script>

@endsection