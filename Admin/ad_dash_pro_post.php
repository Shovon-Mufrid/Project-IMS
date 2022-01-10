<?php
session_start();
require_once("../database.php");

$t=time();
$date= date("Y-m-d",$t);

if ($_POST['pname'] == NULL || $_POST['iname'] == NULL || $_POST['pid'] == NULL || $_POST['amount'] == NULL ) {
    $_SESSION['entry_err'] = 'All field Required';
    header('location: ad_dash_pro.php');
}
else {
        $pname = $_POST['pname'];
        $iname = $_POST['iname'];
        $pid = $_POST['pid'];
        $amount = $_POST['amount'];
        // $date = $_POST['date'];

        $insert_query = "INSERT INTO products(Pro_Name, Inv_name, Pro_id, Amount, Entry_time)
                     VALUES('$pname', '$iname', ' $pid', '$amount', '$date')";

        mysqli_query($db, $insert_query);

        $_SESSION['entry_success'] = "Entry Done";
        header('location: ad_dash_pro.php');
    }

?>