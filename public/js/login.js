$(document).ready(function () {
    var login = (function () {

        var options = {};
        var username, password;
        var priceId, productId;
        var postal,country,city,street,state,firstName,lastName,phone,cardType,cardNumber,expiryDate;
        var orderId;
        var loginData, orderData,cybersourceData, taxData;
        var loginAPIUrl = 'http://api.local/loginverified.php';
        var orderAPIUrl = 'http://api.local/order.php';
        var cybersourceAPIUrl = 'http://api.local/cybersource.php';
        var useNewAddress = false;
        var isNewCreditCard = false;
        var isNewBillingAddress = false;
        var isTaxExempt = false;
        var isAgreeTAC = false;


        options.ui = {
            container: "#pwd-container",
            showVerdictsInsideProgressBar: true,
            showErrors: false,
            viewports: {
                progress: ".pwstrength_viewport_progress"
            }
        };

        var validate = function () {
            var validator = $('#loginform').validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 4,
                        alphanumericcheck: true
                    },
                    email: {
                        email: true,
                        required:true
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
                    username: {
                        alphanumericcheck: "Please enter valid username",
                    },
                    email: {
                        email: "Please enter valid email address",
                    },
                    password1: {
                        pwcheck: "Please enter valid password",
                    },
                    cpassword: {
                        equalTo: "This field should be equal to password entered",
                    }
                },
                success: function (label, element) {
                    label.parent().removeClass('error');
                    label.remove();
                }
            });
            $.validator.addMethod("pwcheck", function (value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    && /[a-z]/.test(value) // has a lowercase letter
                    && /\d/.test(value) // has a digit
            });

            $.validator.addMethod("alphanumericcheck", function (value) {
                return /^[a-z0-9]+$/i.test(value) // consists of only these
            });
        }

        var addPasswordStrengthMeter = function () {
            $('#password1').pwstrength(options);
            passwordStrengthKeyup();
            passwordStrengthKeypress();
        }

        var passwordStrengthKeyup = function () {
            $('#password1').keyup(function () {
                if (!$('#password1').val()) {
                    $(".pwstrength_viewport_progress").css('visibility', 'hidden');
                }
            });
        }

        var passwordStrengthKeypress = function () {
            $('#password1').keypress(function () {
                $(".pwstrength_viewport_progress").css('visibility', 'visible');
            });
        }


        var loginUser = function () {

                $("#password1").blur(function(){
                    if(!isNewUser) {
                        console.log("isNewUser=" + isNewUser);
                        if (isSetInput('#password1') && isSetInput('#username')) {
                            username = $('#username').val();
                            password = $('#password1').val();
                            loginData = {"userid": username, "password": password};
                            loginVerifiedPromise();
                        }
                    }
                });

            //$('#forename').focus(function () {
            //    //$(this).off('focus');
            //    if (isSetInput('#password1') && isSetInput('#username')) {
            //        if (!$('#cpassword').val()) {
            //            username = $('#username').val();
            //            password = $('#password1').val();
            //            loginData = {"userid": username, "password": password};
            //            loginVerifiedPromise();
            //        }
            //    }
            //});
        }


        var loginVerifiedPromise = function () {
            console.log("in loginVerifiedPromise");
            return Q($.ajax({
                url: loginAPIUrl,
                type: 'POST',
                data: JSON.stringify(loginData),
                dataType: 'json',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function (outputloginVerifiedPromise) {
                    loginVerifiedPromiseResolve(outputloginVerifiedPromise);
                },
                function (errorloginVerifiedPromise) {
                    loginVerifiedPromiseReject(errorloginVerifiedPromise);
                }
            );
        }

        function loginVerifiedPromiseResolve(outputloginVerifiedPromise) {
            console.log("in loginVerifiedPromiseResolve");
            postal = outputloginVerifiedPromise.personalInfo.postal;
            country = outputloginVerifiedPromise.personalInfo.country;
            city = outputloginVerifiedPromise.personalInfo.city;
            street = outputloginVerifiedPromise.personalInfo.street;
            state = outputloginVerifiedPromise.personalInfo.state;
            firstName = outputloginVerifiedPromise.personalInfo.firstName;
            lastName = outputloginVerifiedPromise.personalInfo.lastName;
            phone = outputloginVerifiedPromise.personalInfo.phone;
            cardType = outputloginVerifiedPromise.billingInfo.cardType;
            cardNumber = outputloginVerifiedPromise.billingInfo.cardNumber;
            expiryDate = outputloginVerifiedPromise.billingInfo.expiryDate;

            taxData = {"city": city, "country": country, "postal": postal, "state": state, "street": street};
            taxPromiseVerifiedUser();

            orderData = {
                "userid": outputloginVerifiedPromise.userid,
                "products": [
                    {
                        "productid": 1000,
                        "priceid": 1000
                    }
                ]
            };
            orderPromise();

            verifiedUserUpdateDisplay();
        }



        function loginVerifiedPromiseReject(errorLoginVerified){
            console.log("in loginVerifiedPromiseReject");
            $("#invalidUser-div").hide();
            if (isUnauthorizedUser(errorLoginPromise)) {
                $("#invalidUser-div").text('Invalid username or password. If new user please enter confirm password.');
                $("#invalidUser-div").show();
            }
            if ((errorLoginPromise)) {
                loginVerifiedPromiseRetry();
            }
            resetLoginform();
        }


        var loginVerifiedPromiseRetry = function () {
            return Q($.ajax({
                url: loginAPIUrl,
                type: 'POST',
                data: JSON.stringify(loginData),
                dataType: 'json',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function (outputLoginPromise) {
                    loginVerifiedPromiseResolve(outputLoginPromise);
                },
                function (errorLoginPromise) {
                    loginVerifiedPromiseRetryReject(errorLoginPromise);
                }
            );
        }

        var loginVerifiedPromiseRetryReject = function (errorLoginPromise) {
            $("#invalidUser-div").hide();
            if (isUnauthorizedUser(errorLoginPromise)) {
                $("#invalidUser-div").text('Invalid username or password. If new user please enter confirm password.');
            }
            if (requestTimeOut(errorLoginPromise)) {
                $("#invalidUser-div").text('Request Timed out. Please try again');
            }
            $("#invalidUser-div").show();
            resetLoginform();
        }


        var orderPromise = function () {
            console.log("in orderPromise");
            return Q($.ajax({
                url: orderAPIUrl,
                type: 'POST',
                data: JSON.stringify(orderData),
                dataType: 'json',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function (outputOrderPromise) {
                    orderPromiseResolve(outputOrderPromise);
                },
                function (errorOrderPromise) {
                    orderPromiseReject(errorOrderPromise);
                }
            );
        }

        function orderPromiseResolve(outputOrderPromise) {
            console.log("in orderPromiseResolve");
            orderId = outputOrderPromise.orderid;
            cybersourceData = orderId;
            console.log(orderId);
            cybersourcePromise();
        }

        function orderPromiseReject(errorOrderPromise) {
           // console.log("in orderPromiseReject");
            console.log(errorOrderPromise);
        }


        var cybersourcePromise = function(){
            console.log("in cybersourcePromise");
            return Q($.ajax({
                url: cybersourceAPIUrl,
                type: 'POST',
                data: cybersourceData,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            })).then(
                function (outputCybersourcePromise) {
                    cyberSourcePromiseResolve(outputCybersourcePromise);
                },
                function (errorCybersourcePromise) {
                    cyberSourcePromiseReject(errorCybersourcePromise);
                }
            );
        }

        function cyberSourcePromiseResolve(outputCybersourcePromise){
            console.log("cybersource success");
        }

        function cyberSourcePromiseReject(errorCybersourcePromise){
            console.log("cybersource reject");
        }


        var taxPromiseVerifiedUser = function(){
            console.log("in taxPromiseVerifiedUser");
            return Q($.ajax({
                url: 'http://api.local/tax.php',
                type: 'GET',
                data:taxData
            })).then(
                function(outputTaxPromiseVerifiedUser){taxPromiseVerifiedUserResolve(outputTaxPromiseVerifiedUser);},
                function(errorTaxPromiseVerifiedUser){taxPromiseVerifiedUserReject(errorTaxPromiseVerifiedUser);}
            );
        }

        function taxPromiseVerifiedUserResolve(outputTaxVerified){
            console.log("in taxPromiseVerifiedUserResolve");
            console.log(outputTaxVerified);
        }

        function taxPromiseVerifiedUserReject(errorTaxVerified){
            console.log("in taxPromiseVerifiedUserReject");
            console.log(errorTaxVerified);
        }

        var isSetInput = function (fieldid) {
            if ($(fieldid).val()) {
                if ($(fieldid).valid()) {
                    console.log("valid" + fieldid);
                    return true;
                }
            }
            return false;
        }

        var isUnauthorizedUser = function (error) {
            if (error.status == '401') {
                return true;
            }
            return false;
        }

        var requestTimeOut = function (error) {
            if (error.status == '408') {
                return true;
            }
            return false;
        }

        var resetLoginform = function () {
            if (!$('#cpassword').valid()) {
                $('#cpassword').removeClass("error");
                $('label[for=cpassword]').remove();
            }
            if (!$('#email').valid()) {
                $('#email').removeClass("error");
                $('label[for=email]').remove();
            }
            if (!$('#password1').valid()) {
                $('#password1').removeClass("error");
                $('label[for=password1]').remove();
            }
            if (!$('#uname').valid()) {
                $('#uname').removeClass("error");
                $('label[for=username]').remove();
            }

        }

        var verifiedUserUpdateDisplay= function(){
            //console.log("in verifiedUserUpdateDisplay");
            $('.checkout-title').html('Hello '+ firstName+ '.Complete your purchase below.');
            $(".LOGGED_IN").toggle("slide");
            $(".USER").each(function(){
                $(this).show("slide");
            });

            $('#verifiedUserName').text(firstName +" " + lastName);
            $('#verifiedUserStreet').text(street);
            $('#verifiedUserCityStatePostal').text(city +", "+state +" "+postal);
            $('#verifiedUserPhoneNumber').text(phone);
            $("#verifiedUserCardType").text(cardType);
            $("#verifiedUserCardNumber").text("xxxx xxxx xxxx "+cardNumber);
            $("#verifiedUserExpDate").text(expiryDate);

            $(".USER_ADD_ADDRESS").change(function() {
                useNewAddress = ! useNewAddress;
                $(".USER_ADDRESS").toggle("slide");
                $(".USER_ADDRESS_NEW").toggle("slide");
            });
            $(".USER_BILLING_ADDRESS_SAME").change(function() {
                isNewBillingAddress = ! isNewBillingAddress;
                $(".USER_BILLING_ADDRESS_NEW").toggle("slide");
            });
            $(".USER_CC_ADD_NEW").change(function() {
                isNewCreditCard = ! isNewCreditCard;
                $(".USER_CC").toggle("slide");
                $(".USER_CC_NEW").toggle("slide");
            });
            $(".TAX_EXEMPT").change(function() {
                isTaxExempt = ! isTaxExempt;
            });
            $(".TAC").change(function() {
                isAgreeTAC = ! isAgreeTAC;
            });
        }

        // Public API
        return {
            validate: validate,
            addPasswordStrengthMeter: addPasswordStrengthMeter,
            loginUser : loginUser
        };

    })();

    login.addPasswordStrengthMeter();
    login.validate();
    login.loginUser();

});