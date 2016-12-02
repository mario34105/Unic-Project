<?php

	session_start(); 
	require_once"db.php";
	require_once"twig.php";

	if(isset($_SESSION["username"])){
		if(isset($_POST["projectname"]) && isset($_POST["clientname"])){
			$projectname = $_POST["projectname"];
			$clientname = $_POST["clientname"];
			$description = $_POST["description"];
			$file_gambar="";
			
			
			$conn = konek_db();
			$query = $conn->prepare("insert into project(projectname,clientname,description) values(?,?,?)");
			$query->bind_param("sss",$projectname,$clientname,$description);
			$result = $query->execute();
			$id = $conn->insert_id;
			
			if(isset($_FILES["images"])){
				if($_FILES["images"]["error"] == 0){
					$image = $_FILES["images"];

					$extension = new SplFileInfo($image['name']);
					$extension = $extension->getExtension();
					$file_gambar = $projectname.".".$extension;
					mkdir('image/projects/'.$id);
					copy ($image['tmp_name'],'image/projects/'.$id.'/'.$file_gambar);
				}
			}
			$query1 = $conn->prepare("update project set image=? where id =?");
			$query1->bind_param("si",$file_gambar,$id);
			$result1 = $query1->execute();
			header("location:admin.php");
		}
		else{
			echo $twig->render("add.html");
		}
	}else{
		header("location:login.php");
	}
 ?>