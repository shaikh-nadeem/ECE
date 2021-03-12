@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Home page | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper">
    <section class="secContact">
        <div class="row">
            <div class="col-lg-6 col-md-12 contactLeft">
                <div class="imgText">
                    <p>I am confident ECE<br>Teacher will exceed<br>your expectations</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 contactRight">
                <form class="contact_form" id="contact_form" action="http://eceteacher.betadelivery.com/send-contact" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *">                     
                    </div>
                    <div class="form-group">
                        <select id="inputState region" name="region" class="form-control">
                            <option value="" selected>Your region *</option>
                            <option value="AU">AU</option>
                            <option value="NZ">NZ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text"  name="contact_number" id="contact_number"  class="form-control" placeholder="Your Contact Number *">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="email" id="email"  class="form-control" placeholder="Your Email *">
                    </div>
                    <div class="form-group">
                        <select id="inputState purpose" name="purpose" class="form-control">
                            <option value="" selected>Purpose of getting in-touch *</option>
                            <option value="compaint">Complaint</option>
                            <option value="suggestion">Suggestion</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control comments" name="comments" id="exampleFormControlTextarea1" rows="3" placeholder="Comments *"></textarea>                       
                    </div>
                    <div class="button contactBtn pl-0">
                        <div class="alert-success"></div>
                        <div class="alert-danger"></div>
                        <button class="primary-btn sendNow" id="sendNow" type="submit">Send</button>
                    </div>
                    <div class="contactmess"></div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection