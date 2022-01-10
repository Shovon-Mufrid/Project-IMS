<?php
session_start();
require_once("../database.php");

$t=time();
$date= date("Y-m-d",$t);

if ($_POST['uname'] == NULL || $_POST['inventory'] == NULL || $_POST['pid'] == NULL || $_POST['amount'] == NULL ) {
    $_SESSION['purchase_err'] = 'All field Required';
    header('location: purchase.php');
}
else {
        $uname = $_POST['uname'];
        $inventory = $_POST['inventory'];
        $pid = $_POST['pid'];
        $amount = $_POST['amount'];
        // $date = $_POST['date'];

        $insert_query = "INSERT INTO purchase(Name, Inventory, Product_id, Amount, Date)
                     VALUES('$uname', '$inventory', ' $pid', '$amount', '$date')";

        mysqli_query($db, $insert_query);

        $_SESSION['purchase_success'] = "Purchase Complete, Please wait for further instruction";
        header('location: ../Inventory/inventory.php');
    }

?>