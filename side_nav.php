<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: darkslategray;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 200px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: yellowgreen;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: whitesmoke;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* @media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} */
</style>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="product.php">Products</a>
  <a href="Customer/customer.php">Customer</a>
  <a href="Admin/admin.php">Admin</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu Bar</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>

