<?php
	include '../db.php';

	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$CategoryId = $_POST['CategoryId'];


		$query = "insert into SubCategory (CategoryId, Name) values (". $CategoryId .", '". $name ."')";

		mysqli_query($conn, $query);

		header('location:sub_category_list.php');
	}
	

?>