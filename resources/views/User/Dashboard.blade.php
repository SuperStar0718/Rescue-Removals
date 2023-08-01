@extends('layouts.main_layout')
    
@section('header')
    @include('components.header')
@endsection

@section('content')
<div class="container">
    <div class="header_section">
        <div class="title">
            Welcome, Joanna Spania!
        </div>
        <div class="context">
            Your Dashboard
        </div>
    </div>
</div>
<div class="row container">
    <div class="left_sidebar">
        <div class="menu active">
            <div class="icon">
                <img src="{{asset('images/User/dashboard.png')}}" alt="">
            </div>
            <div class="menu_text">
                Dashboard
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/order-history.png')}}" alt="">
            </div>
            <div class="menu_text">
                Order History
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/upcoming.png')}}" alt="">
            </div>
            <div class="menu_text">
                Upcoming
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/quotes.png')}}" alt="">
            </div>
            <div class="menu_text">
                Quotes
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/settings.png')}}" alt="">
            </div>
            <div class="menu_text">
                Settings
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/chat.png')}}" alt="">
            </div>
            <div class="menu_text">
                Chat
            </div>
        </div>
        <div class="menu">
            <div class="icon">
                <img src="{{asset('images/User/logout.png')}}" alt="">
            </div>
            <div class="menu_text">
                Logout
            </div>
        </div>
    </div>
    <div class="main_content">
        <div class="row">
            <div class="chart col-md-7">

            </div>
            <div class="percentage">

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