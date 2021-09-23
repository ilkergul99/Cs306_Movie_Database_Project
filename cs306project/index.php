<!DOCTYPE html>
<html>
<head>
	<title>BingeWatch</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body style="background-color:#E9E9E9;">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container-fluid">
    <a class="navbar-brand" href="index.php">CS306 BingeWatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="moviefile.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="directorpage.php">Directors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="starpage.php">Movie Stars</a>
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

	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/godfather.jpg" alt="The Godfather" width="1100" height="500">
      <div class="carousel-caption">
        <h3>The Godfather</h3>
        <p>Revenge is a dish best served cold</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/angrymen.jpg" alt="12 Angry Men" width="1100" height="500">
      <div class="carousel-caption">
        <h3>12 Angry Men</h3>
        <p>It takes a great deal of courage to stand alone</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/fightclub.jpg" alt="Fight Club" width="1100" height="500">
      <div class="carousel-caption">
        <h3>The Fight Club</h3>
        <p>You do not talk about Fight Club!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/darkknight.jpg" alt="The Dark Knight" width="1100" height="500">
      <div class="carousel-caption">
        <h3>The Dark Knight</h3>
        <p>I Believe What Doesn't Kill You Simply Makes You, Stranger</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/ilbuonoilcaptivo.jpg" alt="The Good, The Bad and The Ugly" width="1100" height="500">
      <div class="carousel-caption">
        <h3>The Good, the Bad and the Ugly</h3>
        <p>If you work for a living, why do you kill yourself working?</p>
      </div> 
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/directors.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">BingeWatch creators</h2>
				<p class="py-3">Since the first film cameras were invented in 1891, we can frankly say that movies are with us and bring joy, happiness, sadness, briefly every kind of emotion that humans are experiencing throughout their life journey. We will try to analyze features of movies with respect to directors, performers, awards, categories by using relational models</p>
				<a href="about.php" class="btn btn-success">Wanna learn more?</a>
			</div>
		
		</div>
    </div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Movie Features</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top impimg" src="images/allmovies.jpg" alt="All Movies">
  					<div class="card-body">
    					<h4 class="card-title">Movies</h4>
    					<p class="card-text">Here, you can check all movies we recommend</p>
    					<a href="moviefile.php" class="btn btn-primary">Explore</a>
  					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top impimg" src="images/directorsegment.jpg" alt="Directors">
  					<div class="card-body">
    					<h4 class="card-title">Directors</h4>
    					<p class="card-text">Here, you can check the directors in detail</p>
    					<a href="directorpage.php" class="btn btn-primary">Explore</a>
  					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top impimg" src="images/moviestars.jpg" alt="Movie Stars">
  					<div class="card-body">
    					<h4 class="card-title">Movie Stars</h4>
    					<p class="card-text">Here, you can check the movies stars in detail</p>
    					<a href="starpage.php" class="btn btn-primary">Explore</a>
  					</div>
				</div>
			</div>
			
		</div>
	</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">CS306 BingeWatch - 2021</p>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>