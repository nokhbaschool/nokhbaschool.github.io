/*global $,alert, console*/
$(function(){
    'use strict';
    var userError   = true ,
        emailError  = true ,
        msgError    = true ;

        $('.username').blur(function () {
            if ($(this).val().length <= 5) {
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.asterisx').fadeIn(100);
            userError = true;
            } else { //no errors
                $(this).css('border','1px solid #080');
                $(this).parent().find('.custom-alert').fadeOut(200);
                $(this).parent().find('.asterisx').fadeOut(100);
                userError = flase;

            }
            });
    $('.email').blur(function () {
        if ($(this).val() === ''){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.asterisx').fadeIn(100);
            emailError = true ;
        } else {
            $(this).css('border','1px solid #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            $(this).parent().find('.asterisx').fadeOut(100);
            emailError = false;
        }
    });
    $('.message').blur(function (){
        if ($(this).val().length < 10){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.asterisx').fadeIn(100);
            msgError = true;
        }else{
            $(this).css('border','1px solid #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            $(this).parent().find('.asterisx').fadeOut(100);
            msgError = false ;
        }
    });
// submit validation
$('.contact-form').submit(function(e){
    if(userError === true || emailError === true || msgError === true){
        //e.preventDefault();
    $('.username ,.email, .message').blur();
    }
});
});

