$(document).ready(function() {

	"use strict";

    var priceId, productId, orderJsonObject, orderId, username,password,JSONLoginObject,JSONRegisterObject;

    // displaying password strength
    $('#password1').keyup(function(){
        if(!$('#password1').val()){
            $(".pwstrength_viewport_progress").css('visibility', 'hidden');
        }
    });
    $('#password1').keypress(function(){
        $(".pwstrength_viewport_progress").css('visibility', 'visible');
        //$(".pwstrength_viewport_progress").show("fast");

    });
	
    /*login validation starts here */
    $('#loginform').blur(function(){
        this.validate();
    });

	var validator=$('#loginform').validate({
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
                equalTo: "#password1"
            }
	    },
        messages: {
            uname: {
               alphanumericcheck: "Please enter valid username",
            },
            email: {
                email: "Please enter valid email address",
            },
            password1:{
                pwcheck:"Please enter valid password",
            } ,
            cpassword: {
                equalTo: "This field should be equal to password entered",
            }
        }
	});
	$.validator.addMethod("pwcheck", function(value) {
   		return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       	&& /[a-z]/.test(value) // has a lowercase letter
       	&& /\d/.test(value) // has a digit
	});
    $.validator.addMethod("alphanumericcheck", function(value) {
        return /^[a-z0-9]+$/i.test(value) // consists of only these
    });
    /* login validation ends here*/

    //password strength 
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
    

    /* billing validation starts here*/
    $('#billingform').blur(function () {
        $(this).validate();
    });

    $('#billingform').validate({
        rules: {
            cardname: {
                required: true,
                minlength: 2
            },
            ccnumber:{
                required: true,
                creditcard: true
            },
            cvv:{
                required:true,
                number: true,
                minlength: 3
            },
            expdate:{
                required:true,
                ccexpdate:true
            },
            address:{
                required: true,
                minlength: 3
            },
            city: {
                required: true,
                minlength: 2 
            },
            zipcode:{
                required: true,
                zipcodeCheck: true
            }
        },
        messages: {
            cardname: {
                minlength: "Username should be of minimum 2 characters",
            },
            ccnumber: {
                creditcard: "Please enter valid credit card number",
            },
            cvv: {
                minlength: "CVV should contain atleast 3 digits",
                number: "CVV should contain only numbers",
            },
            expdate: {
               ccexpdate: "Please enter valid expiry date",
            },
            zipcode: {
                zipcodeCheck: "Please enter valid zipcode",
            }

        }
    });

    $.validator.addMethod("ccexpdate", function (value, element) {
        var match=value.match(/^\s*(0?[1-9]|1[0-2])\/(\d\d|\d{4})\s*$/);
        if (!match){
            return false;
        }
        var exp = new Date(normalizeYear(1*match[2]),1*match[1]-1,1).valueOf();
        var now=new Date();
        var currMonth = new Date(now.getFullYear(),now.getMonth(),1).valueOf();
        if (exp<=currMonth){
            return false;
        } else {
            return true;
        };
    });

    function normalizeYear(year){
        // Century fix
        var YEARS_AHEAD = 20;
        if (year<100){
            var nowYear = new Date().getFullYear();
            year += Math.floor(nowYear/100)*100;
            if (year > nowYear + YEARS_AHEAD){
                year -= 100;
            } else if (year <= nowYear - 100 + YEARS_AHEAD) {
                year += 100;
            }
        }
        return year;
    }

    $.validator.addMethod("zipcodeCheck",function(value){
        //return /([0-9]){5}\-|([0-9]){5}\b/g.test(value) ;
        //var zipregex= '\d{5}(?:[-\s]\d{4})?$';
        return /^\d{5}(?:[-\s]\d{4})?$/.test(value);
    });
    /*billing validation ends here*/


    //Coupon code
    $("#coupon_btn").on("click", function(){
        //event.PreventDefault();
        alert("Success!");
        $.ajax({
            type: 'POST',
            url: '/coupon',
            xhrFields: {
                withCredentials: true
            },
            success: function(data) {
                alert(data);
            }
        });
   });  

    $("#annual_btn").on("click", function(){
        //event.PreventDefault();
        var product_id = document.getElementById("annual_btn").value;
        alert("Value = " +product_id);
        $.ajax({
            type: 'POST',
            url: '/coupon',
            data: { product_id: product_id },
            xhrFields: {
                withCredentials: true
            },
            success: function(data) {
                alert(data);
            }
        });
   });  
    //Coupon code end


    
    /*login or register php call starts here*/
    $('#cardname').focus(function(){
        if( $('#password1').val() && $('#uname').val() ){                           //username & password field not empty
            if($('#password1').valid() && $('#uname').valid()){                     //valid username & password entered
                if(!$('#cpassword').val()){                                         //if confirm password not entered
                    username = $('#uname').val();
                    password = $('#password1').val();
                    JSONLoginObject= {"userid":username , "password": password };
        
                    /* login Promise */
                    var loginPromise = Q($.ajax({url: 'http://api.local/login.php',
                            type: 'POST',
                            data:JSON.stringify(JSONLoginObject),
                            dataType:'json',
                            headers : {
                                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                            }
                        })).then(   
                                    function(outputLogin){loginResolve(outputLogin);},
                                    function(errorLogin){loginReject(errorLogin);}
                                );

                    function loginResolve(outputLogin){
                        $('#loginform-div').hide();
                        $('.checkout-title').html('Hello '+ outputLogin.userid + '.Complete your purchase below.');
                        $('#cardname').val(outputLogin.userid);
                        //order details
                        priceId = $('#priceId').text();
                        productId = $('#productId').text();
                        /* var products =[];
                        products.push(product); 
                        for each when multiple products
                        */
                        orderJsonObject= {
                          "userid": outputLogin.userid,
                          "products": [
                            {
                              "productid": productId,
                              "priceid": priceId
                            }
                          ]
                        };
                        return Q($.ajax({                                                        
                            url: 'http://api.local/order.php',
                            type: 'POST',
                            data:JSON.stringify(orderJsonObject),
                            dataType:'json',
                            headers : {
                                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                            }
                        })).then(   
                                    function(outputOrder){
                                        orderResolve(outputOrder);
                                    },
                                    function(errorOrder){
                                        orderReject(errorOrder);
                                    }
                                );
                       
                    }

                    function loginReject(errorLogin){
                        console.log('login error');
                    }

                    
                }else{  //confirm password entered
                    if($('#cpassword').valid()){                                    // cpassword entered and is valid
                        username = $('#uname').val();
                        password = $('#password1').val();
                        JSONRegisterObject= {"userid":username , "password": password };

                        //call to register php
                        var registerPromise = Q($.ajax({url: 'http://api.local/login.php',
                            type: 'POST',
                            data:JSON.stringify(JSONRegisterObject),
                            dataType:'json',
                            headers : {
                                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                            }
                        })).then(   
                                    function(outputRegister){registerResolve(outputRegister);},
                                    function(errorRegister){registerReject(errorRegister);}
                                );

                        function registerResolve(outputRegister){
                        $('#loginform-div').hide();
                        $('.checkout-title').html('Hello '+ outputRegister.userid + '.Complete your purchase below.');
                        $('#cardname').val(outputRegister.userid);
                        //order details
                        priceId = $('#priceId').text();
                        productId = $('#productId').text();
                        /* var products =[];
                        products.push(product); 
                        for each when multiple products
                        */
                        orderJsonObject= {
                          "userid": outputRegister.userid,
                          "products": [
                            {
                              "productid": productId,
                              "priceid": priceId
                            }
                          ]
                        };
                        return Q($.ajax({                                                        
                            url: 'http://api.local/order.php',
                            type: 'POST',
                            data:JSON.stringify(orderJsonObject),
                            dataType:'json',
                            headers : {
                                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                            }
                        })).then(   
                                    function(outputOrder){
                                        orderResolve(outputOrder);
                                    },
                                    function(errorOrder){
                                        orderReject(errorOrder);
                                    }
                                );
                       
                        }

                        function registerReject(errorRegister){
                            console.log('register error');
                        } 
                    }
                }  
            }
        }
    });

    function orderResolve(outputOrder){
        orderId = outputOrder.orderid;
        return Q($.ajax({                                                        
            url: 'http://api.local/cybersource.php',
            type: 'POST',
            data:orderId,
            headers : {
                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        })).then(   
                    function(outputCybersource){
                        cyberSourceResolve(outputCybersource);
                    },
                    function(errorCybersource){
                        orderReject(errorCybersource);
                    }
                );          
    }

    function orderReject(errorOrder){
        console.log(orderError);
    }

    function cyberSourceResolve(outputCybersource){
        console.log('cybersource success');
    }

    function cyberSourceReject(errorCybersource){
        console.log('cybersource reject');
    }


 });

