<?php 
	session_start();
	
	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sub Category List</title>
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
	<section class="content">
		<div class="left">
			<?php 
				include 'includes/_menu.php';
			?>
		</div>
		<div class="right">
			<h1> Sub Category List</h1>
			<h3> <a href="sub_category_entry.php">New Sub Category</a> </h3>


			<table class="table">
				<thead>
					<tr>
						<th>Category</th>
						<th>Sub Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						include '../db.php';
						$query = "select s.Id, c.Name CategoryName, s.Name from SubCategory s inner join Category c on s.CategoryId = c.Id ";

						$result = mysqli_query($conn, $query);

						while($row = mysqli_fetch_assoc($result)){
					?>
							<tr>
								<td><?= $row["CategoryName"]; ?></td>
								<td><?= $row["Name"]; ?></td>
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

		</div>
	</section>

	<section class="footer">
		<?php 
			include 'includes/_footer.php';
		?>
	</section>
</body>
</html>