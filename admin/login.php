<?php 
	session_start();
	// $_SESSION['username']  = "Md. Mufachir Hossain";

	//session_destroy();

	if(isset($_SESSION['usersEmail'])){
		header('location: index.php');
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/stylesheets/login.css">
</head>
<body>
	<div class="login-page">
		<h3>Admin Login Page</h3>
		<form action="check-user.php" method="post">
			<div class="form-group">
				<label for='emailAddress'>
					Email Address
				</label>
				<input type='email' name='emailAddress' id='emailAddress'/>
			</div>
			<div class="form-group">
				<label for='password'>
					Password
				</label>
				<input type='password' name='password' id='password'/>
			</div>
			<input type="submit" name="submit" value="Login" class="btn" />
			<br/>
			<?php 
				if(isset($_GET['message'])){
					echo "<p class='error'>Wrong email address or password. Please try again.</p>";
				};
			?>
		</form>
	</div>	
</body>
</html>