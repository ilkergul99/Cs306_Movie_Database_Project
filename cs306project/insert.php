<?php

include "config.php";

if (isset($_POST['title'])){

	if(empty($_POST['duration']) || empty($_POST['description']) || empty($_POST['title']) || empty($_POST['budget']) || empty($_POST['country']) || empty($_POST['releasedate']) || empty($_POST['IMDB_score']) || empty($_POST['boxoffice']))
	{
		echo "<script>alert('You have not filled the all necessary fields');</script>";
		echo"<script>location.assign('admin.php')</script>";
	}
	else
	{
		$title = $_POST['title'];
		$duration = $_POST['duration'];
		$budget = $_POST['budget'];
		$country = $_POST['country'];
		$releasedate = $_POST['releasedate'];
		$IMDB = $_POST['IMDB_score'];
		$boxoffice = $_POST['boxoffice'];
		$description = $_POST['description'];


		$sql_statement = "INSERT INTO movies(title, release_date, budget, duration, country, IMDB_score, boxoffice_score, description) 
					VALUES ('$title', $releasedate , $budget, '$duration', '$country' , $IMDB , $boxoffice, '$description' )";

		$result = mysqli_query($db, $sql_statement);

		header ("Location: admin.php");
	}

}

else
{

	echo "The form is not set.";

}


?>