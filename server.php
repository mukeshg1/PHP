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
    

   $errors = 0;
   include("constants.php");
   $db = mysqli_connect(SERVER, USER, PASSWORD, DB);

   
   // receive all input values from the form
   $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
   $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
   $lastame = mysqli_real_escape_string($db, $_POST['lastname']);
   $gender = mysqli_real_escape_string($db, $_POST['gender']);
   $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
   $phone = mysqli_real_escape_string($db, $_POST['phone']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $addr = mysqli_real_escape_string($db, $_POST['addr']);
   $password1 = mysqli_real_escape_string($db, $_POST['password1']);
   $password2 = mysqli_real_escape_string($db, $_POST['password2']);
   $about = mysqli_real_escape_string($db, $_POST['about']);


   foreach($_POST as $key => $value) 
	{
		if (empty($value))
		{
			$errors = 1;
		}
   }
   
   if ($errors == 0)
   {
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
   }
    
  
?>  