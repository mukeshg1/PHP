<?php

$dbconn = mysqli_connect('127.0.0.1', 'root', '', 'registration');

if (isset($_POST['login_btn']))
{
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];

    $sql = "select * from user where email = '$loginemail' ";
    if(!$dbconn)
    {
        echo "Error connecting to database..";
    }
    $result = mysqli_query($dbconn,$sql);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
        if ($rows["password1"] === $loginpassword)
        {
            echo "login successfull..<br>";
            echo "Welcome, " . $rows["email"]. "<br>Name: " . $rows["firstname"]. " " . $rows["lastname"]. "<br>";
           
        }
        else
        {
            echo "email or password is invalid.";
        }
    }
    else
    {
        echo "Invalid username or password";
    }
}
?>