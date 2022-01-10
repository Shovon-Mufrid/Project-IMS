<?php

 session_start(); 

require_once("../database.php");


//$uid = $_POST['uid'];
$uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$uemail = filter_var($_POST['uemail'], FILTER_SANITIZE_EMAIL);
$upassword = $_POST['upass'];

//email validation
$valid_uemail =  filter_var($uemail, FILTER_VALIDATE_EMAIL);

if ($valid_uemail) {
    if (strlen($upassword) > 5) {
        // $encrypt_pass = md5($password); 
        $checking_query = "SELECT COUNT(*) AS Total FROM admin WHERE Email = '$valid_Uemail' ";
        $db_result = mysqli_query($db, $checking_query); 
        $after_assoc = mysqli_fetch_assoc($db_result);
      
        if($after_assoc['Total'] == 0 ){
            $query = "INSERT INTO admin(User_Name,Email,Password)
                    VALUES('$uname',  '$uemail', '$upassword' )";                      
                
                mysqli_query($db, $query);

                $_SESSION['success_msg'] = "Admin Registration Complete";
                header('location: ad_reg.php');
                
        }
        else{
            $_SESSION['err_msg'] = "already registered";
            header('location: ad_reg.php');
        }

    
    } else {
    $_SESSION['err_msg'] = "Password must have more than 5 digit";
    header('location: ad_reg.php');
    
    }
} else {
    $_SESSION['err_msg'] = "Invalid Mail";
    header('location: ad_reg.php');
}



?>