<?php
session_start();
require_once('../header.php');
require_once('cunav.php');
?>
<div class="container">
    <div class="row">
        <div class="col-lg6-m-auto">
            <div class="card mt-3">
                <div class="card-header bg-danger text-white">
                    <h5 class="card-title mb-0 text-white text-capitalize d-flex justify-content-between">Customer Registration Form
                        <a href="cus_login.php" class="text-black"> Log In </a>
                    </h5>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_SESSION['err_msg'])) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['err_msg']; // from reg.php > session>failed
                            unset($_SESSION['err_msg']); // NO REPEAT OF ALERTS
                            ?>
                        </div>

                    <?php
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['success_msg'])) { ?>

                        <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['success_msg']; // from reg.php > session >success
                            unset($_SESSION['success_msg']);
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <form action="cus_reg_info.php" method="post">
                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">Name</label>
                            <input type="text" class="form-control" placeholder="Your Name" name="cname">
                        </div>
                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">E-mail Id</label>
                            <input type="text" class="form-control" placeholder="Your Email Id" name="cemail">
                        </div>
                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Your Phone Number" name="cphone">
                        </div>
                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">Password</label>
                            <input type="text" class="form-control" placeholder="Password should be min 6 digit" name="cpass">
                        </div>
                        <div class="form-row mb-2">
                            <button type="submit" class="btn btn-danger" name="submit"> Submit</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

