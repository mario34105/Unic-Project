<?php 
	require_once"db.php";
	require_once"twig.php";

		$conn = konek_db();
			$query = $conn->prepare("select image,id from project order by id desc limit 8");
			$result = $query->execute();
			$rows = $query->get_result();

			$project = array();
			while ($row = $rows->fetch_array()) {
				
				$image = $row["image"];
				if($image == null || $image == ""){
					$image = "image/projects/no.jpg";
				}
				else{
					$image = "image/projects/".$row["id"]."/".$row["image"];
				}
				$data = array(
							  "image" => $image		
				 );

				array_push($project,$data);
			}
			echo $twig->render("index.html",array('projects' => $project));
 ?>