<header class="header">

    <div class="header-main container">
        <div class="logo">
            <a href="#">Logo</a>
        </div>

        <div class="mobile-menu-toggle">
            <span></span>
        </div>
        <div class="menu-overlay"></div>

            <!-- Nav menu starts -->
            <nav class="nav-menu">
                <div class="close-mobile-menu">
                    <img src="{{ asset('public/assets/frontend/images/close.svg') }}" alt="Close menu">
                </div>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="{{ url('/') }}" data-toggle="sub-menu">Home</i></a>
                    </li>
                    <li class="menu-item">
                        <a href="#">About</a>
                    </li>
                    <li class="menu-item with-dropdown">
                        <a href="#" data-toggle="sub-menu">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Webdesign</a></li>
                            <li class="menu-item"><a href="#">Webhosting</a></li>
                            <li class="menu-item"><a href="#">Online Marketing</a></li>
                            <li class="menu-item"><a href="#">SEO</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">Pages</a>
                    </li>

                    <li class="menu-item nav-divider"></li>

                    <li class="menu-item">
                        @guest
                        <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Sign in</a>
                        @else 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </li>
                </ul>
            </nav>
            <!-- Nav menu ends -->
    </div>

</header>


