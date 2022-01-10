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
                                Ice Cream <a href="inventory.php" class="text-white">Return To Inventory </a> </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">

                                <tbody>

                                    <tr>
                                        <td class="bg-white">
                                            <div>
                                                <img src="IceCream/Bloop-Chocolate.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name :Bloop-Chocolate <br>

                                                    Product Id : i1<br>

                                                    Price : Tk.100
                                                </p>

                                               </div>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="IceCream/Bloop-Double-Sundae-Caramel-Vanilla.jpeg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Bloop-Double-Sundae-Caramel-Vanilla <br>

                                                    Product Id : i2 <br>

                                                    Price : Tk.150
                                                </p>

                                                </div>

                                    </tr>

                                    <tr>
                                        <td class="bg-white  ">
                                            <div>
                                                <img src="IceCream/Coated-Sticks.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Coated-Sticks <br>

                                                    Product Id : i3<br>

                                                    Price : Tk.20
                                                </p>

</div>
                                        <td class="bg-white">
                                            <div>
                                                <img src="IceCream/cone-regular.jpg" width='200' height='200' class="img-rounded">
                                            </div>
                                            <div>

                                                <p>Name : Cone-regular <br>

                                                    Product Id : i4<br>

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




