<?php
/**
* File Name    : server.php
* File Path    : C:\xampp\htdocs\PHP
* Description  : PHP file to insert the form data into table
* Created date : 23/01/2019
* @Author      : Mukesh
* Comments     : The data entered through form is sent to MySQL database.
*/
    //connect to the database
    $db = mysqli_connect('127.0.0.1', 'root', '', 'registration');


        // receive all input values from the form
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastame = $_POST['lastname'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $addr = $_POST['addr'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $about = $_POST['about'];

        $sql = "INSERT INTO user (firstname, middlename, lastname, gender, birthdate, phone, email, addr, password1, password2, about) VALUES ('$firstname',
                '$middlename', '$lastame', '$gender', '$birthdate', '$phone', '$email', '$addr', '$password1', '$password2', '$about')";
        if ($db->query($sql) === TRUE){
            echo "New Record added.";
        } else {
            echo "error!! data not added";
        }
  
?>  