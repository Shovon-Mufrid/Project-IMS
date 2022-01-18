<?php
require_once('../header.php');
require_once('adnav.php');
?>
<head>
<style>

.centernav {
  width: 500px;
  position: fixed;
  text-align: center;
  z-index: 1;
  top: 200px;
  left: 500px;
  bottom: 300px;
  right: 40px;
  background: darkolivegreen;
  overflow-x: hidden;
  padding: 100px 100px 50px;
}

.centernav a {
  
  padding: 10px 20px 20px 16px;
  text-decoration: none;
  font-size: 25px;
  color: lightgray;
  display: block;
}

.centernav a:hover {
  color: yellowgreen;
}

.body {
  margin-left: 181px; 
  font-size: 28px; 
  padding: 0px 10px;
  background: lightseagreen;
  color:black
}


</style>
</head>
<body>

<div class="centernav">
  <b> 
  <a href="ad_reg.php">Admin Registration</a>
  <a href="ad_login.php">Admin Login</a>
  
</b>
</div>



</body>

