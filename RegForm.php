<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    
    <title>Registration Page</title>
  </head>
  <body>
    <h1><center>Register Yourself!</center></h1>
    <form id="register_form" method="post" action="RegForm.php" style="background-color:rgba(245, 227, 225, 0.534);margin:10px;padding: 10px">
        <label><i>Fill out the form to register</i></label>
        <div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputName">First Name<sup>*</sup></label>
				<input type="text" class="form-control" name="firstname" autocomplete="off" placeholder="First Name">
			</div>
			<div class="form-group col-md-4">
				<label for="inputName">Middle Name</label>
				<input type="text" class="form-control" name="middlename" autocomplete="off" placeholder="Middle Name">
			</div>
			<div class="form-group col-md-4">
				<label for="inputName">Last Name<sup>*</sup></label>
				<input type="text" class="form-control" name="lastname" autocomplete="off" placeholder="Last Name">
			</div>
		</div>
		<div class="form-row">
			<div class='form-group col-md-4'>
				<label for="inputGender">Gender</label>
				<select class="form-control" autocomplete="off" name="gender">
					<option selected disabled>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option><br>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputdob">Birth Date<sup>*</sup></label>
				<input type="text" maxlength="10" class="form-control" placeholder="dd/mm/yyyy" id="birthdate" name="birthdate" autocomplete="off">
			</div>
			<div class="form-group col-md-4">
				<label for="inputPhone">Phone Number<sup>*</sup></label>
				<input type="text" maxlength="10" autocomplete="off" class="form-control" name="phone" placeholder="Mobile Number">   
			</div>       
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email<sup>*</sup></label>
				<input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email">
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress">Address<sup>*</sup></label>
				<input type="text" class="form-control" name="address" autocomplete="off" placeholder="Address">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputPassword">Password<sup>*</sup></label>
				<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
			</div>
			<div class="form-group col-md-6">
			<label for="inputRepassword">Repeat Password<sup>*</sup></label>
			<input type="password" class="form-control" name="password2" autocomplete="off" placeholder="Repeat Password">
			</div>
		</div>
		<div class="form-group col-md-13">
			<label for="inputAbout">About Yourself<sup>*</sup></label>
			<textarea name="about" class="form-control" rows="5" cols="20" autocomplete="off" placeholder="Write about yourself here..."></textarea>
		</div>
		<p>
  			Already a member? <a href="login.php">click here to sign in</a>
  		</p>
        <div class="form-group col-md-13">          
            <button name="submit_btn" id="submit_btn" value="Register" class="btn btn-primary btn-lg btn-block btn-huge">Register</button>
        </div>  
	</form>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script language="javascript" type="text/javascript" src="validation.js"></script>    
</body>
</html>
