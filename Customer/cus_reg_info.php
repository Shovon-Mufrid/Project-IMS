<?php
session_start(); 

require_once("../database.php");

$cname = filter_var($_POST['cname'], FILTER_SANITIZE_STRING);
$cemail = filter_var($_POST['cemail'], FILTER_SANITIZE_EMAIL);
$cphone = $_POST['cphone'];
$cpassword = $_POST['cpass'];

//password validation
$valid_cemail =  filter_var($cemail, FILTER_VALIDATE_EMAIL);

//cant input more than one same email and put them in new query
//encrypt pass in database
//password modification
//no unauthorized mail 

if ($valid_cemail) {
    if (strlen($cpassword) > 5) {
        // $encrypt_pass = md5($password); 
        $checking_query = "SELECT COUNT(*) AS Total FROM customer where Email = '$valid_cemail' ";
        $db_result = mysqli_query($db, $checking_query); 
        $after_assoc = mysqli_fetch_assoc($db_result);
      
        if($after_assoc['Total'] == 0 ){
            $query = "INSERT INTO customer(Name,Email,Phone,Password)
                    VALUES('$cname',  '$cemail', '$cphone', '$cpassword' )";                      
                
                mysqli_query($db, $query);

                $_SESSION['success_msg'] = "Customer Registration Complete";
                header('location: cus_reg.php');
                
        }
        else{
            $_SESSION['err_msg'] = "already registered";
            header('location: cus_reg.php');
        }

    
    } else {
    $_SESSION['err_msg'] = "Password must have more than 5 digit";
    header('location: cus_reg.php');
    
    }
} else {
    $_SESSION['err_msg'] = "Invalid Mail";
    header('location: cus_reg.php');
}



?>