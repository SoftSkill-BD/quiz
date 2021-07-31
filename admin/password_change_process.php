<?php 
	session_start();

	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

	include '../db.php';

	if(isset($_POST['submit'])){
		$currentPassword = $_POST['currentPassword'];

		$newPassword = $_POST['newPassword'];

		$confirmPassword = $_POST['confirmPassword'];

		if($newPassword == $confirmPassword){
			$query = "select * from Admin where EmailAddress = '". $_SESSION['usersEmail'] ."' and Password = '". $currentPassword ."'";

			$result = mysqli_query($conn, $query);

			if(mysqli_num_rows($result) == 1){

				$updateQuery = "update Admin set Password = '". $newPassword ."' where EmailAddress = '". $_SESSION['usersEmail'] ."'";

				mysqli_query($conn, $updateQuery);


				header('location:index.php?message=Password changed successfully.');

			}else{
				header('location:change_password.php?message=Wrong current password. Please try again with the correct password.');
			}

			/*echo $newPassword;
			echo "<br/>";
			echo $confirmPassword;
			echo "<br/>";
			echo "Password matches";*/
		}else{
			header('location:change_password.php?message=Password does not match! Please try again.');
		}
	}

?>