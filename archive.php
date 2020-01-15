
<?php
include("function.php");
include("session.php");
include("connection.php");
if(isset($_POST["login"])){
$Username=mysqli_real_escape_string($connection,$_POST["username"]);
$Password=mysqli_real_escape_string($connection,$_POST["password"]);
 if(empty($Username || $Password)){
     $_SESSION["ErrorMessage"]="Login Field is Required";
 }
  else{
      $Login_account=login_Access($Username,$Password);
    $_SESSION["User_Id"]=$Login_account["id"];

    $_SESSION["Username"]=$Login_account["username"];
    if($Login_account){

$_SESSION["SuccessMessage"]="Welcome ".$_SESSION["Username"];
Redirect_to("submission.php");



}
    else{
        $_SESSION["ErrorMessage"]="Invalid Username/Password";

    }
  }
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
<div class="fluid-container">
  <div class="row loginpage ">
        <div id="login" class="col-md-4" style="margin-bottom: 30px;">
         <img src="image/unilag.png" height="52"  class="ml-5 my-2">
         <img src="image/NJES_logo.png" height="52" class="ml-5 my-2">
        </div>

        <div class="col-md-8 text-center">
          <div class="row mt-3">
            <div class="col-md-5 form-inner" style="padding-bottom: 10px;padding-top: 0px;">
                <form action="index.php" method="post">
                  Username <input class="username" type="text"  aria-label="Search" name="username">
            </div>
            <div class="col-md-7">
                  Password <input class="username" type="password" name="password" style="margin-bottom:10px;">
            <button type="submit" class="btn btn-success text-center pb-4" name="login" id="login">Login</button><br>
            </form>
             <div class="text-right ml-5">
         <p class="text-center text-danger mt-2 ml-5" id="register"><a href="register.php" class="text-center"><i style="color:black;">New User? </i>  Register</a></p>
            </div>
          </div>
  </div>
  </div>
     </div>

    <div class="text-center"><?php echo errormessage();

                     echo successmessage();?></div>
 <nav class="navbar navbar-expand-md navbar-light bg-light bg-cus">
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
