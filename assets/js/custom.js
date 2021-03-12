/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {
   
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

