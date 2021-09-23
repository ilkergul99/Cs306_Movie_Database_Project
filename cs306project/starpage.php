<!DOCTYPE html>
<html>
<head>
	<title>Movie Stars</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
      tr:nth-child(odd) {
  color: #A71616;
}
tr:nth-child(1) {
  color:#111010;
}
tr:nth-child(even) {
  color: #A71616;
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container-fluid">
    <a class="navbar-brand" href="index.php">CS306 BingeWatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="moviefile.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="directorpage.php">Directors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="starpage.php">Movie Stars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="award.php">Awards</a>
        </li>
      </ul>
      <form class="d-flex" action="search.php" method="POST" autocomplete="off">
        <input class="form-control me-2" type="search" name="input" placeholder="Search Movies" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
 	</div>
	</nav>

  <div class="container-fluid" style="background-color:#E8E4EF;">
    <div id="products" class="row list-group">
      <div class="container-fluid">
          <br>
          <?php
              include "config.php";

              $sql_statement = "SELECT * FROM performers";
              
              $result = mysqli_query($db, $sql_statement);

         if (mysqli_num_rows($result)>0) {
           while($row = mysqli_fetch_assoc($result)){
             ?>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <img class="group list-group-image" src="<?php echo $row['image']; ?>" alt="" width="700" height="500"/>
            <br>
                        <br>
                        <br> 
                        <br>

            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <h2> <?php echo $row['performer_name']; ?></h2>
              <div class="caption">
                    <br>
                    <h5 class="group inner list-group-item-text">
                        Age: <?php echo $row['performer_age']; ?></h5>
                    <h5 class="group inner list-group-item-text">
                        Nationality: <?php echo $row['nationality']; ?></h5>
                    <h5 class="group inner list-group-item-text">
                          Biography:</h5>
                    <p class="py-3"><?php echo $row['bio']; ?></p>
                     <?php $ID=$row['performer_id']; ?>

                     <table>

                      <tr> <th> MOVIES: </th></tr> 

                      <?php

                          include "config.php";

                          $sql_statement2 = "SELECT * FROM performs WHERE performer_id = $ID";


                          $result2 = mysqli_query($db, $sql_statement2);
                          while($row2 = mysqli_fetch_assoc($result2)){
                            $M_ID=$row2['movie_id'];

                            $sql_statement3 = "SELECT * FROM movies WHERE movie_id = $M_ID";

                              $result3 = mysqli_query($db, $sql_statement3);
                              while($row3 = mysqli_fetch_assoc($result3)){
                                $name = $row3['title'];


                                echo "<tr>" . "<th>" . $name . "</th>" .
                                                            
                                                          "</tr>";

                              }

                            }

                        


                      ?>

                      </table>
                      <br>
                    <table>

                            <tr> <th> AWARDS: </th></tr> 

                            <?php

                                include "config.php";

                                $sql_statement2 = "SELECT * FROM wins WHERE performer_id = $ID";


                                $result2 = mysqli_query($db, $sql_statement2);
                                while($row2 = mysqli_fetch_assoc($result2)){
                                  $M_ID=$row2['award_id'];

                                  $sql_statement3 = "SELECT * FROM awards WHERE award_id = $M_ID";

                                    $result3 = mysqli_query($db, $sql_statement3);
                                    while($row3 = mysqli_fetch_assoc($result3)){
                                      $name = $row3['award_name'];


                                      echo "<tr>" . "<th>" . $name . "</th>" .
                                                                  
                                                                "</tr>";

                                    }

                                  }

                              
                            

                            ?>

                            </table>
                            <br>
                            <table>

                            <tr> <th> NOMINATIONS: </th></tr> 

                            <?php

                                include "config.php";

                                $sql_statement2 = "SELECT * FROM nominated WHERE performer_id = $ID";


                                $result2 = mysqli_query($db, $sql_statement2);
                                while($row2 = mysqli_fetch_assoc($result2)){
                                  $M_ID=$row2['award_id'];

                                  $sql_statement3 = "SELECT * FROM awards WHERE award_id = $M_ID";

                                    $result3 = mysqli_query($db, $sql_statement3);
                                    while($row3 = mysqli_fetch_assoc($result3)){
                                      $name = $row3['award_name'];


                                      echo "<tr>" . "<th>" . $name . "</th>" .
                                                                  
                                                                "</tr>";

                                    }

                                  }

                              


                            ?>

                            </table>
                        <br>
                        <br>
                        <br> 
                        <br>
              </div>
              
            </div>
          </div>
          <br>

             <?php
           }
         }
         ?>
  </div>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>