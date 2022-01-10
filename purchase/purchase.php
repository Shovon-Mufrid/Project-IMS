<?php
session_start();
require_once('../header.php');
require_once('../Inventory/nav_inv.php');
?>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-4">
                    <div class="card-header bg-info">
                        <h4 class="card-title mb-0 text-danger text-capitalize text-center d-flex justify-content-between">
                            Shopping Mart <a href="../Inventory/inventory.php" class="text-black"> Inventory </a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                    if (isset($_SESSION['purchase_err'])) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['purchase_err'];
                            unset($_SESSION['purchase_err']); // NO REPEAT OF ALERTS
                            ?>
                        </div>

                    <?php
                    }
                    ?>

                        <form action="purchase_info.php" method="post">
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" name="uname">
                            </div>
                            <div class="form-row mb-2">
                                <label class="form-label text-capitalized">Inventory Name</label>
                                <select class="form-select" name="inventory">
                                    <option selected>Select Inventory Name</option>
                                    <option value="Chips">Chips</option>
                                    <option value="Ice Cream">Ice Cream</option>
                                    <option value="Paratha">Paratha</option>
                                    <option value="Sauce">Sauce</option>
                                </select>
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
                                <label class="form-label text-capitalized">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="order date">
                            </div> -->

                            <div class="form-row mb-2">
                                <button type="submit" class="btn btn-success" name="submit"> Submit</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
