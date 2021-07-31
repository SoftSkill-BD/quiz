<?php 
	session_start();
	include('../db.php');
	if(isset($_POST['submit'])){
		$emailAddress = $_POST['emailAddress'];
		$password = $_POST['password'];


		$query = "select * from Admin where EmailAddress  = '". $emailAddress ."' and Password = '". $password  ."'";

		$result = mysqli_query($conn, $query);


		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_assoc($result);

			$_SESSION['usersEmail']  = $row['EmailAddress'];
			$_SESSION['fullName'] = $row['Name'];

			header('location:index.php');

		}else{
			header('location:login.php?message=1');
		}
	}
?>