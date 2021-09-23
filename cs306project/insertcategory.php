<?php

include "config.php";

if (isset($_POST['name'])){

	if(empty($_POST['name']) || empty($_POST['id']) )
	{
		echo "<script>alert('You have not filled the all necessary fields');</script>";
		echo"<script>location.assign('admincategories.php')</script>";
	}
	else
	{
		$name = $_POST['name'];
		$id = $_POST['id'];




		$sql_statement = "INSERT INTO categories(category_id, category_name) 
					VALUES ($id, '$name')";

		$result = mysqli_query($db, $sql_statement);

		header ("Location: admincategories.php");
	}

}

else
{

	echo "The form is not set.";

}


?>