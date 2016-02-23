

$(document).ready(function() {

	"use strict";

    $('#password1').keyup(function(){
        if(!$('#password1').val()){
            $(".pwstrength_viewport_progress").css('visibility', 'hidden');
        }
    });
    $('#password1').keypress(function(){
        
        $(".pwstrength_viewport_progress").css('visibility', 'visible');
        //$(".pwstrength_viewport_progress").show("fast");

    });
    $('#uname, #email, #password1').blur(function(){
        validator.validate()
    });
	  
	var validator=$('#loginform').validate({
        onfocusout: function (element) {
        $(element).valid();
        },
	    rules: {
            uname: {
                required: true,
                minlength: 4,
                alphanumericcheck:true
            },
            email: {
                required: true,
                email: true
            },
            password1: { 
                required: true,
                minlength: 6,
                pwcheck: true
            }, 
            cpassword: { 
            	minlength: 6,
                required: true,
                equalTo: "#password1"
            }
	    },
        messages: {
            uname: "Please enter valid username",
            email: "Please enter valid email address",
            password1: "Please enter valid password",
            cpassword: "Should be equal to password entered"
        }
	});

	$('#loginform').blur(function(){
		$('#loginform').validate();
	});

    

	// The password should meet some minimum requirements:
	// 	minimum length: 8 -> I just use 'minlength: 8'
	// 	at least one lower-case character
	// 	at least one digit
	// 	Allowed Characters: A-Z a-z 0-9 @ * _ - . !

	$.validator.addMethod("pwcheck", function(value) {
   		return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       	&& /[a-z]/.test(value) // has a lowercase letter
       	&& /\d/.test(value) // has a digit
	});


    $.validator.addMethod("alphanumericcheck", function(value) {
        return /^[a-z0-9]+$/i.test(value) // consists of only these
    });


    var options = {};
    options.ui = {
        container: "#pwd-container",
        showVerdictsInsideProgressBar: true,
        showErrors: false,
        viewports: {
            progress: ".pwstrength_viewport_progress"
        },
        errorMessages:{
            wordLength: "Your password should be of minimum length 6"
        }
    };
    options.common = {
        debug: true,
        onLoad: function () {
            $('#messages').text('Start typing password');
        }
    };
    $('#password1').pwstrength(options);



    //Coupon code
    $("#form1").submit(function(){

            $.ajax({
                type: 'POST',
                url: '/coupon',
                success: function(data) {
                    alert(data);
                    //$("p").text(data);

                }
            }); 
   });  
    //Coupon code end
});



