$(function(){
  $("#phone_number").blur(function() {
    if($("#phone_number").val().length == 17){
      //make a call to cybersource with all the form data
      var cybersourcePromise = Q($.ajax({url: 'https://testsecureacceptance.cybersource.com/silent/pay',
            type: 'POST',
            data: $('#billingform').serializeObject(),
            headers : {
                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
            }
          })).then(
                    function(outputCybersource){
                      cyberSourceResolve(outputCybersource);
                    },
                    function(errorCybersource){
                      cyberSourceReject(errorCybersource);
                    }
                  );
    }
  });
  function cyberSourceResolve(outputCybersource){
    console.log('cybersource.js - Resolved');

  }
  function cyberSourceReject(errorCybersource){
      console.log('cybersource.js - Error');

  }




});
