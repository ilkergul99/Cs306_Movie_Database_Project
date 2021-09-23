<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>

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
</style>

</head>
<body>


<table>

<tr> <th> ID </th> <th> NAME </th> <th> YEAR </th> </tr> 

<?php

include "config.php";

$selection_id = $_POST['years'];

$sql_statement = "SELECT * FROM awards WHERE award_year = $selection_id";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $award_id = $row['award_id'];
  $name = $row['award_name'];
  $year = $row['award_year'];





	echo "<tr>" . "<th>" . $award_id . "</th>" .
     "<th>" . $name . "</th>" .
     "<th>" . $year . "</th>" .  
    "</tr>";
}

?>

</table>


</body>
</html>