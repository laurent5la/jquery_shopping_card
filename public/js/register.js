$(document).ready(function () {
    var register = (function () {

        var isSetform = function (formId) {
            var isSet = true;
            $(formId).find("input").each(function (){
              if(!$(this).val() && !$(this).valid()){
                  isSet = false;
              }
            });
            return isSet;
        }



        var registerUser = function(){
            console.log("in register");
            var endpoint = checkBillingAddressSame();
            console.log("endpoint"+ endpoint);

            $(endpoint).blur(function(){
                if(isNewUser){
                    if(isSetform('#loginform')){
                        console.log("login form set")
                    }
                    if(isSetform('#billingform')){
                        console.log("billing form set")

                    }
                    if(isSetform('#personalinfoform')){
                        console.log("personalinfo form set")

                    }

                }
            });
        }

        var checkBillingAddressSame = function (){
            var sameAddresscheckboxChecked = false;
            $('input[type="checkbox"]').change(function () {

                if($(this).attr("value")=="addressSame"){
                    if($(this).prop("checked") == true) {
                        $('#billingform__input--div-address').hide();
                        sameAddresscheckboxChecked = true;
                    }
                    if($(this).prop("checked") == false){
                        $('#billingform__input--div-address').show();
                        sameAddresscheckboxChecked = false;
                    }
                }
            });

            if(sameAddresscheckboxChecked){
                return '#cvv';
            }else{
                return '#number';
            }

        }


        // Public API
        return {
            registerUser: registerUser
        };

    })();

    //register.checkBillingAddressSame();
    register.registerUser();

});