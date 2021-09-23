<!DOCTYPE html>
<html>
<head>
	<title>Movies by Name</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="adminpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<style>
table {
  font-family: courier, sans-serif;
  font-size: 11pt;
  border-collapse: collapse;
  padding: 5px 5px;
  width: 80%;
}
td, th {
  border: 5px solid #000000;
  text-align: left;
  padding: 6px;
}
tr:nth-child(odd) {
  background-color: #F8C471;
}
tr:nth-child(1) {
  background-color: #E74C3C;
}
tr:nth-child(even) {
  background-color: #AED6F1;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
.admindiv{
  margin: 40px 160px;
  border-radius: 5px;
  background-color: #D6D6D6;
  padding: 5px 5px;
}
</style>

</head>
<body>

<nav style="background-color:#DAD4E4;" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">CS306 BingeWatch Admin Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admindirector.php">Directors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminmoviestars.php">Movie Stars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="adminawards.php">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admincompanies.php">Production Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admincategories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home Page</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

<div align="center" class="admindiv">
<p>Selected Awards by name in the database are as follows: </p>
<table>

<tr> <th> ID </th> <th> NAME </th> </tr> 

<?php

include "config.php";

$selection_id = $_POST['names'];


$sql_statement = "SELECT * FROM awards WHERE award_name LIKE '$selection_id%'";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $award_id = $row['award_id'];
  $name = $row['award_name'];





	echo "<tr>" . "<th>" . $award_id . "</th>" .
     "<th>" . $name . "</th>" . 
    "</tr>";
}

?>

</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>