
<?php
/**
* File Name    : login.php
* File Path    : C:\xampp\htdocs\PHP
* Description  : Login Form
* Created date : 23/01/2019
* @Author      : Mukesh
* Comments     : Login form
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="stylecss.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <title>Login</title>
  </head>
<body>
    <center>
        <form>
            <h2>Login</h2>
            <div class="col-md-4 login-form-page">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <p>Not a member? <a href="RegForm.php">Register here</a>Forget Password? <a href="#"">Reset here</a>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" />
                </div>
                    
            </div>
        </form>
    </center>
</body>
</html>