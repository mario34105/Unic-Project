<?php 
	require_once "db.php";

	$conn = konek_db();

	$id = $_GET["p"];
	$query1 = $conn->prepare("select * from project where id=?");
	$query1->bind_param("i",$id);
	$result1 = $query1->execute();

	$rows = $query1->get_result();
	$row = $rows->fetch_array();
	$image = $row["image"];
	echo $image;
	unlink("image/projects/".$id."/".$image);
	rmdir("image/projects/".$id);

	$query = $conn->prepare("delete from project where id=?");
	$query->bind_param("i",$id);
	$result = $query->execute();

	

	
 ?>