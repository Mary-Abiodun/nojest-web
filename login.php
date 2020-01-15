
<?php
include("function.php");




?>
<!DOCTYPE html>
<html>
<head>
	<title>wyd</title>
	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div>
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a href="#" class="navbar-brand">
        <img src="image/unilag.png" height="40" alt="CoolBrand">
				<img src="image/NJES_logo.png" height="40" class="ml-5 my-2">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="submission.php" class="nav-item nav-link">Submission</a>
            <a href="#" class="nav-item nav-link">Current</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Archive</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="login.php" class="nav-item nav-link">Login</a>
             <a href="register.php" class="nav-item nav-link">Register</a>
            <input class="form-control mr-sm-2" type="text"  aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="search">Search</button>

        </div>
    </div>
</nav>
</div> <br><br>

    <div class="fluid-container reg">
        <div class="row">
            <div class="col-md-12 top">

                <h5> LOGIN </h5>

            </div>

        </div>
    </div>

    <div class="container main">
  <form action="login.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Username:</label>
      </div>
      <div class="col-75">
        <input type="text" id="usname" name="username" >

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pword" name="password">
      </div>
    </div>

     <br>

        <input type="submit" value="Submit" name="submit" class="text-center">
      </div>
    </div>





  </form>
</div>

<footer>
	 <p>Publisher: Nigeria Online Journal of Educational Science And Technology, NOJEST</p>
		<p> For suggestions, recommendations and possible academic collaborations, feel free to contact our chief editor on contact@nojest.com.ng</p>
</footer>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>

</html>
