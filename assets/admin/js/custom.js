/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).ready(function() {   
    
//    $('a[data-toggle="tab"]').click(function (e) {
//        e.preventDefault();
//        $(this).tab('show');
//    });
//
//    $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
//        var id = $(e.target).attr("href");
//        localStorage.setItem('nav-tabs', id)
//    });
//
//    var selectedTab = localStorage.getItem('nav-tabs');
//    if (selectedTab != null) {
//        $('a[data-toggle="tab"][href="' + selectedTab + '"]').tab('show');
//    }

    $.validator.addMethod( "numberField", function( value, element ) {
        return this.optional( element ) || /^[0-9]*$/g.test( value );
    }, "Only Numbers allowed");
    
    $('.FaqView').click(function(){
        var title = $(this).data('title');
        var content = $(this).data('content');
        $("#faqTitle").html(title);
        $("#faqContent").html(content);
    });
    $('.FaqEdit').click(function(){
        var editid = $(this).data('id');
        var edittitle = $(this).data('title');
        var editcontent = $(this).data('content');
        $("#faqEditid").val(editid);
        $("#title").val(edittitle);
        $("#content").val(editcontent);
    });
    
    $('.ContactView').click(function(){
        var name = $(this).data('name');
        var region = $(this).data('region');
        var contact_number = $(this).data('contact_number');
        var email = $(this).data('email');
        var purpose = $(this).data('purpose');
        var comments = $(this).data('comments');
        $("#contactName").html(name);
        $("#contactRegion").html(region);
        $("#contactNumber").html(contact_number);
        $("#contactEmail").html(email);
        $("#contactPurpose").html(email);
        $("#contactComment").html(comments);
    });
    
    $('.contactReply').click(function(){
        var id = $(this).data('id');
        var email = $(this).data('email');
        var name = $(this).data('name');
        $("#contactreplyId").val(id);
        $("#contactreplyEmail").val(email);
        $("#contactreplyEmail1").val(email);
        $("#contactreplyname").val(name);
    });
    
    $(document).on('click', '.deleteContactmodal', function (e) {
         var fecth_id = $(this).data('fecth_id');
         $(".deletecontact").val(fecth_id);
         $('.deletecontact').data('id',fecth_id); 
    });
    
    $('#Edit_Faq').validate({
        errorClass: 'invalid-feedback',
        rules: {
            title: {
                required: true,
                minlength: 2,
                maxlength: 100,
            },
            content: {
                required: true,
                minlength: 2,
                maxlength: 1000,
            }
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid');
        },
        messages: {
            title: {
                required: "Enter Your Full Name",
            },
            content: {
                required: "Region Field cannot be empty",
            }
        },
        submitHandler: function(form) {
//                $('#sendNow').attr('disabled',true);
            var form = $('#Edit_Faq');
            var formData = form.serialize();
            $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
            $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: formData,
            dataType:'json',
            success: function(result) {
                 $('.loader').css('display', 'block').fadeOut(4000).slideUp(1000);
                setTimeout(function(){
                    $(Custombox.close()).modal('hide')
                  }, 4000);     
//                   Custombox.fadeOut(4000);
                $(".alert-success").html(result.message).fadeIn().delay(7000).fadeOut(1000).slideUp(1000);
//                Custombox.close();
//                location.reload();
            },
            error: function(xhr, ajaxOptions, thrownError){                
                    $(".alert-danger").html(thrownError).fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                }
            });
        return false;
        }
    });
    
    $(document).on('click', '.deletemodal', function (e) {
         var fecth_id = $(this).data('fecth_id');
         $(".deletefaq").val(fecth_id);
         $('.deletefaq').data('id',fecth_id); 
    });
    
    $(document).on('click', '.deletefaq', function (e) {
        var id = $(this).val();
        e.preventDefault();
        
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            url: '/deleteFaq',
            type: 'post',
            data: {id: id},
            success: function () {
                 window.scrollTo({
                    top: 200,
                    left: 0,
                    behavior: 'smooth'
                });
                $(".alert-success").html('Successfully Deleted').fadeIn().delay(7000).fadeOut(1000).slideUp(1000);
//                location.reload();
//                currentTR.remove();
            },
            error: function () {
                $(".alert-danger").html('Something went wrong').fadeIn().delay(10000).fadeOut(1000).slideUp(1000);
                console.log("Something went wrong");
            },
        });
    });
    
    $('#add_Faq').validate({
        errorClass: 'invalid-feedback',
        rules: {
            category:{
                required: true,
            },
            title: {
                required: true,
                minlength: 2,
                maxlength: 100,
            },
            content: {
                required: true,
                minlength: 2,
                maxlength: 500,
            }
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid');
        },
        messages: {
            required: {
                required: "Please select Category",
            },
            title: {
                required: "Title Field cannot be empty",
            },
            content: {
                required: "Content Field cannot be empty",
            }
        },
        submitHandler: function(form) {
            var form = $('#add_Faq');
            var formData = form.serialize();
            $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
            $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: formData,
            dataType:'json',
            success: function(result) {
                $("#add_Faq")[0].reset();
                //$('#FaqAddmodal').modal('hide');
                 $('.loader').css('display', 'block').fadeOut(4000).slideUp(1000);               
                setTimeout(function(){
                    $('#FaqAddmodal').modal('hide')
                  }, 4000);
                
                 $(".alert-success").html('Successfully Added').fadeIn().delay(7000).fadeOut(1000).slideUp(1000);
//                location.reload();
            },
            error: function(xhr, ajaxOptions, thrownError){  
                console.log('error');
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
                  $(".alert-danger").html(thrownError).fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                }
            });
        return false;
        }
    });
    
    $('#contact_reply').validate({
        errorClass: 'invalid-feedback',
        rules: {
            reply: {
                required: true,
                minlength: 2,
                maxlength: 500,
            }
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid');
        },
        messages: {
            reply: {
                required: "Region Field cannot be empty",
            }
        },
        submitHandler: function(form) {
            var form = $('#contact_reply');
            var formData = form.serialize();
            $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
            $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: formData,
            dataType:'json',
            success: function(result) {
                console.log(result);
                 $('.loader').css('display', 'block').fadeOut(4000).slideUp(1000);
                //$('#ContactReplymodal').modal('hide');
                setTimeout(function(){
                    $('#ContactReplymodal').modal('hide')
                  }, 4000);
                
                 $(".alert-success").html('Successfully Replied').fadeIn().delay(7000).fadeOut(1000).slideUp(1000);
//                $("#contact_reply")[0].reset(); 
                //location.reload();
            },
            error: function(xhr, ajaxOptions, thrownError){  
                console.log('error');
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
                  $(".alert-danger").html(thrownError).fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                }
            });
        return false;
        }
    });
    
    $(document).on('click', '.deletecontact', function (e) {
        var id = $(this).val();
        e.preventDefault();
        
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            url: '/deletecontact',
            type: 'post',
            data: {id: id},
            success: function () {
//                $('#message').fadeIn();
//                $('#message').html('<div class="alert alert-success">Successfully Deleted</div>').fadeOut(2000);
                 window.scrollTo({
                    top: 200,
                    left: 0,
                    behavior: 'smooth'
                });
                 $(".alert-success").html('Successfully Deleted').fadeIn().delay(7000).fadeOut(1000).slideUp(1000);
//                location.reload();
//                currentTR.remove();
            },
            error: function () {
                console.log("ajax call went wrong:");
                 $(".alert-danger").html('Something went wrong').fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
            },
        });
    });
        
        
        
    // admin varify secret key
    $(document).ready(function(){
//        $('.keybtn').click(function(){
        $('#loginForm').validate({
            errorClass: 'invalid-feedback',
            rules: {
                secret_key:{
                    required:true,
                    minlength:4,
                    maxlength:4,
                    numberField:true
                },
                password:{
                    required:true,
                    minlength:6,
                },
                email:{
                    required:true,
                },
                mathcaptcha:{
                    required:true,
                    numberField:true
                },
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            },
            messages: {
                secret_key:{
                    required:"Please enter Key",
                },
                password:{
                    required:"Password field required",
                },
                email:{
                    required:"Email field required",
                },
                mathcaptcha:{
                    required:"Captcha Required",
                },
            },
            submitHandler: function(form) {
                var form = $('#loginForm');
                var formData = form.serialize();
                $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
                $.ajax({
                url: form.attr('action'),
//                url: 'http://eceteacher.betadelivery.com/secretkey',
                type: form.attr('method'),
                data: formData,
                dataType:'json',
                success: function(result) { 
//                    if((result.data.status == false) && (result.data.authentication == false)){
//                        $(".alert-danger").html('Invalid Credential').fadeIn().delay(2000).fadeOut(1000).slideUp(1000); 
//                    }else if ((result.data.status == false) && (result.data.secret == false)) {
//                        $(".alert-danger").html('Wrong Secretkey').fadeIn().delay(2000).fadeOut(1000).slideUp(1000);                     
//                    }else if ((result.data.status == true) && (result.data.secret == true)) {
//                        window.location.replace("/admin");                      
//                    } else {

                        $('.loader').css('display', 'block').fadeOut(4000).slideUp(1000);
                        window.setTimeout(function() {
                            window.location.href = '/admin';
                        }, 4000);
//                        swal("OTP Sent!", "Check your email", "success");
//                        $('.keyfield').css('display', 'block');
//                        $('#secret_key').attr('type', 'text');
//                        $('#secret_key').prop('disabled', false);
//                        $('#email').prop('readonly', true);
//                        $('#email').attr('type', 'hidden');
//                        $('#password').prop('readonly', true);
//                        $('#password').attr('type', 'hidden');
//                        $('#mathcaptcha').attr('type', 'hidden');
//                        $('.mathlabel').css('display', 'none');
                        $('.submitbtn span').html('Processing');
//                        $(".alert-success").html(result.message).fadeIn().delay(5000).fadeOut(1000).slideUp(1000);
                        
//                    }
                    
                },
                error: function(xhr, ajaxOptions, thrownError){ 
                        console.log('error:'+ xhr);
                        console.log('error:'+ ajaxOptions);
                        console.log('error:'+ thrownError);
                        $(".alert-danger").html('Incorrect Email Or Password').fadeIn().delay(2000).fadeOut(1000).slideUp(1000);
                    }
                });
                return false;
            }
        });
    });
    
    
//    Delete Datatable row on click 
    var table = $('#datatable').DataTable(); 
    $('#datatable tbody').on( 'click', '.deletecontact', function () {
        table
            .row( $(this).parents('tr') )
            .remove()
            .draw();
    } ); 
    $('#datatable tbody').on( 'click', '.deletefaq', function () {
        table
            .row( $(this).parents('tr') )
            .remove()
            .draw();
    } );
    
    
    
    
    
    
});  //DOM close