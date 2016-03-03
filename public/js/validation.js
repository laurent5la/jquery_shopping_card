$(document).ready(function() {

	"use strict";

    var priceId, productId, orderJsonObject, orderId,cardType, cardNumber,expiryDate,userId,phone,firstName,lastName,username,password,JSONTaxObjectVerifiedUser,JSONLoginObject,JSONRegisterObject,JSONTaxObject,postal,country,city,street,state;

    // displaying password strength
    //$('#password1').keyup(function(){
    //    if(!$('#password1').val()){
    //        $(".pwstrength_viewport_progress").css('visibility', 'hidden');
    //    }
    //});
    //$('#password1').keypress(function(){
    //    $(".pwstrength_viewport_progress").css('visibility', 'visible');
    //    //$(".pwstrength_viewport_progress").show("fast");
    //
    //});


    //var validator=$('#loginform').validate({
	 //   rules: {
    //        username: {
    //            required: true,
    //            minlength: 4,
    //            alphanumericcheck:true
    //        },
    //        email: {
    //            email: true
    //        },
    //        password1: {
    //            required: true,
    //            minlength: 6,
    //            pwcheck: true
    //        },
    //        cpassword: {
    //        	minlength: 6,
    //            equalTo: "#password1"
    //        }
	 //   },
    //    messages: {
    //        username: {
    //           alphanumericcheck: "Please enter valid username",
    //        },
    //        email: {
    //            email: "Please enter valid email address",
    //        },
    //        password1:{
    //            pwcheck:"Please enter valid password",
    //        } ,
    //        cpassword: {
    //            equalTo: "This field should be equal to password entered",
    //        }
    //    },
    //    success: function(label,element) {
    //            label.parent().removeClass('error');
    //            label.remove();
    //            //var parent = $('.success').parent().get(0); // This would be the <a>'s parent <li>.
    //            //$(parent).addClass('has-success');
    //    }
    //});
    //$.validator.addMethod("pwcheck", function(value) {
   	//	return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
    //   	&& /[a-z]/.test(value) // has a lowercase letter
    //   	&& /\d/.test(value) // has a digit
    //});
    //$.validator.addMethod("alphanumericcheck", function(value) {
    //    return /^[a-z0-9]+$/i.test(value) // consists of only these
    //});
    /* login validation ends here*/

    //password strength
    //var options = {};
    //options.ui = {
    //    container: "#pwd-container",
    //    showVerdictsInsideProgressBar: true,
    //    showErrors: false,
    //    viewports: {
    //        progress: ".pwstrength_viewport_progress"
    //    },
    //    errorMessages:{
    //        wordLength: "Your password should be of minimum length 6"
    //    }
    //};
    //
    //$('#password1').pwstrength(options);
    

    /* billing validation starts here*/
    //$('#billingform').blur(function () {
    //    $(this).validate();
    //});
    //
    //$('#billingform').validate({
    //    rules: {
    //        cardname: {
    //            required: true,
    //            minlength: 2
    //        },
    //        ccnumber:{
    //            required: true,
    //            creditcard: true
    //        },
    //        cvv:{
    //            required:true,
    //            number: true,
    //            minlength: 3
    //        },
    //        expdate:{
    //            required:true,
    //            ccexpdate:true
    //        },
    //        address:{
    //            required: true,
    //            minlength: 3
    //        },
    //        city: {
    //            required: true,
    //            minlength: 2
    //        },
    //        zipcode:{
    //            required: true,
    //            zipcodeCheck: true
    //        }
    //    },
    //    messages: {
    //        cardname: {
    //            minlength: "Username should be of minimum 2 characters"
    //        },
    //        ccnumber: {
    //            creditcard: "Please enter valid credit card number"
    //        },
    //        cvv: {
    //            minlength: "CVV should contain atleast 3 digits",
    //            number: "CVV should contain only numbers"
    //        },
    //        expdate: {
    //           ccexpdate: "Please enter valid expiry date"
    //        },
    //        zipcode: {
    //            zipcodeCheck: "Please enter valid zipcode"
    //        }
    //
    //    }
    //});
    //
    //$.validator.addMethod("ccexpdate", function (value, element) {
    //    var match=value.match(/^\s*(0?[1-9]|1[0-2])\/(\d\d|\d{4})\s*$/);
    //    if (!match){
    //        return false;
    //    }
    //    var exp = new Date(normalizeYear(1*match[2]),1*match[1]-1,1).valueOf();
    //    var now=new Date();
    //    var currMonth = new Date(now.getFullYear(),now.getMonth(),1).valueOf();
    //    if (exp<=currMonth){
    //        return false;
    //    } else {
    //        return true;
    //    };
    //});
    //
    //function normalizeYear(year){
    //    // Century fix
    //    var YEARS_AHEAD = 20;
    //    if (year<100){
    //        var nowYear = new Date().getFullYear();
    //        year += Math.floor(nowYear/100)*100;
    //        if (year > nowYear + YEARS_AHEAD){
    //            year -= 100;
    //        } else if (year <= nowYear - 100 + YEARS_AHEAD) {
    //            year += 100;
    //        }
    //    }
    //    return year;
    //}
    //
    //$.validator.addMethod("zipcodeCheck",function(value){
    //    return /^\d{5}(?:[-\s]\d{4})?$/.test(value);
    //});
    /*billing validation ends here*/

    //personal information form validation
    //$('#personalinfoform').validate({
    //    rules: {
    //        fname: {
    //            required: true,
    //            minlength: 2
    //        },
    //        lname:{
    //            required: true,
    //            minlength: 2
    //        },
    //        cvv:{
    //            required:true,
    //            number: true,
    //            minlength: 3
    //        },
    //        address:{
    //            required: true,
    //            minlength: 3
    //        },
    //        city: {
    //            required: true,
    //            minlength: 2
    //        },
    //        zipcode:{
    //            required: true,
    //            zipcodeCheck: true
    //        }
    //    },
    //    messages: {
    //        zipcode: {
    //            zipcodeCheck: "Please enter valid zipcode"
    //        }
    //    }
    //});

    //tax call
    $('#number').focus(function(){
        //$(this).off('focus');
        if(isSetInput('#bill_to_address_city')&& isSetInput('#bill_to_address_line1') && isSetInput('#postal_code') ){
            postal = $('#postal_code').val();
            country = $('#bill_to_address_country').val();
            city=$('#bill_to_address_city').val();
            street=$('#bill_to_address_line1').val();
            state=$('#bill_to_address_state').val();

            taxData={"city":city,"country":country,"postal":postal,"state":state,"street":street};
            console.log(taxData);
            var taxPromise = Q($.ajax({
                url: 'http://api.local/tax.php',
                type: 'GET',
                data:taxData
            })).then(
                function(outputTax){taxResolve(outputTax);},
                function(errorTax){taxReject(errorTax);}
            );
        }
    })

    function taxResolve(outputTax){
        console.log("TAX output"+ outputTax);
    }

    function taxReject(errorTax){
        console.log(outputTax);
    }

    /* login verified */
    //$('#forename').focus(function(){
    //    //$(this).off('focus');                                                       // event removed
    //    if( isSetInput('#password1') && isSetInput('#uname') ){
    //            if(!$('#cpassword').val()){                                         //if confirm password not entered
    //                userId = $('#uname').val();
    //                password = $('#password1').val();
    //                JSONLoginObject= {"userId":userId , "password": password };
    //                /* login Promise */
    //                var loginVerifiedPromise = Q($.ajax({url: 'http://api.local/loginverified.php',
    //                    type: 'POST',
    //                    data:JSON.stringify(JSONLoginObject),
    //                    dataType:'json',
    //                    headers : {
    //                        'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //                    }
    //                })).then(
    //                    function(outputLoginVerified){loginverifiedResolve(outputLoginVerified);},
    //                    function(errorLoginVerified){loginverifiedReject(errorLoginVerified);}
    //                );
    //                //TODO add exception handling
    //            }
    //    }
    //});

    //function loginverifiedResolve(outputLoginVerified){
    //    postal = outputLoginVerified.personalInfo.postal;
    //    country = outputLoginVerified.personalInfo.country;
    //    city= outputLoginVerified.personalInfo.city;
    //    street=outputLoginVerified.personalInfo.street;
    //    state=outputLoginVerified.personalInfo.state;
    //    firstName = outputLoginVerified.personalInfo.firstName;
    //    lastName = outputLoginVerified.personalInfo.lastName;
    //    phone = outputLoginVerified.personalInfo.phone;
    //    cardType = outputLoginVerified.billingInfo.cardType;
    //    cardNumber=outputLoginVerified.billingInfo.cardNumber;
    //    expiryDate = outputLoginVerified.billingInfo.expiryDate;
    //
    //    taxData={"city":city,"country":country,"postal":postal,"state":state,"street":street};
    //    var taxPromiseVerified = Q($.ajax({
    //        url: 'http://api.local/tax.php',
    //        type: 'GET',
    //        data:taxData
    //    })).then(
    //        function(outputTaxVerified){taxResolveVerified(outputTaxVerified);},
    //        function(errorTaxVerified){taxRejectVerified(errorTaxVerified);}
    //    );
    //    $('#loginform-div').hide();
    //    $('.checkout-title').html('Hello '+ firstName+ '.Complete your purchase below.');
    //    $('#personalinfoform').hide();
    //    $('#verifiedUserDetails').show();
    //    $('#verifiedUserDetails').val(firstName +" " + lastName+"\n" + street+ "\n "+city +", "+state +" "+postal+"\n"+phone);
    //
    //    $('#billingform').hide();
    //
    //    $('#card_details').show();
    //    $('#card_details').val(cardType+"   "+"xxxx xxxx xxxx"+cardNumber+"   "+expiryDate);
    //    $('#newAddress--div').show();
    //    $('#addCarddiv').show();
    //    $('input[type="checkbox"]').change(function () {
    //        console.log('change');
    //        if($(this).attr("value")=="newCard"){
    //            if($(this).prop("checked") == true) {
    //                console.log('Add new card checked');
    //                $('#billingform').show();
    //            }
    //            if($(this).prop("checked") == false){
    //                $('#billingform').hide();
    //            }
    //        }
    //    });
    //   // $('.billingform__label').append("<div  id=\"billingform__input--div\">"+cardType+"   "+"xxxx xxxx xxxx"+cardNumber+"   "+expiryDate+"</div>");s
    //
    //}
    //
    //function taxResolveVerified(outputTaxVerified){
    //    console.log(outputTaxVerified);
    //}
    //function taxRejectVerified(errorTaxVerified){
    //    console.log(errorTaxVerified);
    //}
    //function loginverifiedReject(errorLoginVerified){
    //    console.log(errorLoginVerified);
    //}
    
    /*login or register php call starts here*/
    //$('#forename').focus(function(){
    //    $(this).off('focus');                                                       // event removed
    //    if( $('#password1').val() && $('#username').val() ){                           //username & password field not empty
    //        if($('#password1').valid() && $('#username').valid()){                     //valid username & password entered
    //            if(!$('#cpassword').val()){                                         //if confirm password not entered
    //                username = $('#username').val();
    //                password = $('#password1').val();
    //                JSONLoginObject= {"userid":username , "password": password };
    //
    //                /* login Promise */
    //                var loginPromise = Q($.ajax({url: 'http://api.local/login.php',
    //                        type: 'POST',
    //                        data:JSON.stringify(JSONLoginObject),
    //                        dataType:'json',
    //                        headers : {
    //                            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //                        }
    //                    })).then(
    //                                function(outputLogin){loginResolve(outputLogin);},
    //                                function(errorLogin){loginReject(errorLogin);}
    //                            );
    //                    //TODO add exception handling
    //            }else{  //confirm password entered
    //                if($('#cpassword').valid()){
    //                    username = $('#username').val();
    //                    password = $('#password1').val();
    //                    JSONRegisterObject= {"userid":username , "password": password };
    //
    //                    //call to register php
    //                    var registerPromise = Q($.ajax({url: 'http://api.local/register.php',
    //                        type: 'POST',
    //                        data:JSON.stringify(JSONRegisterObject),
    //                        dataType:'json',
    //                        headers : {
    //                            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //                        }
    //                    })).then(
    //                                function(outputRegister){registerResolve(outputRegister);},
    //                                function(errorRegister){registerReject(errorRegister);}
    //                            );
    //                }
    //            }
    //        }
    //    }
    //});

    //function loginResolve(outputLogin){
    //    $('#loginform-div').hide();
    //    $('.checkout-title').html('Hello '+ outputLogin.userid + '.Complete your purchase below.');
    //    $('#cardname').val(outputLogin.userid);
    //    //order details
    //    priceId = $('#priceId').text();
    //    productId = $('#productId').text();
    //    //TODO add for each for multiple products in the cart
    //    /* var products =[];
    //     products.push(product);
    //     for each when multiple products
    //     */
    //    orderAPIData= {
    //        "userid": outputLogin.userid,
    //        "products": [
    //            {
    //                "productid": productId,
    //                "priceid": priceId
    //            }
    //        ]
    //    };
    //    return Q($.ajax({
    //        url: 'http://api.local/order.php',
    //        type: 'POST',
    //        data:JSON.stringify(orderAPIData),
    //        dataType:'json',
    //        headers : {
    //            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //        }
    //    })).then(
    //        function(outputOrder){
    //            orderResolve(outputOrder);
    //        },
    //        function(errorOrder){
    //            orderReject(errorOrder);
    //        }
    //    );
    //}

    //function loginReject(errorLogin){
    //    if(errorLogin.status=='401'){
    //        $("#invalidUser-div").hide();
    //        $("#invalidUser-div").text('Invalid username or password. If new user please enter confirm password.');
    //        $("#invalidUser-div").show();
    //        resetLoginform();
    //    }
    //    if(errorRegister.status=='408'){
    //        console.log('request timed out once');
    //        var loginPromise = Q($.ajax({url: 'http://api.local/login.php',
    //            type: 'POST',
    //            data:JSON.stringify(JSONLoginObject),
    //            dataType:'json',
    //            headers : {
    //                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //            }
    //        })).then(
    //            function(outputLogin){loginResolve(outputLogin);},
    //            function(errorLogin){login2Reject(errorLogin);}
    //        )
    //            .finally(function() {
    //
    //            });
    //        $("#invalidUser-div").hide();
    //        resetLoginform();
    //    }
    //}

    //function login2Reject(errorLogin){
    //    if(errorRegister.status=='408'){
    //        console.log('request timed out twice');
    //        $("#invalidUser-div").hide();
    //        resetLoginform();
    //    }
    //}


    //function registerResolve(outputRegister){
    //    $('#loginform-div').hide();
    //    $('.checkout-title').html('Hello '+ outputRegister.userid + '.Complete your purchase below.');
    //    $('#cardname').val(outputRegister.userid);
    //    //order details
    //    priceId = $('#priceId').text();
    //    productId = $('#productId').text();
    //    /* var products =[];
    //     products.push(product);
    //     for each when multiple products
    //     */
    //    orderAPIData= {
    //        "userid": outputRegister.userid,
    //        "products": [
    //            {
    //                "productid": productId,
    //                "priceid": priceId
    //            }
    //        ]
    //    };
    //    return Q($.ajax({
    //        url: 'http://api.local/order.php',
    //        type: 'POST',
    //        data:JSON.stringify(orderAPIData),
    //        dataType:'json',
    //        headers : {
    //            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //        }
    //    })).then(
    //        function(outputOrder){
    //            orderResolve(outputOrder);
    //        },
    //        function(errorOrder){
    //            orderReject(errorOrder);
    //        }
    //    );
    //
    //}
    //
    //function registerReject(errorRegister){
    //    if(errorRegister.status=='408'){
    //        console.log('request timed out once');
    //        var registerPromise = Q($.ajax({url: 'http://api.local/register.php',
    //            type: 'POST',
    //            data:JSON.stringify(JSONRegisterObject),
    //            dataType:'json',
    //            headers : {
    //                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //            }
    //        })).then(
    //            function(outputRegister){registerResolve(outputRegister);},
    //            function(errorRegister){register2Reject(errorRegister);}
    //        );
    //        $("#invalidUser-div").hide();
    //        resetLoginform();
    //    }
    //}
    //
    //function register2Reject(errorRegister){
    //    if(errorRegister.status=='408'){
    //        console.log('request timed out twice');
    //        $("#invalidUser-div").hide();
    //        resetLoginform();
    //    }
    //}

    //function orderResolve(outputOrder){
    //    orderId = outputOrder.orderid;
    //    return Q($.ajax({
    //        url: 'http://api.local/cybersource.php',
    //        type: 'POST',
    //        data:orderId,
    //        headers : {
    //            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    //        }
    //    })).then(
    //                function(outputCybersource){
    //                    cyberSourceResolve(outputCybersource);
    //                },
    //                function(errorCybersource){
    //                    orderReject(errorCybersource);
    //                }
    //            );
    //}
    //
    //function orderReject(errorOrder){
    //    console.log(orderError);
    //}

    //function cyberSourceResolve(outputCybersource){
    //    console.log('cybersource success');
    //}
    //
    //function cyberSourceReject(errorCybersource){
    //    console.log('cybersource reject');
    //}

    //function resetLoginform(){
    //    if(!$('#cpassword').valid()){
    //        $('#cpassword').removeClass("error");
    //        $('label[for=cpassword]').remove();
    //    }
    //    if(!$('#email').valid()){
    //        $('#email').removeClass("error");
    //        $('label[for=email]').remove();
    //    }
    //    if(!$('#password1').valid()){
    //        $('#password1').removeClass("error");
    //        $('label[for=password1]').remove();
    //    }
    //    if(!$('#uname').valid()){
    //        $('#uname').removeClass("error");
    //        $('label[for=username]').remove();
    //    }
    //
    //}

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

    //$('#cardname').off('focus');
    //
    //function isSetInput(fieldid){
    //    if ($(fieldid).val()){
    //        if($(fieldid).valid()){
    //            return true;
    //        }
    //    }
    //    return false;
    //}

 });

