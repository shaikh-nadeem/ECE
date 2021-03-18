@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Contact | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper">
    <section class="secContact">
        <div class="row h-100 align-items-end">
            <div class="col-lg-6 col-md-12 contactLeft text-center h-100">
                <img src="{{asset('assets/img/contactImg.jpg')}}" class="img-fluid">
                <div class="imgText">
                    <p>I am confident ECE<br>Teacher will exceed<br>your expectations</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 loginRight">
                <div class="formHeader">
                    <h4>Contact Us</h4>
                </div>
                <form class="contact_form" id="contact_form" action="{{url('/send-contact')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name :">                     
                    </div>
                    <div class="form-group">
                        <select id="inputState region" name="region" class="form-control">
                            <option value="" selected>Your Region :</option>
                            <option value="Northland">Northland</option>
                            <option value="Auckland">Auckland</option>
                            <option value="Waikato">Waikato</option>
                            <option value="Bay of Plenty">Bay of Plenty</option>
                            <option value="Gisborne">Gisborne</option>
                            <option value="Hawke's bay">Hawke's Bay</option>
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
                        <input type="text"  name="contact_number" id="contact_number"  class="form-control" placeholder="Your Contact Number : ">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="email" id="email"  class="form-control" placeholder="Your Email : ">
                    </div>
                    <div class="form-group">
                        <select id="inputState purpose" name="purpose" class="form-control">
                            <option value="" selected>Purpose of getting in touch </option>
                            <option value="Enquiry">Enquiry</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Compaint">Complaint</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control comments" name="comments" id="exampleFormControlTextarea1" rows="3" placeholder="Comments"></textarea>                       
                    </div>
                    <div class="button contactBtn pl-0 pb-0">
                        <button class="primary-btn sendNow" id="sendNow" type="submit">Send</button>
                    </div> 
                    <div class="alert-success"></div>
                    <div class="alert-danger"></div>
                    <div class="contactmess"></div>
                </form>
            </div>
        </div>
    </section>
</div>
<style>
    .alert-success {
    position: absolute;
    bottom: 15px;
    background: none;
    text-align: right;
    right: 50px;
}
</style>
@endsection
