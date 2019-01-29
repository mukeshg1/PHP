<?php

    include("constants.php");
    $dbconn = mysqli_connect(SERVER, USER, PASSWORD, DB);

    $loginemail = mysqli_real_escape_string($dbconn, $_POST['loginemail']);
    $loginpassword = mysqli_real_escape_string($dbconn, $_POST['loginpassword']);

    $sql = "select * from user where email = '$loginemail' ";
    if(!$dbconn)
    {
        echo "Error connecting to database..";
    }
    $result = mysqli_query($dbconn,$sql);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
        $pass = $rows['password1'];
        if (password_verify($loginpassword, $pass ))
        {
            echo "login successfull..<br>";
            echo "Welcome, " . $rows["email"]. "<br>Name: " . $rows["firstname"]. " " . $rows["lastname"]. "<br>";
        }
        else
        {
            echo "email address or password is invalid.";
        }
    }
    else
    {
        echo "Invalid username or password";
    }
?>