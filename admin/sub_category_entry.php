<?php 
	session_start();
	
	if(!isset($_SESSION['usersEmail'])){
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>New Sub Category</title>
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
			<h1>Sub Category Entry</h1>
			<h3><a href="sub_category_list.php">Sub Category List</a> </h3>

			<!-- HTTP : Hypher Text Transfer Protocol, HTTP Methods: POST, GET, PUT, DELETE -->

			<form action="sub_category_save.php" method="post"> 
				<div class="form-group">
					<label for="CategoryId">Category</label>
					<select name="CategoryId" id="CategoryId">
						<option></option>
						<?php 
							include '../db.php';
							$query = "select * from Category";

							$result = mysqli_query($conn, $query);

							while ($row = mysqli_fetch_assoc($result)) {
						?>
						
							<option value="<?=$row['Id']; ?>"><?= $row["Name"];  ?></option>
					

						<?php
							}
						?>
										
					</select>
				</div>
				<div class="form-group">
					<label for="name">Sub Category Name</label>
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