<?php
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