<?php
session_start();
require_once('../header.php');
require_once('../Inventory/nav_inv.php');
require_once("../database.php");

$get_query = "SELECT * FROM products";
$from_db = mysqli_query($db, $get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
?>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-6 m-auto">
                <div class="card mt-4">
                    <div class="card-header bg-info">
                        <h4 class="card-title mb-0 text-danger text-capitalize text-center">
                            Product Entry
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                    if (isset($_SESSION['entry_err'])) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['entry_err'];
                            unset($_SESSION['entry_err']); // NO REPEAT OF ALERTS
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['entry_success'])) { ?>

                        <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['entry_success'];
                            unset($_SESSION['entry_success']); // NO REPEAT OF ALERTS
                            ?>
                        </div>

                    <?php
                    }
                    ?>

                        <form action="ad_dash_pro_post.php" method="post">
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Product Name</label>
                                <input type="text" class="form-control" placeholder="Product Name" name="pname">
                            </div>
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Inventory Name</label>
                                <input type="text" class="form-control" placeholder="Inventory Name" name="iname">
                            </div>
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Product Id</label>
                                <input type="text" class="form-control" placeholder="Product Id" name="pid">
                            </div>
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Product Amount</label>
                                <input type="number" class="form-control" placeholder="Product Amount" name="amount">
                            </div>
                            <!-- <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Entry Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Entry Date">
                            </div> -->

                            <div class="form-row mb-2">
                                <button type="submit" class="btn btn-success" name="submit"> Submit</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class='card-title text-capitalize'> Product Information </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-border">
                            <thead>
                                <th>Product Name</th>
                                <th>Inventory Name </th>
                                <th>Product Id</th>
                                <th>Product Amount</th>
                                <th>Entry Time</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($from_db as $product) :

                                ?>
                                    <!-- from database -->
                                    <tr>
                                        <td><?= $product['Pro_name'] ?></td>
                                        <td><?= $product['Inv_name'] ?></td>
                                        <td><?= $product['Pro_id'] ?></td>
                                        <td><?= $product['Amount'] ?></td>
                                        <td><?= $product['Entry_time'] ?></td>                                   
                                    </tr>
                                <?php
                                endforeach
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
