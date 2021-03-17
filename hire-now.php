<?php $currentPage = 'hire-now';
include 'header.php';
include 'headermenu.php';?>
<div class="wrapper">
    <section class="secHire">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12 contactLeft text-center h-100">
                <img src="img/contactImg.jpg" class="img-fluid">
                <div class="imgText">
                    <p>You are 2 minutes away from accessing quality relievers like me!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 loginRight hireRight">
                <h6>If you are already registered, <a href="login.php">LOGIN</a> to access the reliever database</h6>
                <form class="hireForm">
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Company Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Company Legal Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Trading Name">                     
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Centre Address">
                        </div>
                        <div class="form-group">
                            <select id="inputState" class="form-control">
                            <option selected> Region :</option>
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
                            <input type="text" class="form-control" placeholder="Head Office Address (If Different)">
                        </div>                    
                    </div>
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Centre Manager Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number">                     
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>  
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Owner's Details (If Different)</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number">                     
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>   
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Billing Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Invoices made out to:">                     
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Invoices sent to (email)">                     
                        </div>
                    </div> 
                    <div class="button contactBtn pl-0">
                        <button type="button"  data-toggle="modal" data-target="#termsModal">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>