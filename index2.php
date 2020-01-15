
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
    <title>NOJEST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="image/unilag.png" type="image/x-icon">

<style>
.bg-img{
    height: 100vh;
  background-image: url('image/bg-woman.jpg');
  background-size: cover;
  width: 100%;
  background-repeat: no-repeat;
}
.tempt{
  padding: 5px;
  background-color: yellow;
  display: inline-block;
  margin-top: 3px;
  color: white;
  border-radius: 10px;
}
</style>
</head>

<body>
    <div>
        <div class="row loginpage">
            <div id="login" class="col-sm-6 mb-5"><a href="#">
                    <img src="image/unilag.png" height="53" alt="CoolBrand" class="ml-5 my-2">
                    <img src="image/NJES_logo.png" height="53" alt="CoolBrand" class="ml-5 my-2">
                </a></div>

            <div class="col-sm-6 text-right pr-5 pt-4">
                <span><?=$user; ?>
                    <img src="image/user-icon.jpg" height="40" class="imge"></span>
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
        <div class="navbar-nav ml-auto ">
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


<div class="bg-img">
  <div class="container">
    <div class="row">
    <div class="col-md-5 mt-3" style="background-color: rgba(0, 151, 100, 0.8); color: white; padding-top: 20px; padding-bottom: 20px; line-height: 20px ">
    <div class=" bg-intro bio" style="text-align: center;color: yellow;">
    <h6><em style="color: white;">Welcome to</em> <br> <span>NIGERIAN JOURNAL OF <br> SCIENCE
      AND TECHNOLOGY<br> EDUCATION</span></h6>
    </div>
    <div>
      <span style="font-size: 15px;">
      Nigerian Journal of Educational Sciences (ISSN: 2602-3717) is an international scientific journal domiciled in the Department of Science and Technology Education, Faculty of Education, University of Lagos that publishes the peer-reviewed research articles on any area of educational sciences.</span>
    </div>
    <div style=" margin-top: 30px;">
      <span style="font-size: 15px;">
        The journal provides a means for teachers, teacher educators or teacher training institutions, any instructors at all levels of education as well as students or people who are interested in the area to publish their research results. One of the aims of the journal is to serve to share reflections from effective learning environments, to foster efforts to improve meaningful understandings, conceptual understanding as well as theoretical and experimental advancements in educational sciences. The journal strictly supports an open access policy, therefore all published articles are available to download for free.
      </span>
    </div>
    <div style=" margin-top: 30px;">
      <span style="font-size: 15px;">
        Nigerian Journal of Educational Sciences will be indexed by Directory of Open Access Journals (DOAJ), Index Copernicus, Scinapse, Research Bib, WorldCat.
      </span>
    </div>
    <div><a href="" download="" class="tempt" style="background-color: yellow; color: green; margin-top:10%; margin-left: 30%;">Download Template</a></div>
  </div>
  </div>

  </div>

</div>


<footer>
   <p>Publisher: Nigeria Online Journal of Educational Science And Technology, NOJEST</p>
    <p> For suggestions, recommendations and possible academic collaborations, feel free to contact our chief editor on contact@nojest.com.ng</p>
</footer>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
