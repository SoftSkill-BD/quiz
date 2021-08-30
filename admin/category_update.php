<?php
	include '../db.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		$query = "update Category set Name = '". $name ."' where Id = ".$id;

		mysqli_query($conn, $query);

		header('location:category_show.php?id='.$id);
	}

?>


