

$(document).ready(function() {

    "use strict";
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
                minlength: 2,
                required: true
            },
            phonenumber:{
                required: true,
                minlength: 10,
                phnocheck: true
            }
        },
        messages: {
            cardname: "Please enter valid username",
            ccnumber: "Please enter valid credit card number",
            cvv: "Please enter valid cvv",
            expdate: "Please enter valid expiry date",
            address: "Please enter address",
            phonenumber: "Please enter valid phonenumber"
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


$.validator.addMethod("phnocheck", function(value) {

        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) ;
    });

});



