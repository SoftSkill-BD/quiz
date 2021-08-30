<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Quiz-list</title>
		<?php 
			include 'includes/_header_assets.php';
		?>
	</head>
	<body>


		<section class="menu_bar">
			<?php
				include 'includes/_menu.php';
			?>
		</section>

		<h3 style="text-align: center; padding: 10px;"> <a href="quiz_entry.php" >Entry a new Quiz </a> </h3>
		

		<table class="table">
			<thead>
				<tr>
					<th>Category Name</th>
					<th>Subcategory Name</th>
					<th>Quiz</th>
					<th>AnswerOne</th>
					<th>AnswerTwo</th>
					<th>AnswerThree</th>
					<th>AnswerFour</th>
					<th>Correct Answer</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include '../db.php';
					$query = "select q.id, s.CategoryId, c.Name CategoryName,q.id, s.name SubCategoryName, question, answerone, answertwo, answerthree, answerfour, correctanswer from quiz q inner join category c on c.Id = q.CategoryId inner join SubCategory s on s.Id= q.SubcategoryId;";

					$result = mysqli_query($conn, $query);
					

					while ($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td> <?= $row["CategoryName"];  ?>  </td>
						<td> <?= $row["SubCategoryName"];  ?>  </td>
						<td> <?= $row["question"];  ?>  </td>
						<td> <?= $row["answerone"];  ?>  </td>
						<td> <?= $row["answertwo"];  ?>  </td>
						<td> <?= $row["answerthree"];  ?>  </td>
						<td> <?= $row["answerfour"];  ?>  </td>
						<td> <?= $row["correctanswer"];  ?>  </td>

						<td>
							<a href="#">Show</a>
							<a href="#">Edit</a>
						</td>
					</tr>
				<?php 	
					}
				?>
			</tbody>
		</table>
	</body>
</html>