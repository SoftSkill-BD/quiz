<?php 
	session_start();

	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="../assets/stylesheets/login.css">
</head>
<body>
	<div class="login-page">
		<h3>Admin Password Change Page</h3>
		<form action="password_change_process.php" method="post">
			<div class="form-group">
				<label for='currentPassword'>
					Current Password
				</label>
				<input type='password' name='currentPassword' id='currentPassword'/>
			</div>
			<div class="form-group">
				<label for='newPassword'>
					New Password
				</label>
				<input type='password' name='newPassword' id='newPassword'/>
			</div>
			<div class="form-group">
				<label for='confirmPassword'>
					Confirm New Password
				</label>
				<input type='password' name='confirmPassword' id='confirmPassword'/>
			</div>
			<input type="submit" name="submit" value="Save Changed Password" class="btn" />
			<br/>
			<?php 
				if(isset($_GET['message'])){
					echo "<p class='error'>". $_GET['message'] ."</p>";
				};
			?>
		</form>
	</div>
</body>
</html>