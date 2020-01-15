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
    <title>Archive</title>
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
            <a href="submission.php" class="nav-item nav-link pl-5 disabled">Submission</a>
            <a href="current2.php" class="nav-item nav-link pl-5">Current</a>
            <a href="archive2.php" class="nav-item nav-link px-5" tabindex="-1">Archive</a>
            <a href="logout.php" class="nav-item nav-link px-5" tabindex="-1">Logout</a>

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


<div class="fluid-container">
    <div class="top">
    <h5>ARCHIVE</h5>
    </div>

</div>

<div class="container">
    <div class="row m-4">

        <div class="col-md-6 text-center">
            <ul id="accordable-example" class="accordable">
              <li class="my-4">
                <span> 2022</span>
                <div class="mx-4">
                 <p class=""><ul class="py-2  px-5">
                      <li>Vol 22, No 3 (2022)</li>
                      <li>Vol 22, N0 2 (2022)</li>
                      <li>Vol 22, No 1 (2022)</li>
                  </ul></p>
                </div>
              </li>
              <li class="my-4">
                <span>2021</span>
                <div>
                 <p class=""><ul class="py-2 mx-4 px-5">
                       <li>Vol 21, No 3 (2021)</li>
                      <li>Vol 21, No 2 (2021)</li>
                      <li>Vol 21, No 1 (2021)</li>
                  </ul></p>
                </div>

                <li class="my-4">

                <span>2020</span>
                <div>
                 <p class=""><ul class="py-2 mx-4 px-5">
                      <li>Vol 20, No 3 (2020)</li>
                      <li>Vol 20, No 2 (2020)</li>
                      <li>Vol 20, No 1 (2020)</li>
                  </ul></p>
                </div>

              </li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <ul id="accordable-example" class="accordable">
            <li class="my-4">
                <span>2019</span>
                <div>
                 <p class=""><ul class="py-2 mx-4 px-5">
                      <li>Vol 9, No 3 (2019)</li>
                      <li>Vol 9, N0 2 (2019)</li>
                      <li>Vol 9, No 1 (2019)</li>
                  </ul></p>
                </div>
              </li>
              <li class="my-4">
                <span>2018</span>
                <div>
                 <p class=""><ul class="py-2 mx-4 px-5">
                      <li>Vol 8, No 3 (2018)</li>
                      <li>Vol 8, N0 2 (2018)</li>
                      <li>Vol 8, No 1 (2018)</li>
                  </ul></p>
                </div>

              </li>
              <li class="my-4">
                <span>2017</span>
                <div>
                 <p class=""><ul class="py-2 mx-4 px-5">
                      <li>Vol 7, No 3 (2017)</li>
                      <li>Vol 7, N0 2 (2017)</li>
                      <li>Vol 7, No 1 (2017)</li>
                  </ul></p>
                </div>

              </li>
            </ul>
        </div>

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
