<header>
    <div class="topHeader hide">
        <div class="logo">
            <img src="{{asset('assets/img/logo.png')}}">
        </div>
        <div class="headerText">
            <p>Solving your <br>reliever problems</p>
        </div>
        <div class="topHeaderRight">
            <div class="mb-img">
                <img src="{{asset('assets/img/img.png')}}">
            </div>
        </div>
    </div>
    <div class="menu-bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--add active class {{ (request()->is('/')) ? 'active' : '' }}-->
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('frontend-home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}" href="{{route('frontend-faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('hire-now')) ? 'active' : '' }}" href="{{route('frontend-hirenow')}}">Hire Now!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('frontend-contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{URL('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="menu-item" id="menu">
            <a href="{{route('frontend-home')}}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            <a href="{{route('frontend-faq')}}" class="{{ (request()->is('faq')) ? 'active' : '' }}">FAQ</a>
            <a href="{{route('frontend-hirenow')}}" class="{{ (request()->is('hire-now')) ? 'active' : '' }}">Hire Now!</a>
            <a href="{{route('frontend-contact')}}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
            <a href="{{URL('login')}}" class="{{ (request()->is('login')) ? 'active' : '' }}">Login</a>
        </div>
    </div>
</header>