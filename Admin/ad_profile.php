<?php
require_once('../header.php');
require_once('adnav.php');
?>
<head>
<style>

.centernav {
  width: 800px;
  position: fixed;
  text-align: center;
  z-index: 1;
  top: 200px;
  left: 500px;
  bottom: 300px;
  right: 40px;
  background: aqua;
  overflow-x: hidden;
  padding: 60px 100px 50px;
}

.centernav a {
  
  padding: 10px 50px 10px 16px;
  text-decoration: none;
  font-size: 25px;
  color: darkmagenta;
  display: block;
}

.centernav a:hover {
  color: darkred;
}

.body {
  margin-left: 181px; 
  font-size: 28px; 
  padding: 0px 20px;
  background: lightseagreen;
  color:black
}


</style>
</head>
<body>

<div class="centernav">
  <b> 
  <a href="../Inventory/inventory.php">Check Inventory</a>
  <a href="ad_dash_cus.php">Check Customer</a>
  <a href="ad_dash_pur.php">Check Purchase</a>
  <a href="ad_dash_pro.php">Add Products to Inventory</a> 
</b>
</div>



</body>

