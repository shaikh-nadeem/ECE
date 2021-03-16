<header>
    <div class="topHeader hide">
        <div class="logo">
            <img src="img/logo.png">
        </div>
        <div class="headerText">
            <p>Solving your <br>reliever problems</p>
        </div>
        <div class="topHeaderRight">
            <div class="mb-img">
                <img src="img/img.png">
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
                        <a class="nav-link  <?php if($currentPage =='home'){echo 'active';}?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage =='faq'){echo 'active';}?>" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage =='hirenow'){echo 'active';}?>" href="hire-now.php">Hire Now!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage =='contact'){echo 'active';}?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link <?php if($currentPage =='login'){echo 'active';}?>" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="menu-item" id="menu">
            <a href="index.php" class="<?php if($currentPage =='home'){echo 'active';}?>">Home</a>
            <a href="faq.php" class=" <?php if($currentPage =='faq'){echo 'active';}?>">FAQ</a>
            <a href="hire-now.php" class="<?php if($currentPage =='hire-now'){echo 'active';}?>">Hire Now!</a>
            <a href="contact.php" class="<?php if($currentPage =='contact'){echo 'active';}?>">Contact</a>
            <a href="login.php" class="<?php if($currentPage =='login'){echo 'active';}?>">Login</a>
        </div>
    </div>
</header>