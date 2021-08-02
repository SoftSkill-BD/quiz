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
			<form action="category_save.php" method="post">
				<div class="form-group">
					<label for="name">Category Name</label>
					<input type="text" id="name" name="name">
				</div>
				<input type="submit" name="save" value="Save">
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