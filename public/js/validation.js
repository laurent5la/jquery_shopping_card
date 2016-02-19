$(document).ready(function() {

	"use strict";
	  
	var validator=$('#myform').validate({
	    rules: {
            username: {
                required: true,
                minlength: 4,
                alphanumeric:true
            },
            email: {
                required: true,
                email: 5
            },
            password: { 
                required: true,
                minlength: 9,
                pwcheck: true
            }, 
            cpassword: { 
            	minlength: 9,
                required: true,
                equalTo: "#password"
            }
	    },
        messages: {
            username: "Please enter valid username",
            email: "Please enter valid email addres",
            password: "Please enter valid password",
            cpassword: "Should be equal to password entered"
        }
	});

	$('#field1').blur(function(){
		this.validate();
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

    var options = {};
    options.ui = {
        bootstrap4: true,
        container: "#pwd-container",
        viewports: {
            progress: ".pwstrength_viewport_progress"
        }
    };
    options.common = {
        debug: true,
        onLoad: function () {
            $('#messages').text('Start typing password');
        }
    };
    $('#password1').pwstrength(options);

 });

