
<?php 
require_once("header.php");
 ?>
<!-- sign up success -->
<?php 
if (isset($_REQUEST['loginSuccess'])) {?>
	<div class="container">
		<div class="alert alert-success">
		<strong>Congrats!</strong><span>Your account has been created successfull!</span>
	</div>
	</div>
<?php }
 ?>


<div class="container my-2 ">
	<h2 class="text-center text-muted">Sign up</h2>
	<div class="row justify-content-center m-1">
		<div class="col-md-10 col-lg-5 p-1 p-md-3 border rounded">
			
			<form enctype="multipart/form-data" action="reg_core.php" method="post">

			<!-- invalid username -->
				<?php 
					if (isset($_REQUEST['invalidusername'])) {?>
						<h6 class="text-danger text-center">Invalid Username!</h6>
					<?php }
				 ?>
				 <!-- invalid email -->
				<?php 
					if (isset($_REQUEST['invalidemail'])) {?>
						<h6 class="text-danger text-center">This email address already used!</h6>
					<?php }
				 ?>
				 <!-- not match password -->
				<?php 
					if (isset($_REQUEST['passwordnotmatch'])) {?>
						<h6 class="text-danger text-center">Both password not matched!</h6>
					<?php }
				 ?>
				 <!-- short password -->
				<?php 
					if (isset($_REQUEST['shortpassword'])) {?>
						<h6 class="text-danger text-center">Password at least 6 characters.</h6>
					<?php }
				 ?>

				<div class="form-group">
					<label for="name">Full Name</label>
					<input id="name" name="username" class="form-control" type="text" required>
				</div>
				<div class="form-group">
					<label for="mail">Email address</label>
					<input id="mail" name="email" class="form-control" type="email" required>
				</div>
				<div class="form-group">
					<label for="gen">Gender</label>
					<select class="form-control" name="gender" id="gen" required>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="form-group">
					<label for="roll">Roll No.</label>
					<input id="roll" name="roll" class="form-control" type="phone" required>
				</div>
				<div class="form-group">
					<label for="dep">Department</label>
					<select class="form-control" name="dep" id="dep" required>
						<option value="">Option</option>
						<option value="Computer">Computer</option>
						<option value="Electrical">Electrical</option>
						<option value="Civil">Civil</option>
						<option value="Architecture">Architecture</option>
						<option value="Electronics">Electronics</option>
						<option value="Environmental">Environmental</option>
						<option value="Mechanical">Mechanical</option>
						<option value="Automobile">Power (Automobile & RA)</option>
						<option value="Nontech">NonTech Dept.</option>
					</select>
				</div>
				<div class="form-group">
					<label for="occupation">Occupation</label>
					<input id="occupation" name="occupation" class="form-control" type="text" required>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input class="form-control" name="pwd" type="password" id="pass" required>		
				</div>
				<div class="form-group">
					<label for="pass2">Confirm Password</label>
					<input class="form-control" name="pwd2" type="password" id="pass2" required>		
				</div>
				<div class="form-group">
					<label for="dp">Photo</label>
					<input class="form-control" name="profile" type="file" class="form-control-file" id="dp" required>
				</div>
				
				<div class="form-group mt-3">
					<center>
						<button type="submit" class="btn btn-dark">Submit</button>
					</center>
				</div>


			</form>
		</div>
	</div>
</div>



<?php 

require_once("footer.php");
 ?>