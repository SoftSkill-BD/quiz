<?php 
	session_start();
	
	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
			<h1> Category Entry</h1>
			<form action="category_update.php" method="post">
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
					<div class="form-group">
						<label for="name">Category Name</label>
						<input type="text" id="name" name="name" value="<?= $row["Name"]; ?>">
						<input type="hidden" name="id" value="<?= $row["Id"]; ?>">
					</div>
					<input type="submit" name="update" value="Update">
				<?php 
					}
				?>	
			</form>

		</div>
	</section>

	<section class="footer">
		<?php 
			include 'includes/_footer.php';
		?>
	</section>
</body>
</html>