<?php
	session_start();
	 
	require_once "db.php";
	require_once "twig.php";

	if(isset($_SESSION["username"])){
		$conn = konek_db();

		if (isset($_POST["update"])) {
			$id = $_POST["hidden"];
			$projectname = $_POST["projectname"];
			$clientname = $_POST["clientname"];
			$description = $_POST["description"];

			if(isset($_FILES["images"])){
				
				$image = $_FILES["images"];
				
				if($_FILES["images"]["error"] == 0){
					$image = $_FILES["images"];
					

					$extension = new SplFileInfo($image['name']);
					
					$extension = $extension->getExtension();
					
					$file_gambar = $projectname.".".$extension;
					copy ($image['tmp_name'],'image/projects/'.$id.'/'.$file_gambar);
					
				}
				else{
					header("location:edit.php");
				}
			}
			else{

			$query = $conn->prepare("select * from project where id = $id");
			$result = $query->execute();
			$rows = $query->get_result();
			$row = $rows->fetch_array();
			$file_gambar = $rows["image"];
			}

			$conn = konek_db();
			$query = $conn->prepare("update project set projectname=?,clientname=?,description=?,image=? where id = ?");
			$query->bind_param("ssssi",$projectname,$clientname,$description,$file_gambar,$id);
			$result = $query->execute();
			header("location:admin.php");	
		}
		else{
		$id = $_GET["p"];
			$query = $conn->prepare("select * from project where id = $id");
			$result = $query->execute();
			$rows = $query->get_result();
			$row = $rows->fetch_array();
			$project = array();
			
				$id = $row["id"];
				$nama = $row["projectname"];
				$client = $row["clientname"];
				$desc = $row["description"];
				$image = $row["image"];
				if($image == null || $image == ""){
					$image = "image/projects/no.jpg";
				}
				else{
					$image = "image/projects/".$id."/".$row["image"];
				}
				$data = array("id" => $id ,
							  "projectname" => $nama ,
							  "clientname" => $client ,
							  "description" => $desc ,
							  "image" => $image		
				 );

				array_push($project,$data);
			
				echo $twig->render("edit.html",array('projects' => $project));
		}
	}
	else{
		header("location:login.php");
	}

 ?>