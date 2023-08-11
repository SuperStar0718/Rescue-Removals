<header class=" @if(Route::currentRouteName()=='main' || Route::currentRouteName()=='login' || Route::currentRouteName()=='forgot_password' || Route::currentRouteName()=='register' || Route::currentRouteName()=='service'  )  bg-primary-light  @else bg-white-mobile @endif p-3" style="margin-bottom: 0px;">
        <div class="display-none-sm d-flex justify-content-between align-items-center container-content text-white">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}">
                    <img src="{{asset('images/logo.svg')}}" alt="person" class="mr-5" style="width: 160px;">
                </a>                
                <div class="header-sm">
                    <div class="d-flex align-items-center">
                        <a href="{{ url('/ourservices') }}" class="text-white mr-5">Our Services</a>
                        <a href="{{ url('/aboutus') }}" class="text-white mr-5">About Us</a>
                        <a href="{{ url('/contactus') }}" class="text-white mr-5">Contact</a>
                    </div>
                </div>
            </div>
            <div class="header-sm">
                <div class="d-flex align-items-center">
                    @if (Route::currentRouteName() === 'admin_panel')
                        <!-- Your content for the specific route -->
                        <div class="quote_button">
                            Get New Quote
                        </div>
                    @else
                        <div class="pointer">0208 090 6151</div>
                        <div class="pointer pl-5 login">


                            @guest
                                <a href="{{ url('/login') }}">
                                    <img src="{{asset('images/person.svg')}}" alt="person" style="width: 30px;">
                                    <div class="text-white" style="font-size: 12px;">Log In</div>
                                </a>
                            @else
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{asset('images/person.svg')}}" alt="person" style="width: 30px;">
                                    <div class="text-white" style="font-size: 12px;">Log Out</div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                                    @csrf
                                </form>
                                
                            @endguest
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @if(Route::currentRouteName()=='main' || Route::currentRouteName()=='login' || Route::currentRouteName()=='forgot_password' || Route::currentRouteName()=='register' || Route::currentRouteName()=='service'  ) 
        <div class="display-sm">
            <div class="d-flex justify-content-between">
                <label for="three-dot">
                    <div class="three-dot">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </label>
                <input type="checkbox" id="three-dot" hidden>
                <div class="call">
                    CALL
                </div>
            </div>
            <div class="menu">
                <a href="{{ url('/ourservices') }}" class="text-white">OUR SERVICES</a>
                <a href="{{ url('/aboutus') }}" class="text-white">ABOUT US</a>
                <a href="{{ url('/contactus') }}" class="text-white">CONTACT</a>
                <a href="{{ url('/login') }}" class="text-white">LOGIN</a>
            </div>
            <div class="header-logo">
                <div class="logo">
                    <img src="{{asset('images/logo.svg')}}" alt="">
                </div>
               
                <div class="logo-text">
                    Your Journey Begins With Us!
                </div>
            </div>
        </div>
            @else 
            <div class="display-sm bg-white">
                <div class="d-flex justify-content-between">
                    <label for="three-dot">
                        <div class="three-dot">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </label>
                    <input type="checkbox" id="three-dot" hidden>
                    <div class="call">
                        CALL
                    </div>
                </div>
                <div class="menu">
                    <a href="{{ url('/ourservices') }}" class="text-white">OUR SERVICES</a>
                    <a href="{{ url('/aboutus') }}" class="text-white">ABOUT US</a>
                    <a href="{{ url('/contactus') }}" class="text-white">CONTACT</a>
                    <a href="{{ url('/login') }}" class="text-white">LOGIN</a>
                </div>
                <div class="header-logo">
                    <div class="logo">
                        <img src="{{asset('images/logo_blue.svg')}}" alt="">
                    </div>
                   
                    <div class="logo-text">
                        Your Journey Begins With Us!
                    </div>
                </div>
            </div>
            @endif
</header>