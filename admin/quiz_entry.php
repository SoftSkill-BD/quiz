<?php
	session_start();
	
	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Quiz Entry</title>
		<?php 
			include 'includes/_header_assets.php';
		?>
	</head>
	<body>
		<section class="top-header">
			<?php 
				include 'includes/_top_header.php';
			?>
		</section>

		<?php
			include 'includes/_menu.php';
		?>

		<div class="wrapper">
				<div class="title">
					Enter your New Data			
				</div>
			<form class="form-group" action="quiz_save.php" method="post">
				<div class="form-group">
				<label for="CategoryId">Category</label>
				<select name="CategoryId" id="CategoryId">
					<option></option>
				<?php 
					include '../db.php';
					$query = "select * from Category";
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_assoc($result)){
				?>		
					<option value="<?=$row['Id']; ?>"><?= $row["Name"]; ?> </option>
				
				<?php 
					}

				?>
				</select><br>
				<label for="SubCategoryId">SubCategory </label>
				<select name="SubCategoryId" id="SubCategoryId">
					<option></option>
					<?php 
						
						$query = "select * from SubCategory";
						$result = mysqli_query($conn, $query);
						while ($row=mysqli_fetch_assoc($result)){
					?>

						<option value="<?=$row['Id'];?>"> <?= $row["Name"];?> </option>
					<?php

						}
					?>
				
				</select>
					<br>
				<label for="quiz">Question</label>

				<textarea type="text" id="quiz" name="Question"></textarea>
				<label for="AnswerOne">AnswerOne (A)</label>
				<input type="text" id="AnswerOne" name="AnswerOne">
				<label for="AnswerTwo">AnswerTwo (B)</label>
				<input type="text" name="AnswerTwo" id="AnswerTwo"> 
				<label for="AnswerThree">AnswerThree (C)</label>
				<input type="text" name="AnswerThree" id="AnswerThree">
				<label for="AnswerFour">AnswerFour (D)</label>
				<input type="text" name="AnswerFour" id="AnswerFour">
				<label>Correct Answer</label>
				<select name="CorrectAnswer">
					<option></option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
				</select>

				<input type="submit" name="save" value="Save">
			
			</form>
		</div>	
	</body>
</html>