@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Hire Now | "}}{{ config('app.name')}}
@endsection
@section('content')

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
                <h6>If you are already registered, <a href="{{url('/login')}}">LOGIN</a> to access the reliever database</h6>
                <form class="hireForm" id="hireForm" action="{{url('/')}}" method="post">
                    @csrf
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Company Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="company_legal_name" id="company_legal_name" class="form-control" placeholder="Company Legal Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" name="company_trading_name" id="company_trading_name" class="form-control" placeholder="Company Trading Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" name="company_suburb" id="company_suburb" class="form-control" placeholder="Suburb">
                        </div>
                        <div class="form-group">
                            <input type="text" name="company_center_address" id="company_center_address" class="form-control" placeholder="Centre Address">
                        </div>
                        <div class="form-group">
                            <select name="company_region" id="company_region" class="form-control">
                                <option value="" selected> Region :</option>
                                <option value="Northland">Northland</option>
                                <option value="Auckland">Auckland</option>
                                <option value="Waikato">Waikato</option>
                                <option value="Bay of Plenty">Bay of Plenty</option>
                                <option value="Gisborne">Gisborne</option>
                                <option value="Hawke's Bay">Hawke's Bay</option>
                                <option value="Taranaki">Taranaki</option>
                                <option value="Whanganui-Manawatu">Whanganui-Manawatu</option>
                                <option value="Wellington">Wellington</option>
                                <option value="Marlborough">Marlborough</option>
                                <option value="Nelson-Tasman">Nelson-Tasman</option>
                                <option value="West Coast">West Coast</option>
                                <option value="Canterbury">Canterbury</option>
                                <option value="Otago">Otago</option>
                                <option value="Southland">Southland</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="company_office_address" id="company_office_address" class="form-control" placeholder="Head Office Address (If Different)">
                        </div>                    
                    </div>
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Centre Manager Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="manager_name" id="manager_name" class="form-control" placeholder="Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" name="manager_contact_number" id="manager_contact_number" class="form-control" placeholder="Contact Number">                     
                        </div>

                        <div class="form-group">
                            <input type="text" name="manager_email" id="manager_email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>  
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Owner's Details (If Different)</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="owner_name" id="owner_name" class="form-control" placeholder="Name">                     
                        </div>
                        <div class="form-group">
                            <input type="text" name="owner_contact_number" id="owner_contact_number" class="form-control" placeholder="Contact Number">                     
                        </div>

                        <div class="form-group">
                            <input type="text" name="owner_email" id="owner_email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>   
                    <div class="hireFormwrapper">
                        <div class="formHeading">
                            <h6>Billing Details</h6>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="" id="" class="form-control" placeholder="Invoices made out to:">                     
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="Invoices sent to (email)">                     
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

@endsection