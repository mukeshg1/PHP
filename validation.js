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
            .addClass('has-err');
        },
        unhighlight: function(element) {
          $(element)
            .closest('.form-group')
            .removeClass('has-err');
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
                email: 'please enter a valid email address!'
            },
            birthdate: {
                required: 'please enter your date of birth. ',
            },
            phone: {
                required: 'please enter phone number. ',
            },
            addr: {
                required: 'please enter your address.'
            },
            about:{
                required: 'please write something about yourself.'
            }
        }        
    });
    $('#birthdate').datepicker({ dateFormat: 'dd/mm/yy' });


});