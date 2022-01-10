<?php
session_start();
require_once('../header.php');
require_once('nav_inv.php');
?>

<body class='bg-dark'>
    <section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="card mt-4 bg-black">
                            <div class="card-header mt-6 bg-danger text-black">
                                <h1 class="card-title text-center"> <i> INVENTORY </i></h1>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">

                                    <tbody>

                                        <tr>
                                            <td class="bg-warning  "><a class="text-black" href='inv_chips.php'>
                                                    <h2> CHIPS </h2>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-warning "><a class="text-black" href='inv_ice.php'>
                                                    <h2> ICE CREAM </h2>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-warning "><a class="text-black" href='inv_sauce.php'>
                                                    <h2>SAUCE </h2>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-warning "><a class="text-black" href='inv_paratha.php'>
                                                    <h2> PARATHA</h2>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <!-- Success message from Customer Purchase -->
            <div class="col-lg-5 m-auto">
                <?php
                if (isset($_SESSION['purchase_success'])) { ?>

                    <div class="alert text-white bg-success text-center" role="alert">
                        <?php
                        echo $_SESSION['purchase_success']; //
                        unset($_SESSION['purchase_success']);
                        ?>
                    </div>
                <?php
                }
                ?>
            </div><br>
            <div class="col-lg-10 m-auto text-center">
                <button type="button" class="btn btn-info btn-lg"> <a class="text-black" href="../purchase/purchase.php">Customer Purchase</a> </button>
            </div>
            
        </section>

</body>




