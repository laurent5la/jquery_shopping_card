$(document).ready(function() {

	"use strict";

    var priceId, productId, orderJsonObject, orderId, username,password,JSONLoginObject,JSONRegisterObject,JSONTaxObject;

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
        },
        success: function(label,element) {
                label.parent().removeClass('error');
                label.remove();
                //var parent = $('.success').parent().get(0); // This would be the <a>'s parent <li>.
                //$(parent).addClass('has-success');    
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
        return /^\d{5}(?:[-\s]\d{4})?$/.test(value);
    });
    /*billing validation ends here*/


    //tax call
    JSONTaxObject={};
    var taxPromise = Q($.ajax({url: 'http://api.local/login.php',
        type: 'POST',
        data:JSON.stringify(JSONTaxObject),
        dataType:'json',
        headers : {
            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
        }
    })).then(
        function(outputTax){taxResolve(outputTax);},
        function(errorTax){taxReject(errorTax);}
    );

    function taxResolve(outputTax){

    }

    function taxReject(errorTax){

    }
    
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
                        //TODO add exception handling
                }else{  //confirm password entered
                    if($('#cpassword').valid()){    
                        console.log('calling register');                                // cpassword entered and is valid
                        username = $('#uname').val();
                        password = $('#password1').val();
                        JSONRegisterObject= {"userid":username , "password": password };

                        //call to register php
                        var registerPromise = Q($.ajax({url: 'http://api.local/register.php',
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
                    }
                }  
            }
        }
    });

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
        if(errorLogin.status=='401'){
            $("#invalidUser-div").hide();
            $("#invalidUser-div").text('Invalid username or password. If new user please enter confirm password.');
            $("#invalidUser-div").show();
            resetLoginform();
        }
        if(errorRegister.status=='408'){
            console.log('request timed out once');
            var loginPromise = Q($.ajax({url: 'http://api.local/login.php',
                type: 'POST',
                data:JSON.stringify(JSONLoginObject),
                dataType:'json',
                headers : {
                    'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function(outputLogin){loginResolve(outputLogin);},
                function(errorLogin){login2Reject(errorLogin);}
            )
                .finally(function() {

                });
            $("#invalidUser-div").hide();
            resetLoginform();
        }
    }

    function login2Reject(errorLogin){
        if(errorRegister.status=='408'){
            console.log('request timed out twice');
            $("#invalidUser-div").hide();
            resetLoginform();
        }
    }


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
        if(errorRegister.status=='408'){
            console.log('request timed out once');
            var registerPromise = Q($.ajax({url: 'http://api.local/register.php',
                type: 'POST',
                data:JSON.stringify(JSONRegisterObject),
                dataType:'json',
                headers : {
                    'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function(outputRegister){registerResolve(outputRegister);},
                function(errorRegister){register2Reject(errorRegister);}
            );
            $("#invalidUser-div").hide();
            resetLoginform();
        }
    }

    function register2Reject(errorRegister){
        if(errorRegister.status=='408'){
            console.log('request timed out twice');
            $("#invalidUser-div").hide();
            resetLoginform();
        }
    }

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

    function resetLoginform(){
        if(!$('#cpassword').valid()){
            $('#cpassword').removeClass("error");
            $('label[for=cpassword]').remove();
        }
        if(!$('#email').valid()){
            $('#email').removeClass("error");
            $('label[for=email]').remove();
        }
        if(!$('#password1').valid()){
            $('#password1').removeClass("error");
            $('label[for=password1]').remove();
        }
        if(!$('#uname').valid()){
            $('#uname').removeClass("error");
            $('label[for=uname]').remove();
        }

    }

    //Coupon code
    $("#coupon_btn").on("click", function(){
        var code = $("#promoC").val();
        if(code == "")
            alert("Please enter a Promo Code");
        else
        {
            var divElement = document.getElementById("promoAmt");
            
            $.ajax({
                type: 'POST',
                url: '/coupon',
                dataType: "json",
                data: { code: code},
                xhrFields: {
                    withCredentials: true
                },
                success: function(data) {
                    // Displaying Promo Code 
                    if(divElement.className == "hidden")
                    {
                        divElement.className = "unhidden";
                        $("#subTotal").html("<sup>$</sup>" +data["subTotalD"]+ "<sup>" +data["subTotalC"]+ "</sup>");
                        $("#total").html("<sup>$</sup>" +data["totalD"]+ "<sup>" +data["totalC"]+ "</sup>");
                        $("#promoAply").html("<div><p class='promoAply'><h3>Promo Code Applied</h3></p></div>");
                        $("#promo").html("<sup>$</sup>4<sup>99</sup>");             //************* ---- HARD CODED ----
                    }        
                    else
                        divElement.className = "hidden";
                }
            }); 
        }
    });
    //Coupon code end  

    //Annual price code
    $("#annual_btn").on("click", function(){
        var product_id = document.getElementById("product_id").value;
        var priceD = document.getElementById("priceD").value;
        var priceC = document.getElementById("priceC").value;
       
        var duration = $("#duration").text();


        if(duration == "per month")
        {
            var next_priceD = document.getElementById("next_priceD").value;
            var next_priceC = document.getElementById("next_priceC").value;
        }
        else
        {
            var next_priceD = priceD;       //************* ---- HARD CODED ---- Should change based on annual logic **********
            var next_priceC = priceC;                                           // being pickd up from front end - next_price
        }

        $.ajax({
            type: 'POST',
            url: '/annual',
            dataType: "json",
            data: { product_id: product_id, next_priceD: next_priceD, next_priceC: next_priceC },
            xhrFields: {
                withCredentials: true
            },
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function(data) {
                if(duration == "per month")
                {
                    $("#price").html("<sup>$</sup>499<sup>99</sup>");
                    $("#duration").html("For 12 months");
                    $("#next_price").html("Monthly Pricing - <sup>$</sup>" +priceD+ "<sup>" +priceC+ "</sup>");
                    $("#save").html("");
                    $("#subTotal").html("<sup>$</sup>" +data["subTotalD"]+ "<sup>" +data["subTotalC"]+ "</sup>");
                    $("#total").html("<sup>$</sup>" +data["totalD"]+ "<sup>" +data["totalC"]+ "</sup>");
                }
                else
                {
                    $("#price").html("<sup>$</sup>" +priceD+ "<sup>" +priceC+ "</sup>");
                    $("#duration").html("per month");       
                    $("#next_price").html("Annual Pricing - <sup>$</sup>499<sup>99</sup>");
                    $("#save").html("Save 27%");
                    $("#subTotal").html("<sup>$</sup>" +data["subTotalD"]+ "<sup>" +data["subTotalC"]+ "</sup>");
                    $("#total").html("<sup>$</sup>" +data["totalD"]+ "<sup>" +data["totalC"]+ "</sup>");
                    
                }
                
            }
        });
   });  
    //Annual price code end

    //Close button code
    $(document).on("click", '.close_btn', function(e){

        var product_id = $(this).data("id");
        
        $.ajax({
            type: 'POST',
            url: '/close',
            data: { product_id: product_id},
            xhrFields: {
                withCredentials: true
            },
            success: function(data) {
                $("#shopping_cart").html(data);
            }
        }); 
        
    });
    //Close button code end


 });

