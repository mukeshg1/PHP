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


      $password1 = password_hash($password1, PASSWORD_BCRYPT);
      $password2 = password_hash($password2, PASSWORD_BCRYPT);
      $sql = "INSERT INTO user (firstname, middlename, lastname, gender, birthdate, phone, email, addr, password1, password2, about) VALUES ('$firstname',
            '$middlename', '$lastame', '$gender', '$birthdate', '$phone', '$email', '$addr', '$password1', '$password2', '$about')";
      if ($db->query($sql) === TRUE){
         echo "<p style='color:green;'> Registration successfull</p>";
      }
      else 
      {
         echo "<p style='color:red;'>Error:".mysqli_error($db)."</p>";
      }
    
  
?>  