<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz | Registration</title>
	<style type="text/css">
		.header, .footer{			
			width: 800px;
			margin:0 auto;
		}

	</style>
</head>
<body>
	<div class="header">
		<h1>Quiz | Test Your Knowledge</h1>
	</div>
	<div class="content">
		<form action="save-registration.php" method="post">
			<div class="form-group">
				<label for="name">Your Name:</label>
				<input type="text" id="name" name="name" required="" value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : '';  ?>">
			</div>
			<div class="form-group">
				<label for="emailAddress">Email  Address</label>
				<input type="email" name="emailAddress" required="" value="<?= isset($_SESSION['emailAddress']) ? $_SESSION['emailAddress'] : '';  ?>">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" required="">
			</div>
			<div class="form-group">
				<label for="confirmPassword">Confirm Password</label>
				<input type="password" name="confirmPassword" required="">
			</div>
			<input type="submit" name="submit" value="Submit"/> 

			<?php 

				if(isset($_GET['error'])){
					echo($_GET['error']);
				}
			?>
		</form>
	</div>
	<div class="footer">
		<p>All rights reserved. Designed and Developed by <strong>SoftSkill First Batch Students</strong></p>
	</div>
</body>
</html>