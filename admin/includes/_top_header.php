<div class="top_header">
	Welcome Admin || <a href="logout.php">Logout</a>
	|| <a href="change_password.php">Change Password</a>

	<?php 
		if(isset($_GET['message'])){
			echo "<p class='error'>". $_GET['message'] ."</p>";
		};
	?>
</div>