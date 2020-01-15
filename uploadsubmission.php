<?php
include("connection.php");
include("session.php");
include("timezone.php");
include("function.php");
confirm_login();
$user="";
$query="SELECT * FROM register";
$execute=mysqli_query($connection,$query);
while($data=mysqli_fetch_array($execute)){
    $user=$data['username'];
}
if(isset($_POST["submit"])){
$Name = $_FILES["name"]["name"];
$File_type = $_FILES['name']['type'];
$File_size = $_FILES['name']['size'];
$File_size_in_mb = convert_it($File_size,'M');
$Filename = "subfiles/".basename($Name);
$file_ext = (explode('.',$Name));
$Extention = array("pdf","txt","doc");
if(empty($Name)){
   $_SESSION['ErrorMessage'] = "Please upload Your file Before proceeding.";   
}
elseif(in_array($file_ext,$Extention)===true){
    echo "file type not supported";
}
else{
global $connection;
$Query = "INSERT INTO upload(name,format,size) VALUES ('$Name','$File_type','$File_size_in_mb')";
move_uploaded_file($_FILES["name"]["name"],$Filename);

$Execute = mysqli_query($connection, $Query);
if($Execute){
    $_SESSION['SuccessMessage'] = "Your File has been Succesfully Uploaded";
}
    else{
        
     $_SESSION['ErrorMessage'] = "Not successful, please try again";   
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="image/unilag.png">

  <style>
  .active{
      color: #fff !important;
      background: #035d3f;
  }
  </style>
</head>

<body>
<div>
<div class="row loginpage"><div id="login" class="col-sm-6 mb-5"><a href="#" >
        <img src="image/unilag.png" height="53" alt="CoolBrand" class="ml-5 my-2">
        <img src="image/NJES_logo.png" height="53" class="ml-5 my-2">
    </a></div>

        <div class="col-sm-6 text-right pr-5 pt-4">
   <span><?=$user; ?>
       <img src="image/user-icon.jpg" height="40" class="imge"></span>
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


<div class="fluid-container">
    <div class="top">
    <h5> USER HOME</h5>
    </div>

</div>

<div class="container">
  <div class="top">
    <h5> New Submission</h5>
  </div>
  <div class="pt-2 submission">
     <a href="submission.php" class="px-4"> START</a>
    <a href="uploadsubmission.php" class="active px-4"> UPLOAD SUBMISSION</a>
    <a href="entermetadata.php" class="px-4"> ENTER METADATA</a>
    <a href="uploadsubmissionfiles.php" class="px-4"> UPLOAD SUPPLEMENTARY FILES</a>
    <a href="confirmation.php" class="px-4"> CONFIRMATION</a>


  </div>
  <hr class="hrr">
  <div>
    <div class="row">
            <div class="col-md-12 top">

                <h5> Upload Submissions</h5>

            </div>

        </div>
<!--      session code start-->
        <div class="text-center"><?php echo errormessage();

                     echo successmessage();?></div>
<!--      session code end -->
    <form action="uploadsubmission.php" method="post" enctype="multipart/form-data">

      <p> To upload a manuscript to this journal, complete the following steps.</p>

      <ol>
        <li> On this page, click Browse (or Choose File) which opens a Choose File window for locating the file on the hard drive of your computer.</li>
        <li> Locate the file you wish to submit and highlight it.</li>
        <li> Click Open on the Choose File window, which places the name of the file on this page.</li>
        <li> Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</li>
        <li> Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>

      </ol>

    <h5>Submission File</h5><br>
    <div class="form mb-5">
      <input type="file" name="name">
    </div>
    <span><button type="submit" class="btn btn-success" name="submit" value="">Save And Continue</button><a type="button" class="btn btn-outline-success ml-2" name="Cancel" href="uploadsubmission.php">Cancel</a></span>
    </form>
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
