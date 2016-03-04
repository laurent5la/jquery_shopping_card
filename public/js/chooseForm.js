$(document).ready(function () {
    var chooseForm = (function () {

        var titleClick = function(){
            $('.login').click(function(){

                $('.create').toggleClass("clickable");
                $('.login').toggleClass("clickable");
                $(".NEW_USER").hide("slide");
                if(isNewUser){
                    isNewUser = !isNewUser;
                }
                //console.log("isNewUser:  "+isNewUser);
            });
            $('.create').click(function(){
                $('.login').toggleClass("clickable");
                $('.create').toggleClass("clickable");
                $(".NEW_USER").show("slide");
                if(!isNewUser){
                    isNewUser = !isNewUser;
                }
                //console.log("isNewUser:  "+isNewUser);
            });

        }
        // Public API
        return {
            titleClick: titleClick
        };

    })();
    chooseForm.titleClick();
});