<?php 
	require_once "db.php";

	$conn = konek_db();

	$id = $_GET["p"];

	$query = $conn->prepare("delete from project where id=?");
	$query->bind_param("i",$id);
	$result = $query->execute();

	
 ?>