<?php 
	require_once('db.php');

	if(isset($_POST["checkAnswer"])){
		$i = 0;
		$correctAnswered = 0;
		$wrongAnswered = 0;

		while(isset($_POST["id".$i])){
			$questionId = $_POST["id".$i];
			$selectedAnswer = $_POST['answer'.$i];

			$query = "select * from Quiz where Id = " . $questionId;

			$result = mysqli_query($conn, $query);

			$row = mysqli_fetch_assoc($result);	

			

			if($row["CorrectAnswer"] == $selectedAnswer){
				$correctAnswered++;
			}else{
				$wrongAnswered++;
			}

			$i++;
			
		}

		echo("You have answered correctly for " . $correctAnswered . " questions and given wrong answer for ". $wrongAnswered . " questions. Percentage of correct answer: ". ($correctAnswered /($correctAnswered + $wrongAnswered) * 100));

		
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
				$query = "select * from Quiz";

				$result = mysqli_query($conn, $query);

				$i = 0;
				while($row = mysqli_fetch_assoc($result)){		
			?>

				<input type="hidden" name="id<?=$i?>" value="<?= $row["Id"];   ?>"/>
				<h4> <?= $row["Question"] ?></h4>
				<input type="radio" name="answer<?=$i?>" value="A">  <?=  $row["AnswerOne"] ?> <br/> <br/>
				<input type="radio" name="answer<?=$i?>" value="B">  <?=  $row["AnswerTwo"] ?> <br/> <br/>
				<input type="radio" name="answer<?=$i?>" value="C">  <?=  $row["AnswerThree"] ?> <br/> <br/>
				<input type="radio" name="answer<?=$i?>" value="D">  <?=  $row["AnswerFour"] ?> <br/> <br/>
			
			<br/>
			<?php 
				$i++;
				}
			?>
			<input type="submit" name="checkAnswer" value="Submit Answer"/> 
		</form>
	</div>
	<div class="footer">
		<p>All rights reserved. Designed and Developed by <strong>SoftSkill First Batch Students</strong></p>
	</div>
</body>
</html>