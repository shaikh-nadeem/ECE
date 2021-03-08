<header>
    <div class="top-header">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <img src="{{asset('assets/img/logo.png')}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Text">
                    <p>Solving your reliever problems</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="image">
                    <img src="{{asset('assets/img/img-1_1.png')}}">
                </div>
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
                        <a class="nav-link <?php //if($currentPage =='home'){echo 'active';}?>" href="{{route('frontend-home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php //if($currentPage =='faq'){echo 'active';}?>" href="{{route('frontend-faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php //if($currentPage =='hirenow'){echo 'active';}?>" href="">Hire Now!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php //if($currentPage =='contact'){echo 'active';}?>" href="{{route('frontend-contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="menu-item" id="menu">
                <a href="{{route('frontend-home')}}" class="<?php //if($currentPage =='home'){echo 'active';}?>">Home</a>
                <a href="{{route('frontend-faq')}}" class=" <?php //if($currentPage =='faq'){echo 'active';}?>">FAQ</a>
                <a href="" class="<?php //if($currentPage =='hirenow'){echo 'active';}?>">Hire Now!</a>
                <a href="{{route('frontend-contact')}}" class="<?php //if($currentPage =='contact'){echo 'active';}?>">Contact</a>
                <a href="">Login</a>

            </div>
        </div>
    </div>
</header>