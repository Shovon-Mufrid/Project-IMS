<?php

//print_r($_POST);
session_start();
require_once('../header.php');
require_once('adnav.php');
require_once('../database.php');

if (!isset($_SESSION['user_status'])) {
    header("location: ad_login.php");
}


$uemail = $_POST['uemail'];
$upassword = $_POST['upass'];




$check_Q = "SELECT COUNT(*) AS total FROM admin
                WHERE Email= '$uemail' AND  Password= '$upassword' ";

$db_login = mysqli_query($db, $check_Q);

$after_assoc = mysqli_fetch_assoc($db_login);

//print_r($after_assoc);
// user_status is used to keep others from directly enter into webpage from url
if($after_assoc['total'] == 1){
    $_SESSION['uemail'] = $uemail;
    $_SESSION['user_status'] = 'yes';  
 
   header('location: ad_profile.php');
}
else {
    $_SESSION['login_err'] = "Login failed. Please Register of input correct info";
    header('location: ad_login.php');
}

    

?>