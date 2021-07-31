<?php 
	require_once('db.php');

	if(isset($_POST["checkAnswer"])){
		$questionId = $_POST["id"];
		$selectedAnswer = $_POST['answer'];

		$query = "select * from Quiz where Id = " . $questionId;

		$result = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($result);	

		$answerCorrect = false;

		if($row["CorrectAnswer"] == $selectedAnswer){
			$answerCorrect = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz | Home Page</title>
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
		<form action="" method="post">
			<?php
				$query = "select * from Quiz limit 1";

				$result = mysqli_query($conn, $query);

				$row = mysqli_fetch_assoc($result);				
			?>

			<input type="hidden" name="id" value="<?= $row["Id"];   ?>"/>
			<h4> <?= $row["Question"] ?></h4>
			<input type="radio" name="answer" value="A">  <?=  $row["AnswerOne"] ?> <br/> <br/>
			<input type="radio" name="answer" value="B">  <?=  $row["AnswerTwo"] ?> <br/> <br/>
			<input type="radio" name="answer" value="C">  <?=  $row["AnswerThree"] ?> <br/> <br/>
			<input type="radio" name="answer" value="D">  <?=  $row["AnswerFour"] ?> <br/> <br/>
			<input type="submit" name="checkAnswer" value="Submit Answer"/> 
			<br/>
			<?php 
				if(isset($answerCorrect)){
					if($answerCorrect == true){
						echo "Congratulations. Your answer is correct.";
					}else{
						echo "Sorry, wrong answer. Please try again.";
					}
				}
			?>
		</form>
	</div>
	<div class="footer">
		<p>All rights reserved. Designed and Developed by <strong>SoftSkill First Batch Students</strong></p>
	</div>
</body>
</html>