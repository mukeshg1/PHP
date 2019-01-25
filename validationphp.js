/**
* File Name    : validation.js
* File Path    : C:\xampp\htdocs\PHP
* Description  : Validation file to validate form data 
* Created date : 23/01/2019
* @Author      : Mukesh
* Comments     : Real time validation of data entered through form
*
*/

$(function() {
    var form = $( "#register_form" );
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
    (form).validate({
        rules: {
            firstname: {
                required: true,
                nowhitespace: true,
                lettersonly: true
            },
            lastname: {
                required: true,
                nowhitespace: true,
                lettersonly: true
            },
            email: {
                required: true,
                email: true
            },
            password1: {
                required: true
            },
            password2: {
                required: true,
                equalTo: "#password1"
            },
            birthdate: {
                required: true
            },
            phone: {
                required: true,
                digits: true
            },
            addr: {
                required: true
            },
            about: {
                required: true
            }

        },
        messages: {
            firstname: {
                required: 'Please enter firstname.',
                nowhitespace: 'firstname cannot contain any spaces.',
                lettersonly: 'firstname should only contain letters.'
            },
            lastname: {
                required: 'Please enter lastname. ',
                nowhitespace: 'lastname cannot contain any spaces.',
                lettersonly: 'lastname should only contain letters.'
            },
            email: {
                required: 'please enter an email address.',
                email: 'Please enter a valid email address!'
            },
            password1:{
                required: 'Please enter a password.'
            },
            password2: {
                required: 'Please re-enter password.',
                equalTo: 'Password doesnot match, please enter same password.'
            },
            birthdate: {
                required: 'Please enter your date of birth. '
            },
            phone: {
                required: 'Please enter phone number. '
            },
            addr: {
                required: 'Please enter your address.'
            },
            about:{
                required: 'Please write something about yourself.'
            }
        }        
    });
    $('#birthdate').datepicker({ dateFormat: 'dd/mm/yy' });


});