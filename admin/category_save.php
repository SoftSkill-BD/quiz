<?php
	//var_dump($_POST);
	$conn = mysqli_connect("localhost", "root", "", "softskill");	

	$query = "insert into Category (Name) values ('" . $_POST["category_name"] . "')";

	mysqli_query($conn, $query);

	//PHP: Array, Associative Array
	//While Loop

	//$_GET
	//$_REQUEST

?>