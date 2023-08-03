<div class="left_sidebar">
            <div class="menu @if($page=='main') active @endif" onclick="window.location.assign('{{route('admin_panel')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/dashboard.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Dashboard
                </div>
            </div>
            <div class="menu @if($page=='completed') active @endif" onclick="window.location.assign('{{route('completed')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/order-history.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Order History
                </div>
            </div>
            <div class="menu @if($page=='upcoming') active @endif" onclick="window.location.assign('{{route('upcoming')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/upcoming.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Upcoming
                </div>
            </div>
            <div class="menu @if($page=='uncompleted') active @endif" onclick="window.location.assign('{{route('uncompleted')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/quotes.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Quotes
                </div>
            </div>
            <div class="menu @if($page=='settings') active @endif" onclick="window.location.assign('{{route('settings')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/settings.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Settings
                </div>
            </div>
            <div class="menu @if($page=='chat') active @endif" onclick="window.location.assign('{{route('chat')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/chat.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Chat
                </div>
            </div>
            <div class="menu" onclick="window.location.assign('{{route('logout')}}')">
                <div class="icon">
                    <img src="{{asset('images/Admin/logout.png')}}" alt="">
                </div>
                <div class="menu_text">
                    Logout
                </div>
            </div>
        </div>