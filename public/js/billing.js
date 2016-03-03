$(document).ready(function () {
    var billing = (function () {

        var validate = function() {
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
                        minlength: "Username should be of minimum 2 characters"
                    },
                    ccnumber: {
                        creditcard: "Please enter valid credit card number"
                    },
                    cvv: {
                        minlength: "CVV should contain atleast 3 digits",
                        number: "CVV should contain only numbers"
                    },
                    expdate: {
                        ccexpdate: "Please enter valid expiry date"
                    },
                    zipcode: {
                        zipcodeCheck: "Please enter valid zipcode"
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

            $.validator.addMethod("zipcodeCheck",function(value){
                return /^\d{5}(?:[-\s]\d{4})?$/.test(value);
            });

        }

        var normalizeYear = function(year){
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



        //var isSetInput = function (fieldid) {
        //    if ($(fieldid).val()) {
        //        if ($(fieldid).valid()) {
        //            return true;
        //        }
        //    }
        //    return false;
        //}

        // Public API
        return {
            validate: validate
        };

    })();

    billing.validate();

});