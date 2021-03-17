<?php $currentPage = 'contact';
include 'header.php';
include 'headermenu.php';?>
<div class="wrapper">
    <section class="secContact">
        <div class="row h-100 align-items-end">
            <div class="col-lg-6 col-md-12 contactLeft text-center h-100">
                <img src="img/contactImg.jpg" class="img-fluid">
                <div class="imgText">
                    <p>I am confident ECE<br>Teacher will exceed<br>your expectations</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 loginRight">
                <div class="formHeader">
                    <h4>Contact Us</h4>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name :">                     
                    </div>
                    <div class="form-group">
                        <select id="inputState" class="form-control">
                            <option selected>Your Region :</option>
                            <option>Northland</option>
                            <option>Auckland</option>
                            <option>Waikato</option>
                            <option>Bay of Plenty</option>
                            <option>Gisborne</option>
                            <option>Hawke's Bay</option>
                            <option>Taranaki</option>
                            <option>Whanganui-Manawatu</option>
                            <option>Wellington</option>
                            <option>Marlborough</option>
                            <option>Nelson-Tasman</option>
                            <option>West Coast</option>
                            <option>Canterbury</option>
                            <option>Otago</option>
                            <option>Southland</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Contact Number :">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email :">
                    </div>
                    <div class="form-group">
                        <select id="inputState" class="form-control">
                            <option selected>Purpose of getting in touch *</option>
                            <option>Enquiry</option>
                            <option>Feedback</option>
                            <option>Complaint</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comments"></textarea>                       
                    </div>
                    <div class="button contactBtn pl-0 pb-0">
                        <button type="primary-btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>