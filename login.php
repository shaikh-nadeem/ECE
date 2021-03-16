<?php $currentPage = 'login';
include 'header.php';
include 'headermenu.php';?>
<div class="wrapper">
    <section class="secLogin">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12 contactLeft text-center h-100">
                <img src="img/contactImg.jpg" class="img-fluid">
                <div class="imgText">
                    <p>Log in to your own personal dashboard, if you're having trouble, <a href="contact.php">Click here</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 loginRight">
                <div class="formHeader">
                     <h4>Log in</h4>
                     <p>New to ECE Teacher?  <a href="#userSelection" data-toggle="modal">Register Now</a></p>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username :">                     
                    </div>
                   
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Password :">
                    </div>
                    <div class="form-group">
                        <a href="forgot-password.php" class="textForgot">Forgot your password?</a>   
                    </div>    
                    
                    <div class="button contactBtn pl-0">
                        <button type="primary-btn">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>