<?php
include("connection.php");
include("session.php");
include("function.php");
confirm_login();
$user="";
$query="SELECT * FROM register";
$execute=mysqli_query($connection,$query);
while($data=mysqli_fetch_array($execute)){
    $user=$data['username'];
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Current</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/unilag.png">

</head>

<body>
    <div>
        <div class="row loginpage">
            <div id="login" class="col-sm-6 mb-5"><a href="#">
                    <img src="image/unilag.png" height="53" alt="CoolBrand" class="ml-5 my-2">
                    <img src="image/NJES_logo.png" height="53" class="ml-5 my-2">
                </a></div>

            <div class="col-sm-6 text-right pr-5 pt-4">
                <span><?=$user; ?>
                    <img src="image/user-icon.jpg" height="40" class="imge"></span>
            </div>

        </div>

    </div>
    </div>

 <nav class="navbar navbar-expand-md bg-cus">


     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-4">
            <a href="index2.php" class="nav-item nav-link active pl-4">Home</a>
            <a href="about2.php" class="nav-item nav-link pl-5">About</a>
            <a href="submission.php" class="nav-item nav-link pl-5">Submission</a>
            <a href="current2.php" class="nav-item nav-link pl-5">Current</a>
            <a href="archive2.php" class="nav-item nav-link px-5" tabindex="-1">Archive</a>
            <a href="logout.php" class="nav-item nav-link pl-5">Logout</a>

        </div>
         <div class="navbar-nav ml-auto">
            <!-- <a href="login.php" class="nav-item nav-link">Login</a>
            <a href="register.php" class="nav-item nav-link">Register</a> -->
            <input class="form-control mr-sm-2" type="text"  aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</div>
        </div>

 </nav>
</div>
</div>

<div class="fluid-container">
    <div class="top">
    <P>CURRENT</P>
    </div>

</div>

<div class="container">
  <div class="top">
    <h5>Vol 7, No 3 (2019)</h5>
  </div>
  <div class="top mx-5">
    <p>Table of Content</p>
  </div>
  <div class="px-5">


    <p></p>

      <p> <strong>Challeges of Effective Implementation of New Secondary School Physics
      Curriculum In Public and Private Schools In Nigeria
      </strong></p>

        <em>Isa Shehu Usman, Wuyep Lar Simyyap, Ayodele Gabrial fasanya <span style="margin-left:42%;">1 - 6</span></em>
     <p> <a href="">Download PDF</a></p>
        <p class="bold"><strong>Pure Funding of Libraries in Nigeria : Adamawa State Scenario</strong> </p>
      <em>Banbangida Umar Babayi, Amina Makintami, Patric Tumba <span style="margin-left:43%;">7 - 15</span></em>
      <p class="my-2"> <a href="">Download PDF</a></p>

      <p> <strong>Challeges of Effective Implementation of New Secondary School Physics
      Curriculum In Public and Private Schools In Nigeria
      </strong></p>

        <em>Isa Shehu Usman, Wuyep Lar Simyyap, Ayodele Gabrial fasanya <span style="margin-left:42%;">1 - 6</span></em>
     <p> <a href="">Download PDF</a></p>
        <p class="bold"><strong>Pure Funding of Libraries in Nigeria : Adamawa State Scenario</strong> </p>
      <em>Banbangida Umar Babayi, Amina Makintami, Patric Tumba <span style="margin-left:43%;">7 - 15</span></em>
      <p class="my-2"> <a href="">Download PDF</a></p>
  </div>





</div>

<footer>
	 <p>Publisher: Nigeria Online Journal of Educational Science And Technology, NOJEST</p>
		<p> For suggestions, recommendations and possible academic collaborations, feel free to contact our chief editor on contact@nojest.com.ng</p>
</footer>









	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.easing.1.3.min.js"></script>

    <script src="js/jquery.accordable.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>

</html>
