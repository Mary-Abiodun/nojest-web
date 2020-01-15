<?php
include("connection.php");
include("session.php");
include("function.php");
confirm_login();
// tthis code is responsible for the displaying of of the user icon.
$user="";
$query="SELECT * FROM register";
$execute=mysqli_query($connection,$query);
while($data=mysqli_fetch_array($execute)){
    $user=$data['username'];
}
// end of the user displaying code.
// validation code



// setting the errors;
$fnameError="";
$lstnameError="";
$affiliateError="";
$emailError="";
$email2Error="";
$phoneError="";
$urlError="";
$imageError="";
// if it set;
if(isset($_POST["submit"])){

//$Salutation=mysqli_real_escape_string($connection,$_POST["salutation"]);
$Fname=mysqli_real_escape_string($connection,$_POST["firstname"]);
$Midname=mysqli_real_escape_string($connection,$_POST["midname"]);
$Lstname=mysqli_real_escape_string($connection,$_POST["lastname"]);
$Affiliation=mysqli_real_escape_string($connection,$_POST["affiliate"]);
$Email=mysqli_real_escape_string($connection,$_POST["email"]);
$Url=mysqli_real_escape_string($connection,$_POST["url"]);
$Title=mysqli_real_escape_string($connection,$_POST["title"]);
$Language=mysqli_real_escape_string($connection,$_POST["language"]);
$Abstract=mysqli_real_escape_string($connection,$_POST["abstract"]);
//$Agencies=mysqli_real_escape_string($connection,$_POST["agencies"]);
$References=mysqli_real_escape_string($connection,$_POST["reference"]);
//$Image=$_FILES["image"]["name"];
//$Img_user="metapictures/".basename($Image);


// validating the form datas.

if(empty($Fname) || empty($Email) || empty($Url) || empty($Image)){
    $_SESSION["ErrorMessage"] = "Please Fill the Required Space";
}

elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['firstname'])){
  $fnameError = "only letters and whitespace can be accepted";

}
elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['lastname'])){
  $lstnameError = "only letters and whitespace can be accepted";

}
elseif(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$_POST['email'])){
    $emailError = "Invalid Email format";
}
elseif($_POST['email'] !== $_POST['confemail']){
    $email2Error="Email Do Not Match";
  }
elseif(empty($_POST['url'])){
 $urlError = "Url is Required";
  }
elseif(!preg_match("/(https:|(ftp:))\/\/+[a-zA-Z0-9.\-_\&$=\#\/?\~`!]+\.[a-zA-Z0-9.\-_\&$=\#\/?\~`!]*/",$_POST['url'])){
          $urlError = "Invalid url";
      }
elseif(empty($_POST['affiliate'])){
    $affiliateError="Please Type your Institution";
  }


else{
global $connection;
$insert="INSERT INTO metadata(firstname,midname,lastname,
      affiliation,email,url,phone,location,image,title,abstract,language,agencies,references) VALUES('$Firstname','$Midname',
'$Lstname','$Affiliation','$Email','$Url','$Title','$Abstract','$Language','$Agencies','$References')";


if($Query){
$_SESSION["SuccessMessage"] = "Your Information Has been Successfully Recorded";
 Redirect_to("entermetadata.php");
}

else{
  die(mysqli_error($connection));
}
}// else statement closed tag

}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Entermetadata</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="image/unilag.png" type="image/x-icon" />

    <style>
    .active{
        color: #fff !important;
        background: #035d3f;
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
                <input class="form-control mr-sm-2" type="text" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </div>
        </div>

    </nav>
    </div>

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
            <a href="uploadsubmission.php" class="px-4"> UPLOAD SUBMISSION</a>
            <a href="entermetadata.php" class="active px-4"> ENTER METADATA</a>
            <a href="uploadsubmissionfiles.php" class="px-4"> UPLOAD SUPPLEMENTARY FILES</a>
            <a href="confirmation.php" class="px-4"> CONFIRMATION</a>

        </div>
        
        <hr class="hrr">
        <div class="fluid-container reg">
            <div class="row">
                <div class="col-md-12 top">

                    <h5> Enter Metadata </h5>

                </div>

            </div>
        </div>
       <!--      session code start-->
        <div class="text-center"><?php echo errormessage();

                     echo successmessage();?></div>
<!--      session code end -->
        <div class="container main">
            <form action="entermetadata.php" method="post" enctype="multipart/form-data">


                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname">
                                <p class="error"><?=$fnameError;?></p>

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="lname">Middle Name</label>
                    </div>
                    <div class="col-75">
                        <input type="name" id="mname" name="midname">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname">
                                <p class="error"><?=$lstnameError;?></p>

                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email">
                                <p class="error"><?=$emailError;?></p>

                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label for="url">URL</label>
                    </div>
                    <div class="col-75">
                        <input type="name" id="url" name="url">
                                <p class="error"><?=$urlError;?></p>

                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label for="lname">Affiliation</label>
                    </div>
                    <div class="col-75">
                        <textarea name="affiliate" rows="3" cols="10">

        </textarea>
                                <p class="error"><?=$affiliateError;?></p>

                        <p> (Your institution, e.g. "University of Lagos") </p>
                    </div>
                </div>


                <div class="text-left mt-5">
                    <button class="btn btn-success" disabled>Add Author</button>
                </div>
                <hr class="hrr">

                <div class="container">
                    <h6>Tittle & Abstract</h6>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="title" name="title">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Abstract:</label>
                        </div>
                        <div class="col-75">
                            <textarea name="abstract" rows="3" cols="10">

        </textarea>

                        </div>
                    </div>


                </div>
                <!-- indexing-->
                <hr class="hrr">
                <h6>Indexing</h6>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label for="lname">Language</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="language">
                            <p class="pl-3">English=en; Frence=fr; Spanish=es; <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" target="_blank" style="text-decoration: underline;">Additional codes.</a></p>
                            <!--        <p class="error"><?=$language;?></p>-->

                        </div>
                    </div>

                </div>
                <!--contibutors and supporting agencies    -->

                <hr class="hrr">
                <div class="container">
                    <h6>Contibutors And Supporting Agencies</h6>
                    <p>Identify agencies (a person, an organization, or a service) that made contributions to the content or provided funding or support for the work presented in this submission. Separate them with a semi-colon (e.g. John Doe, Metro University; Master University, Department of Computer Science).</p>

                    <div class="row">
                        <div class="col">
                            <label for="lname">Agencies</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="agency">
                            <!--        <p class="error"><?=$agency;?></p>-->

                        </div>
                    </div>

                </div>
                <!-- references-->
                <hr class="hrr">
                <div class="container">
                    <h6>References</h6>
                    <p>Provide a formatted list of references for works cited in this submission. Please separate individual references with a blank line</p>

                    <div class="row">
                        <div class="col">
                            <label for="lname">References:</label>
                        </div>
                        <div class="col-75">
                            <textarea name="reference" rows="3" cols="10">

        </textarea>

                        </div>
                    </div>

                </div>
                <span><button type="submit" class="btn btn-success" name="submit" value="">Save And Continue</button><button class="btn btn-outline-success ml-2" name="Cancel" href="entermetadata.php">Cancel</button></span>
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
