@extends('layouts.main_layout')

@section('style')
<link href="{{asset('css/admin.css')}}" rel="stylesheet">
@endsection

@section('header')
    @include('components.header')
@endsection

@section('content')
<div class="container admin_panel">
    <div class="header_section">
        <div class="title">
            Welcome, Joanna Spania!
        </div>
        <div class="context">
            Your Dashboard
        </div>
    </div>
    <div class="grid_main">
        @include('components.Admin.LeftSidebar')
        <div class="main_content">
            @switch($page)
                @case('completed')
                    @include('components.Admin.Completed')
                    @break
                @case('upcoming')
                    @include('components.Admin.Upcoming')
                    @break
                @case('uncompleted')
                    @include('components.Admin.Uncompleted')
                    @break
                @case('settings')
                    @include('components.Admin.Settings')
                    @break
                @case('chat')
                    @include('components.Admin.Chat')
                    @break
                @default                    
                    <div class="chart_context">
                        <div class="chart">
                            <div class="row">
                                <div class="col-md-3 statistics">
                                    <div class="d-flex flex-row h-100">
                                        <div class="title vertical">
                                            STATISTICS
                                        </div>
                                        <div class="content">
                                            <div class="item">
                                                <div class="title">
                                                    Total Spend
                                                </div>
                                                <div class="value">
                                                    $15,657.00
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="title">
                                                    Total Spend
                                                </div>
                                                <div class="value">
                                                    $15,657.00
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="title">
                                                    Total Spend
                                                </div>
                                                <div class="value">
                                                    $15,657.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 chart_panel">
                                </div>
                            </div>
                            
                        </div>
                        <div class="percentage ">
                            <div class="inner">
                                <div class="percent_digit">
                                    10%
                                </div>
                                <div class="text_percent">
                                    off your next move
                                </div>
                                <div class="text_content">
                                    Enter <span>savememoney</span> <br>
                                    at checkout
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row order">
                        <div class="row category_title">
                            <div class="context_title">
                                Order History
                            </div>
                            <div class="view_all green" onclick="window.location.assign('{{route('completed')}}')">View All</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="item">
                                        <div class="header green">
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
                                                <div class="status green">
                                                    Completed
                                                </div>
                                                <img src="{{asset('images/Admin/green.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="row order">
                        <div class="row category_title">
                            <div class="context_title">
                                Upcoming Moves
                            </div>
                            <div class="view_all pink"  onclick="window.location.assign('{{route('upcoming')}}')">View All</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="item">
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
                    <div class="row order">
                        <div class="row category_title">
                            <div class="context_title">
                                Quotes
                            </div>
                            <div class="view_all purple"  onclick="window.location.assign('{{route('uncompleted')}}')">View All</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="item">
                                        <div class="header purple">
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
                                                <div class="status purple">
                                                    Continue Booking
                                                </div>
                                                <img src="{{asset('images/Admin/purple.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
            @endswitch
        </div>
        
    </div>
</div>
<div class="container-content book_now_btn" style="margin-bottom: -120px;">
    <div class="moving-home bg-white position-relative p-5">
        <div class="row book-now">
                <div class="d-flex justify-content-start">
                    <div class="">
                        <h3  class="btn-text-primary-light">Ready to Move?</h3>
                        <p>
                            Fill in our simple form and let
                            us take care of the rest.
                        </p>
                    </div>
                </div>
                <div class="text-center mt-1">
                    <button type="button" class="btn bg-primary-light text-white px-5 py-4">
                        <h5 class="mb-0">Book Now</h5>
                    </button>
                </div>
        </div>
    </div>
</div>
@endsection
   
@section('footer')
    @include('components.footer')    
@endsection

@section('script')
<script>
</script>
@endsection