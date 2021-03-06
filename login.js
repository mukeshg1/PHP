/**
* File Name    : login.js
* File Path    : C:\xampp\htdocs\PHP
* Description  : Validation file to validate form data 
* Created date : 23/01/2019
* @Author      : Mukesh
* Comments     : Real time validation of data entered through form
*
*/

var login = (function(){

    var loginform = $("#loginform");
    $.validator.setDefaults({
        highlight: function(element) {
          $(element)
            .closest('.form-group')
            .addClass('err');
        },
        unhighlight: function(element) {
          $(element)
            .closest('.form-group')
            .removeClass('err');
        },
        success: "valid"
    });
    (loginform).validate({
        rules:{
            loginemail: {
                required: true,
                email: true
            },
            loginpassword: {
                required: true
            }
        },
        messages:{
            loginemail : {
                required: "Please enter email.",
                email: "Please enter valid email."
            },
            loginpassword: "Please enter password."
        }
    });

    /*$("#login_btn").click(function(){
        if (loginform.valid() == true)
        {
            $(".preload").fadeOut(2000, function(){
                $(".body").fadeIn(1000);
            });
            $.ajax({
                type: "POST",
                url: "loginvalidate.php",
                data:{
                    loginemail: $("#loginemail").val(),
                    loginpassword: $("#loginpassword").val()
                }
            });
            return false;
        }
    });*/
    return{

    }
})();