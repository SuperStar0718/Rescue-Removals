<header class="bg-primary-light p-3">
        <div class="d-flex justify-content-between align-items-center container-content text-white">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}">
                    <img src="{{asset('images/logo.svg')}}" alt="person" class="mr-5" style="width: 160px;">
                </a>                
                <div class="display-none-sm">
                    <div class="d-flex align-items-center">
                        <a href="{{ url('/ourservices') }}" class="text-white mr-5">Our Services</a>
                        <a href="{{ url('/aboutus') }}" class="text-white mr-5">About Us</a>
                        <a href="{{ url('/contactus') }}" class="text-white mr-5">Contact</a>
                    </div>
                </div>
            </div>
            <div class="display-none-sm">
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
</header>