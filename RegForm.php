<?php?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    
    <title>Registration Page</title>
  </head>
  <body>
    <h1><center>Register Yourself!</center></h1>
    <form id="register_form" style="background-color: #fffdfd;margin:10px;padding: 10px">
        <label><i>Fill out the form to register</i></label>
        <div class="form-inline">
			<div class="form-group col-md-4">
				<label for="inputName">First Name<sup>*</sup></label>
				<input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="First Name">
			
			</div>
			<div class="form-group col-md-4">
				<label for="inputName">Middle Name</label>
				<input type="text" class="form-control" name="middlename" autocomplete="off" placeholder="Middle Name">
			</div>
			<div class="form-group col-md-4">
				<label for="inputName">Last Name<sup>*</sup></label>
				<input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="Last Name">
			</div>
		</div>
		<div class="form-inline">
			<div class='form-group col-md-4'>
				<label for="inputGender">Gender</label>
				<select class="form-control" autocomplete="off" id="sex">
					<option selected disabled>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option><br>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputdob">Birth Date<sup>*</sup></label>
				<input type="text" maxlength="10" class="form-control" placeholder="dd/mm/yyyy" name="birth_date" autocomplete="off">
			</div>
			<div class="form-group col-md-4">
				<label for="inputPhone">Phone Number<sup>*</sup></label>
				<input type="text" maxlength="10" autocomplete="off" class="form-control" name="phone_number" placeholder="Mobile Number">   
			</div>       
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="country">Country<sup>*</sup></label>
				<select class="form-control" name="country" id="country">
					<option value="">Select country</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="state">State<sup>*</sup></label>
				<select id="state" class="form-control">
					<option selected>Select state</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="city">City<sup>*</sup></label>
				<select class="form-control" id="city">
					<option value="">Select city</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email<sup>*</sup></label>
				<input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email">
			</div>
			<div class="form-group col-md-6">
			<label for="inputAddress">Address<sup>*</sup></label>
			<input type="text" class="form-control" id="user_addr" autocomplete="off" placeholder="Address">
			</div>
		</div>
		<div class="form-group col-md-12">
			<label for="inputAbout">About Yourself<sup>*</sup></label>
			<textarea id="about_user" name="about_user" class="form-control" rows="5" cols="20" autocomplete="off" placeholder="Write about yourself here..."></textarea>
        </div>
        <div class="form-group col-md-12">          
            <input button="submit" id="submit_btn" value="Register" class="btn btn-primary btn-lg btn-block btn-huge">
            <input type="reset" id="reset_btn" value="Reset" class="btn btn-secondary btn-lg btn-block btn-huge">
        </div>  
    </form>
</body>
</html>
