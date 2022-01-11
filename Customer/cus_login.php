<?php
session_start();
require_once('../header.php');
require_once('cunav.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-4">
                    <div class="card-header bg-warning">
                        <h5 class="card-title mb-0 text-white text-capitalize d-flex justify-content-between">Customer Login Form 
                            <a href="cus_reg.php" class= "text-black"> Registration </a></h5>
                    </div>
                    <div class="card-body">
                    <?php
                    if (isset($_SESSION['login_err'])) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['login_err']; // from reg.php > session>failed
                            unset($_SESSION['login_err']); // NO REPEAT OF ALERTS
                            ?>
                        </div>

                    <?php
                    }
                    ?>

                        <form action="cus_login_info.php" method="post">


                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">E-mail Id</label>
                            <input type="text" class="form-control" placeholder="Email Id" name="cemail">
                        </div>

                        <div class="form-row mb-2">
                            <label class="form-label text-capitalized">Password</label>
                            <input type="password" class="form-control" name="cpass" placeholder="Your Password">
                        </div>

                        <div class="form-row mb-2">
                            <button type="submit" class="btn btn-success" name="submit"> Submit</button>

                        </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



