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
<script>
    $(document).ready(function(){
        
        jQuery.validator.addMethod("lettersWithSingleSpace", function(value, element) {
            return this.optional(element) || /^[a-zA-Z]+$|^[a-zA-Z]+ [a-zA-Z]+$/i.test(value);
        }, "Letters and single space allowed");
    
        	$.validator.addMethod( "mobile", function( value, element ) {
    return this.optional( element ) || /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/i.test( value );
}, "The specified phone number is not valid");

        $('#contact_form').validate({
            errorClass: 'invalid-feedback',
            rules: {
                name: {
                    required: true,
                    lettersWithSingleSpace : true
                },
                region: {
                    required: true,
                },
                contact_number:{
                    required:true,
                    mobile : true
                },
                email:{
                    required:true,
                    email: true,
                },
                purpose:{
                    required:true,
                },
                comments:{
                    required:true,
                    minlength:3,
                    maxlength:500
                }
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            },
            messages: {
                name: {
                    required: "Enter Your Full Name",
                },
                region: {
                    required: "Region Field cannot be empty",
                },
                contact_number:{
                    required: "Enter Your Contact Number",
                },
                email:{
                    required:"Email field required",
                    email:"Email should be like : (test@example.com)",
                },
                purpose:{
                    required:"Purpose Field cannot be empty",
                },
                comments:{
                    required:"Enter Message",   
                }
            },
            submitHandler: function(form) {
//                $('#sendNow').attr('disabled',true);
                var form = $('#contact_form');
                var formData = form.serialize();
                $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
                $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: formData,
                dataType:'json',
                success: function(result) {
//                    $('#sendNow').attr('disabled',false);
                    $("#contact_form")[0].reset();
                    $(".alert-success").html(result.message).fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                },
                error: function(xhr, ajaxOptions, thrownError){                  
                      $(".alert-danger").html(thrownError).fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                    }
                });
            return false;
            }
        });
    });
</script>
@endsection