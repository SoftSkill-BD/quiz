<?php
	session_start(); 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$emailAddress = $_POST['emailAddress'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		if($password == $confirmPassword){

		}else{
			$_SESSION['name'] = $name;
			$_SESSION['emailAddress'] = $emailAddress;
			header('location: registration.php?error=password did not match');
		}
	}

?>