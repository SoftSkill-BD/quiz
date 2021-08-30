<?php 
	session_start();
	
	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Category Show</title>
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
			<h1> Category Show</h1>
			<h3> 
				<a href="category_list.php">Category List</a>
				<a href="category_entry.php">New Category</a> 
			</h3>


			<table class="table" style="width: 50%">				
				<tbody>
					<?php 
						include '../db.php';
						$id = $_GET['id'];

						$query = "select * from Category where Id = " . $id;

						$result = mysqli_query($conn, $query);

						if(mysqli_num_rows($result) == 0){
							echo "No category found with the given Id";
						}else{
							$row = mysqli_fetch_assoc($result);
					?>
						<tr>
							<th>Category Id:</th>
							<td><?= $row["Id"]; ?>
						</tr>
						<tr>
							<th>Category Name:</th>
							<td><?= $row["Name"]; ?>
						</tr>
						<tr>
							<td style="text-align: right;">
								<a href="category_edit.php?id=<?= $row["Id"]; ?>" >Edit</a>
							</td>
							<td>
								<a href="category_delete.php?id=<?= $row["Id"]; ?>">Delete</a>
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