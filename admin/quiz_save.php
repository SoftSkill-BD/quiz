<?php 
	session_start();
	include ('../db.php');
	if(!isset($_SESSION['usersEmail'])){
		header('location:admin_login.php');
	}

	if(isset($_POST['save'])){
		//$name = $_POST['CategoryId'];
		$query = "insert into quiz(CategoryId, SubCategoryId, Question, AnswerOne, AnswerTwo, AnswerThree, AnswerFour, CorrectAnswer)
		values(" . $_POST["CategoryId"] . ", ". $_POST['SubCategoryId'] .", '" . $_POST["Question"]  . "', '". $_POST["AnswerOne"] ."', '". $_POST["AnswerTwo"] ."', '". $_POST["AnswerThree"] ."', '". $_POST["AnswerFour"] ."','". $_POST["CorrectAnswer"] ."')";

		mysqli_query($conn, $query);

		header('location:quiz_list.php');

	}
	
?>-