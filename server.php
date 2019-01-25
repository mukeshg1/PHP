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
    $email    = "";
     


    if (isset($_POST['submit_btn']))
    {
        $errors = 0;
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


        if(empty($_POST["firstname"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["lastname"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["gender"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["birthdate"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["phone"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["email"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["addr"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["password1"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["password2"]))  
        {  
           $errors =1;  
        }
        if(empty($_POST["about"]))  
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
    }

        /*if (empty($firstname)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }*/


        
  
?>  