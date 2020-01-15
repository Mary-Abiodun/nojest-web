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
    <title>Nojest</title>
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
            <a href="submission.php" class="active px-4"> START</a>
            <a href="uploadsubmission.php" class="px-4"> UPLOAD SUBMISSION</a>
            <a href="entermetadata.php" class="px-4"> ENTER METADATA</a>
            <a href="uploadsubmissionfiles.php" class="px-4"> UPLOAD SUPPLEMENTARY FILES</a>
            <a href="confirmation.php" class="px-4"> CONFIRMATION</a>

        </div>
        <hr class="hrr">
        <div>
            <div class="row">
                <div class="col-md-12 top">

                    <h5> Submission Checklist</h5>

                </div>

            </div>
            <form action="uploadsubmission.php" method="get">
                <p> Indicate that this submission is ready to be considered by this journal by checking off the following.</p>
                <input type="checkbox" name="" value=""> The submission has not been previously published, nor is it
                 before another journal for consideration.<br>
                 <input type="checkbox" name="" value=""> The submission file is in Microsoft Word document file format.<br>
                <input type="checkbox" name="" value="">
                <div class="mx-5">
                    
                        <li> The title page should contain the title of the article, name(s), qualification(s), status/ranks and affiliation of the author(s).</li>
                        <li> The abstract should summarise the scope and purpose of the study and should not be more than 200 words.</li>
                        <li> Each article should be typed double-line spaced and not exceeding 15pages of A4 paper in 12 font size including abstract and references.</li>
                        <li> The citation and references should adopt the current APA format.</li>
                        <li> All tables and figures should be incorporated in the body of the article.</li>

                </div>
                <input type="checkbox" name="" value=""> The text adheres to the stylistic and bibliographic requirements outlined in the Author Guidelines, which is found in About the Journal.<br>

                <h6 class="mt-5">Journal's Privacy Statement</h6>
                <p class="mb-4">The names and email addresses entered in this journal site will be used
                  exclusively for the stated purposes of this journal and will not be made available for
                   any other purpose or to any other party.</p>
               
                <span><button type="submit" class="btn btn-success" name="submit" value="">Save And Continue</button><button class="btn btn-outline-success ml-2" name="Cancel">Cancel</button></span>
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
