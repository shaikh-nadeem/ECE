<?php $currentPage = 'forgot password';
include 'header.php';
include 'headermenu.php';?>
<div class="wrapper">
    <section class="secLogin secForgot">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12 contactLeft text-center h-100">
                <img src="img/contactImg.jpg" class="img-fluid">
                <div class="imgText">
                    <p>To Reset your password, enter your email &amp; check your INBOX or SPAM folder for instructions.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 loginRight">
                <div class="formHeader">
                     <h4>Forgot your Password?</h4>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your email:">                     
                    </div>  
                    
                    <div class="button contactBtn pl-0">
                        <button type="primary-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>