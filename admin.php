<?php
	session_start();
	 
	require_once "db.php";
	require_once "twig.php";

	if(isset($_SESSION["username"])){
		$conn = konek_db();
			$query = $conn->prepare("select * from project");
			$result = $query->execute();
			$rows = $query->get_result();

			$project = array();
			while ($row = $rows->fetch_array()) {
				$id = $row["id"];
				$nama = $row["projectname"];
				$client = $row["clientname"];
				$desc = $row["description"];
				$image = $row["image"];
				if($image == null || $image == ""){
					$image = "image/projects/no.jpg";
				}
				else{
					$image = "image/projects/".$row["id"]."/".$row["image"];
				}
				$data = array("id" => $id ,
							  "projectname" => $nama ,
							  "clientname" => $client ,
							  "description" => $desc ,
							  "image" => $image		
				 );

				array_push($project,$data);
			}
			echo $twig->render("admin.html",array('projects' => $project));
	}
	else{
		header("location:login.php");
	}

 ?>