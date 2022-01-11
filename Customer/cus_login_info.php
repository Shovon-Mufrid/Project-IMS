<?php

//print_r($_POST);
session_start();
require_once('../header.php');
require_once('cunav.php');
require_once('../database.php');

if (!isset($_SESSION['user_status'])) {
    header("location: cus_login.php");
}


$cemail = $_POST['cemail'];
$cpassword = $_POST['cpass'];




$check_Q = "SELECT COUNT(*) AS total FROM customer
                where Email= '$cemail' AND  Password= '$cpassword' ";

$db_login = mysqli_query($db, $check_Q);

$after_assoc = mysqli_fetch_assoc($db_login);

//print_r($after_assoc);
// user_status is used to keep others from directly enter into webpage from url
if($after_assoc['total'] == 1){
    $_SESSION['cemail'] = $cemail;
    $_SESSION['user_status'] = 'yes';  

    header('location: ../Inventory/inventory.php');
}
else {
    $_SESSION['login_err'] = "Login failed. Please Register or input correct info";
    header('location: cus_login.php');
}

    

?>