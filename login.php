<?php 
	
	session_start();

	require_once "db.php";

	if(isset($_GET["username"]) && isset($_GET["password"])){
		$username = $_GET["username"];
		$password = $_GET["password"];

		$conn = konek_db();
		$query = $conn->prepare("select * from user where username=? and password=?");
		$query->bind_param("ss",$username,sha1($password));
		$query->execute();

		$rows = $query->get_result();
		if($rows->num_rows >0){
			$_SESSION["username"] = $username;
			echo "1";
		}
		else{
			echo "0";
		}

	}
	else{
		if(isset($_SESSION["username"])){
			header("location:admin.html");
		}
		else{
			header("location:login.html");
		}
	}
 ?>