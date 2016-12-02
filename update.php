<?php
		session_start(); 
		require_once"db.php";
		require_once"twig.php";
		
		if(isset($_SESSION["username"])){	
		if(isset($_GET["projectname"]) && isset($_GET["clientname"])){
			$id = $_GET["p"];
			$projectname = $_GET["projectname"];
			$clientname = $_GET["clientname"];
			$description = $_GET["description"];
			$file_gambar="";
			if(isset($_FILES["file"])){
				if($_FILES["file"]["error"] == 0){
					$image = $_FILES["file"];

					$extension = new SplFileInfo($image['name']);
					$extension = $extension->getExtension();
					$file_gambar = $projectname.".".$extension;
					copy ($image['tmp_name'],'image/project/'.$file_gambar);
				}
			}
			$conn = konek_db();
			$query = $conn->prepare("update project (projectname,clientname,description,image) values(?,?,?,?) where id =?");
			$query->bind_param("ssssi",$projectname,$clientname,$description,$file_gambar,$id);
			$result = $query->execute();
			header("location:admin.php");
		}
		else{
			echo $twig->render("edit.html");
		}
	}else{
		header("location:login.php");
	}

?>