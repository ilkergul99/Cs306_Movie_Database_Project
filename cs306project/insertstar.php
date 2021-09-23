<?php

include "config.php";

if (isset($_POST['name'])){

	if(empty($_POST['age']) || empty($_POST['gender']) || empty($_POST['nationality']) || empty($_POST['id']) )
	{
		echo "<script>alert('You have not filled the all necessary fields');</script>";
		echo"<script>location.assign('adminmoviestars.php')</script>";
	}
	else
	{
		$name = $_POST['name'];
		$age = $_POST['age'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
		$nationality = $_POST['nationality'];



		$sql_statement = "INSERT INTO performers(performer_id, performer_name, gender, performer_age, nationality) 
					VALUES ($id, '$name' , '$gender', $age , '$nationality' )";

		$result = mysqli_query($db, $sql_statement);

		header ("Location: adminmoviestars.php");
	}

}

else
{

	echo "The form is not set.";

}


?>