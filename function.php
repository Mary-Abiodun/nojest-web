<?php
include("connection.php");
function Redirect_to($NewLocation){
    header("Location:".$NewLocation);
    exit;
}

function Password_Encryption($password){
    $Blow_fish_hash_format = "$2y$10$"; // 2y means we are using blowfish encryption why 10 means the time in seconds;
    $Salt_Length = 22; // the salt length must be 22 or greater than.
    $Salt = Generate_Salt($Salt_Length);
    $Add = $Blow_fish_hash_format.$Salt;
    $Hash = crypt($password,$Add);
    return $Hash;
}

function Generate_Salt($length){
    $Random_string = md5(uniqid(mt_rand(),true));
    $base64_string = base64_encode($Random_string);
    $modified_base64 = str_replace('+','.',$base64_string);
    $Salt = substr($modified_base64,0,$length);
    return $Salt;
}

function Password_Check($Password, $Existing_Hash){
    if($Hash === $Existing_Hash){
        return true;
    }
    else{
        return false;
    }
}

function EmailExistence($Email){
global $connection;
$Query = "SELECT * FROM register WHERE email='$Email'";
$Execute = mysqli_query($connection, $Query);
if(mysqli_num_rows($Execute) > 0){
    return true;
}
    else{
        return false;
    }
}
function UsernameExistence($Username){
global $connection;
$Query = "SELECT * FROM register WHERE username='$Username'";
$Execute = mysqli_query($connection, $Query);
if(mysqli_num_rows($Execute) > 0){
    return true;
}
    else{
        return false;
    }
}

function login_Access($Username,$Password){
    global $connection;
    $Query="SELECT * FROM register WHERE username='$Username'";
    $Execute=mysqli_query($connection,$Query);
    if($admin=mysqli_fetch_assoc($Execute)){//this command mean if it matches the associated array of username index and password;
    Password_Check($Password,$admin["password"]);
       return $admin;
}
else{
    return null;
   }
}
function login(){
    if(isset($_SESSION["User_Id"])){
        return true;
    }
    
}

function confirm_login(){
    if(!login()){
        $_SESSION["ErrorMessage"]="Login Required";
        Redirect_to("index.php");
    }
}


// this function is responsible for for conversions of numbers;
function convert_it($bytes, $to, $decimal_places = 1){
    $formulas = array(
    'K' => number_format($bytes / 1024, $decimal_places),
    'M' => number_format($bytes / 1048576, $decimal_places),
    'G' => number_format($bytes / 1073741842, $decimal_places),
    );
    return isset($formulas[$to]) ? $formulas[$to] : 0;
}



?>