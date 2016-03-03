$(document).ready(function () {
    var personalInfo = (function () {

        var validate = function() {
            $('#personalinfoform').validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 2
                    },
                    lname:{
                        required: true,
                        minlength: 2
                    },
                    cvv:{
                        required:true,
                        number: true,
                        minlength: 3
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
                    zipcode: {
                        zipcodeCheck: "Please enter valid zipcode"
                    }
                }
            });

        }



        // Public API
        return {
            validate: validate
        };

    })();

    personalInfo.validate();

});