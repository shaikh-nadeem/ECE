/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {
   
    jQuery.validator.addMethod("lettersWithSingleSpace", function(value, element) {
        return this.optional(element) || /^[A-Za-z]{3,}$|^[A-Za-z]+\s+$|^([A-Za-z]{3,})+\s+([A-Za-z\s]{1,})+$/.test(value);
    }, "Enter your name");

    $.validator.addMethod( "mobile", function( value, element ) {
        return this.optional( element ) || /^[\d+](?:[0-9] ?){7,15}[\d ]{1}[0-9]$/.test( value );
    }, "Number between 7 to 15 digits");

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
                mobile : true,
                minlength:7,
                maxlength:15
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
            crossDomain:true,
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

