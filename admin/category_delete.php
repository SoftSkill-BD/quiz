<?php
	include '../db.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];		

		$query = "delete from Category where Id = ".$id;

		/*
			For foreign key constraint there are following options-
			on update - restrict, cascade
			on delete - restrict, cascade
		*/

		mysqli_query($conn, $query);

		header('location:category_list.php');
	}

?>