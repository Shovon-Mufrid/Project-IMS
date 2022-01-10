<?php
session_start();
require_once('../header.php');
require_once('nav_inv.php');
?>

<body class='bg-success'>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-4 bg-black">
                        <div class="card-header mt-6 bg-danger text-black">
                            <h1 class="card-title text-capitalize text-center d-flex justify-content-between">
                                Paratha <a href="inventory.php" class="text-white">Return To Inventory </a> </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">

                                <tbody>

                                    <tr>
                                        <td class="bg-white">
                                            <div>
                                                <img src="Paratha/Atta-Rooti.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Atta-Rooti <br>

                                                    Product Id : p1
                                                    <br>
                                                    Price : Tk.30
                                                </p>

                                            </div>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="Paratha/Deshi-Paratha.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Deshi-Paratha <br>

                                                    Product Id : p2

                                                    <br>
                                                    Price : Tk.30
                                                </p>

                                            </div>


                                    </tr>

                                    <tr>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="Paratha/Mega-Deshi-Paratha.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Mega-Deshi-Paratha <br>

                                                    Product Id : p3
                                                    <br>
                                                    Price : Tk.50
                                                </p>

                                            </div>
                                        <td class="bg-white">
                                            <div>
                                                <img src="Paratha/Rice-Rooti.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Rice-Rooti <br>

                                                    Product Id : p4
                                                    <br>
                                                    Price : Tk.40

                                                </p>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>





