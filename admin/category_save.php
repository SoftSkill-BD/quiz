<?php
	include '../db.php';

	if(isset($_POST['save'])){
		$name = $_POST['name'];

		$query = "insert into Category (Name) values ('". $name ."')";

		mysqli_query($conn, $query);

		header('location:category_list.php');
	}
	

?>