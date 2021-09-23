<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="adminpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#textboxid
{
    width: 50%;
    font-family: courier;
    font-size:13pt;

}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

select {
        width: 150px;
        margin: 10px;
    }

input[type=submit]:hover {
  background-color: #45a049;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-family: courier;
  display: inline-block;
  font-size: 16px;
  margin: 6px 4px;
  cursor: pointer;
}

.button1 {width: 130px;} /* Blue */

.admindiv{
  margin: 40px 160px;
  border-radius: 5px;
  background-color: #D6D6D6;
  padding: 5px 5px;
}

</style>


</head>
<body style="background-color:powderblue;">

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
<p>Available Awards in the database are as follows: </p>


<?php 

include "config.php";

include('info/awards.php');

?>
<br>
<form action="deleteaward.php" method="POST">
<label for="ids">Please choose a award id from the list to delete from the database</label>
<br>
<select name="ids">


<?php

$sql_command = "SELECT award_id FROM awards";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
  $id = $id_rows['award_id'];
  echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button class= "button button1">DELETE</button>
</form>

</div>
<div align="center" class="admindiv">

<p> To insert an award please fill the following attributes</p>


<form action="insertaward.php" method="POST">

<br>
<label for="award">Please enter the award information:</label> <br>
<input id="textboxid" type="text" name="id" placeholder="ID of the award"><br>
<input id="textboxid" type="text" name="name" placeholder="Name of the award"><br>



  <button class= "button button1">SEND</button>
</form>


</div>
<div align="center" class="admindiv">

<br>
<form action="selectaward.php" method="POST">
<label for="names">Please choose an award name from the list to query from the database</label>
<<br>
<select name="names">


<?php

$sql_command = "SELECT DISTINCT award_name FROM awards";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
  $id = $id_rows['award_name'];
  echo "<option value=$id>". $id."</option>";
}

?>
</select>

<button class= "button button1">SELECT</button>
</form>

</div>




<footer>
  <p class="p-3 bg-dark text-white text-center">CS306 BingeWatch - 2021</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>