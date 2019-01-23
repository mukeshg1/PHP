<?php
    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    if (isset($_POST['submit_btn'])) {
        // receive all input values from the form
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
        $lastame = mysqli_real_escape_string($db, $_POST['lastname']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);
        $about = mysqli_real_escape_string($db, $_POST['about']);
    }   
?>  