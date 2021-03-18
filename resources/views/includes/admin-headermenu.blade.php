 <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Image Logo -->
                        <a href="{{route('admin-index')}}" class="logo">
                            <!-- <img src="assets/images/logo-sm.png" alt="" height="26" class="logo-small"> -->
                            <img src="{{asset('assets/admin/img/logo.png')}}" alt="" height="48" class="logo-large">
                        </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="navbar-custom">
                      <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="{{route('admin-index')}}"><span> Dashboard </span> </a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="{{route('admin-faq')}}"><span> FAQs </span> </a>
                            </li>                         

                            <li class="has-submenu">
                                <a href="{{route('admin-contact')}}"><span> Contact Request </span> </a>
                            </li>

                        </ul>
                      </div>
                    <!-- </div> -->

                    <div class="menu-extras topbar-custom">
                        <!--<p>Welcome Admin</p>-->
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    Welcome Admin
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}"><i class="ti-power-off m-r-5"></i> {{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                <!--                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}"><i class="ti-power-off m-r-5"></i> {{ __('Register') }}</a>
                                                </li>-->
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu-right" aria-labelledby="navbarDropdown" style="display: block">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        <i class="ti-power-off m-r-5"></i> {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>    
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->
</div>
                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            
        </header>