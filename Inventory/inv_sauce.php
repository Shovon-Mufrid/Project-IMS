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
                               Sauce <a href="inventory.php" class="text-white">Return To Inventory </a> </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">

                                <tbody>

                                    <tr>
                                        <td class="bg-white">
                                            <div>
                                                <img src="Sauce/Chili-Sauce.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Chili-Sauce <br>

                                                    Product Id : s1
                                                    <br>
                                                    Price : Tk.100
                                                </p>

                                                 </div>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="Sauce/Garlic-Chilli-Sauce.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Garlic-Chilli-Sauce<br>

                                                    Product Id : s2
                                                    <br>
                                                    Price : Tk.120
                                                </p>

                                                 </div>

                                    </tr>

                                    <tr>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="Sauce/Tomato-Ketchup.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Tomato-Ketchup<br>

                                                    Product Id : s3
                                                    <br>
                                                    Price : Tk.80
                                                </p>

                                               </div>
                                        <td class="bg-white">
                                            <div>
                                                <img src="Sauce/Tamarind-Ketchup.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Tamarind-Ketchup<br>

                                                    Product Id : s4
                                                    <br>
                                                    Price : Tk.110
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




