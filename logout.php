<?php
include("session.php");
include("timezone.php");
include("function.php");
$SESSION["User_Id"]=null;
session_destroy();
Redirect_to("index.php");

?>