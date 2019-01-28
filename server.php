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
    

   include("constants.php");
   $db = mysqli_connect(SERVER, USER, PASSWORD, DB);

    $errors = 0;
    // receive all input values from the form
    $firstname = $_REQUEST['firstname'];
    $middlename = $_REQUEST['middlename'];
    $lastame = $_REQUEST['lastname'];
    $gender = $_REQUEST['gender'];
    $birthdate = $_REQUEST['birthdate'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $addr = $_REQUEST['addr'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];
    $about = $_REQUEST['about'];


    if(empty($_REQUEST["firstname"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["lastname"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["gender"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["birthdate"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["phone"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["email"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["addr"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["password1"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["password2"]))  
    {  
       $errors =1;  
    }
    if(empty($_REQUEST["about"]))  
    {  
       $errors =1;  
    } 


    if ($errors === 0)
    {
        $sql = "INSERT INTO user (firstname, middlename, lastname, gender, birthdate, phone, email, addr, password1, password2, about) VALUES ('$firstname',
                '$middlename', '$lastame', '$gender', '$birthdate', '$phone', '$email', '$addr', '$password1', '$password2', '$about')";
        if ($db->query($sql) === TRUE){
            echo "Registration successfull.";
        }
    }
    else {
        echo "Unauthorised entry not allowed.";
    }

  
?>  