@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Personal Detail Form | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper">
    <section class="secdetails">
        <div class="details">
                <h2>Personal Details</h2>
                <form>
                    <div class="detailFormGroup">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-sm-12 col-form-label">Name :</label>
                            <div class="col-md-10 col-sm-12">
                              <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-sm-12 col-form-label">Address :</label>
                            <div class="col-md-10 col-sm-12">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-sm-12 col-form-label"></label>
                            <div class="col-md-10 col-sm-12">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-2 col-sm-12 col-form-label">Date of Birth :</label>
                            <div class="col-md-4 col-sm-12">
                                <input type="Date" class="form-control" placeholder="">
                            </div>
                            <label for="phone" class="col-md-2 col-sm-12 col-form-label">Contact Number :</label>
                            <div class="col-md-4 col-sm-12">
                                <input type="Number" name="phone" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-sm-12 col-form-label">Email Address :</label>
                            <div class="col-md-10 col-sm-12">
                              <input type="Email" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="detailFormGroup">
                        <h3>Qualifications</h3>
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-sm-12 col-form-label">Qualification Held :</label>
                            <div class="col-md-9 col-sm-12">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-sm-12 col-form-label">Date of Issue :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="yes_no_radio" class="col-md-3 col-sm-12 col-form-label">First Aid Certificate :</label>
                            <div class="col-md-9 col-sm-12">
                                <div class="detailRadioBtns">
                                    <p><input type="radio" name="yes_no" checked>Yes</p>
                                    <p><input type="radio" name="yes_no">No</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-sm-12 col-form-label">First Aid Expiry :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="detailFormGroup">
                        <h3>Payroll Information</h3>

                        <div class="form-group row">
                            <label for="acname" class="col-md-3 col-sm-12 col-form-label">Account Name :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="text" class="form-control" id="acname" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="acnumber" class="col-md-3 col-sm-12 col-form-label">Bank Account Number :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="Number" class="form-control" id="acnumber" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="txcode" class="col-md-2 col-sm-12 col-form-label">Tax Code :</label>
                            <div class="col-md-2 col-sm-12">
                              <input type="text" class="form-control" id="txcode" placeholder="">
                            </div>
                            <label for="wt" class="col-md-2 col-sm-12 col-form-label label-right">WT :</label>
                            <div class="col-md-2 col-sm-12">
                              <input type="text" class="form-control" id="wt" placeholder="">
                            </div>
                            <label for="irdnumber" class="col-md-2 col-sm-12 col-form-label label-right">IRD Number :</label>
                            <div class="col-md-2 col-sm-12">
                              <input type="text" class="form-control" id="irdnumber" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emg1" class="col-md-3 col-sm-12 col-form-label">Emergency Contact Name :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="text" class="form-control" id="emg1" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emg2" class="col-md-3 col-sm-12 col-form-label">Emergency Contact Number :</label>
                            <div class="col-md-9 col-sm-12">
                              <input type="Number" class="form-control" id="emg2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="button contactBtn pl-0 pb-0">
                        <button type="primary-btn">Submit</button>
                    </div>
                </form>
        </div>
    </section>
</div>


@endsection