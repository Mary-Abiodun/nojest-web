<?php 
if(isset($_GET['vkey'])){
$vkey = $_GET['vkey'];
$connection = new MYSQLi('localhost','root','victorys03','research');
$resultTest = $connection->query("SELECT veryfied,vkey FROM register WHERE veryfied = 0 AND vkey = $vkey LIMIT 1");
if($resultTest->num_rows == 1){
    //validate mail
    $update=$connection->query("UPDATE register SET veryfied = 1 WHERE vkey = $vkey LIMIT 1");
    if($update){
        echo"Your Acount Has Been Verified, You may Now Log in";
    }
    else{
        $connection->error;
    }
}
else {
    echo "This Account Is Invalid or Already Verified";
}

}
else{
    die("Something Went wrong");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification</title>
</head>
<body>
    
</body>
</html>