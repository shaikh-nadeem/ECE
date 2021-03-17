<?php $currentPage = 'personal-details-form';
include 'header.php';
include 'headermenu.php';?>
<style>

</style>
<div class="wrapper">
    <section class="secdetails">
        <div class="details">
                <h2>Personal Details</h2>
                <form>
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address :</label>
                    <div class="col-sm-9">
                      <textarea id="address" name="address"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="dob" class="col-sm-3 col-form-label">Date of Birth :</label>
                    <div class="col-sm-3">
                      <input type="Date" class="form-control" id="dob" placeholder="">
                    </div>
                    <label for="phone" class="col-sm-3 col-form-label">Contact Number :</label>
                    <div class="col-sm-3">
                      <input type="Number" id="phone" name="phone" >
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email Address :</label>
                    <div class="col-sm-9">
                      <input type="Email" class="form-control" id="email" placeholder="">
                    </div>
                  </div>

                  <h3>Qualifications</h3>

                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Qualification Held :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Date of Issue :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                        <label for="yes_no_radio" class="col-sm-3 col-form-label">First Aid Certificate :</label>
                        <div class="col-sm-9">
                                <p><input type="radio" name="yes_no" checked>Yes</input></p>
                                <p><input type="radio" name="yes_no">No</input></p>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">First Aid Expiry :</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                </div>

                <h3>Payroll Information</h3>

                <div class="form-group row">
                    <label for="acname" class="col-sm-3 col-form-label">Account Name :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="acname" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="acnumber" class="col-sm-3 col-form-label">Bank Account Number :</label>
                    <div class="col-sm-9">
                      <input type="Number" class="form-control" id="acnumber" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txcode" class="col-sm-2 col-form-label">Tax Code :</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="txcode" placeholder="">
                    </div>
                    <label for="wt" class="col-sm-2 col-form-label">WT :</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="wt" placeholder="">
                    </div>
                    <label for="irdnumber" class="col-sm-2 col-form-label">IRD Number :</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="irdnumber" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="emg1" class="col-sm-3 col-form-label">Emergency Contact Name :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="emg1" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="emg2" class="col-sm-3 col-form-label">Emergency Contact Number :</label>
                    <div class="col-sm-9">
                      <input type="Number" class="form-control" id="emg2" placeholder="">
                    </div>
                </div>
                <div class="button contactBtn pl-0 pb-0">
                <button type="primary-btn">Submit</button>
                </div>

                </form>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>