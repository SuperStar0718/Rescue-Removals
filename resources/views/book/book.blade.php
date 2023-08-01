@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')

    <!--------------- section 1 --------------->
    <div class="bg-warning-light py-3">
        <div class="container-content">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{asset('images/book-courier.png')}}" alt="courier" style="width: 150px;">
                    <div class="ml-2">
                        <h2 class="mb-0"><i>Final Step-Tell us what you're moving</i></h2>
                        <h6>Not 100% sure what you’re moving yet? Changing items later is easy!</h6>
                    </div>                      
                </div>
                @switch($component)
                    @case('cart')
                        @include('components.book.cart')
                        @php($next = "hours_need")
                        @php( $previous = "main")
                        @break
                    @case('need_hours')
                        @include('components.book.hour')
                        @php($next = "men")
                        @php( $previous = "cart")
                        @break
                    @case('men')
                        @include('components.book.men')
                        @php($next = "select_car")
                        @php( $previous = "hours_need")
                        @break
                    @case('select_car')
                        @include('components.book.select_car')
                        @php($next = "main")
                        @php( $previous = "men")
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
                <div class="d-flex justify-content-end align-items-center pt-3">
                    <div>
                        <h6 class="mb-0">Prefer to get a price over the phone?</h6>
                        <h1 class="btn-text-primary-light mb-0">0208 090 6151</h1>
                        <h6 >Quote Ref: 1887654</h6>
                    </div>                    
                </div>
                <div class="cart_panel shadow-effect my-3 p-4" style="background-color: white; border-radius: 0rem 2rem 2rem 0rem;">   
                    <h5 class="btn-text-primary-light">My List(<span class="cart_amount">0</span>)</h5>
                    <div class="carts">
                        @if($component!="cart")
                          <div class="cart 1"><div class="title">6 Seater Dining Table &amp; Chairs</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div></div><div class="cart 2 "><div class="title">Medium Box</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div></div><div class="cart 3 "><div class="title">Large Television/TV (Greater than 40")</div><div class="operation"><div class="minus">-</div><div class="amount">1</div><div class="plus">+</div></div></div>
                        @endif
                    </div>
                </div>                
            </div>
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
@if($component=="cart")
<script>
    $(".removals_items li.dropdown-item").click(function(){
  // action goes here!!
        var title = $(this).find('span').text();
        var item_count = $(".cart_panel .carts").find('.title').length;
        console.log(item_count);
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
    });

 
    

</script>  
@endif

@if($component=="need_hours")
<script>
    $('.hour i.up').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())+1
        $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
    })
    $('.hour i.down').click(function(){
        var hour = parseInt($(this).parent().children('div').children('h1').text())-1
        if(hour>-1)
            $(this).parent().children('div').children('h1').text(hour.toString().padStart(2, '0'));
    })
    $('.minute i.up').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())+1
        $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
    })
    $('.minute i.down').click(function(){
        var minute = parseInt($(this).parent().children('div').children('h1').text())-1
        if(minute>-1)
            $(this).parent().children('div').children('h1').text(minute.toString().padStart(2, '0'));
    })
</script>
@endif
@if($component=="men")
<script>
    $('.men_count i.up').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())
        $(this).parent().parent().children('div.number_panel').children('h1').text(hour+1);
    })

    $('.men_count i.down').click(function(){
        var hour = parseInt($(this).parent().parent().children('div.number_panel').children('h1').text())
        if(hour>0)
            $(this).parent().parent().children('div.number_panel').children('h1').text(hour-1);
    })
</script>
@endif

@endsection