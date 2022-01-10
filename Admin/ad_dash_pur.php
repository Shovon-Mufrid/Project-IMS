<?php
session_start();
require_once('../header.php');
require_once('adnav.php');
require_once('../Database.php');

if (!isset($_SESSION['user_status'])) {
    header("location: ../Login.php");
}

$get_query = "SELECT Name,Inventory,Product_id,Amount,Date FROM purchase";

$from_db = mysqli_query($db, $get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
// foreach($from_db as $user){
//     print_r($user);
// }
?>

<body  class='bg-black'>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-4 bg-secondary">
                    <div class="card-header mt-6 bg-danger text-black">
                        <h5 class="card-title text-capitalize text-center"> Purchase Information </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <th class="bg-warning">Name</th>
                                <th class="bg-primary">Inventory</th>
                                <th class="bg-success">Product ID</th>
                                <th class="bg-danger">Amount</th>
                                <th class="bg-info">Order Date</th>
                            </thead>
                           
                            <tbody>
                                <?php
                                    foreach ($from_db as $user){
                                 ?>
                                 
                                 <tr>
                                    <td class="bg-warning"><?= $user['Name'] ?></td>
                                    <td class="bg-primary"><?= $user['Inventory'] ?></td>
                                    <td class="bg-success"><?= $user['Product_id'] ?></td>
                                    <td class="bg-danger"><?= $user['Amount'] ?></td>
                                    <td class="bg-info"><?= $user['Date'] ?></td>
                                </tr>

                                 <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>





