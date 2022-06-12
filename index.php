<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
</style>
<body>
  
<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Navbar (Sits on top) -->
<div class="w3-top w3-bar w3-xlarge w3-black w3-opacity-min">
<a href="#home" class="w3-bar-item w3-button">HOME</a>
<a href="#menu" class="w3-bar-item w3-button">MENU</a>
<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
<a href="#contact" class="w3-bar-item w3-button">CONTACT</a>

<!-- creating space in navbar -->
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>
<a class="w3-bar-item w3-button"></a>

<a href="#cart" class="w3-bar-item w3-button"><b>CART</b></a>
<a href="components/login.php" class="w3-bar-item w3-button" ><b>Login/Register</b></a>
<a class="w3-bar-item w3-button" onclick="login()" >log out</a>
</div>
  
<!-- Header image -->
<div style="height:800px;background-image:url('https://static.toiimg.com/thumb/53110049.cms?width=1200&height=900');background-size:cover"
class="w3-display-container w3-grayscale-min">
<div class="w3-display-bottomleft">
  <span class="w3-tag w3-xlarge">Open from 9am to 12pm</span>
</div>
<div class="w3-display-middle w3-center">
  <span class="w3-text-white" style="font-size:100px">Jason's<br>Pizzeria Restaurante</span>
  <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
</div>
</div>

<?php include 'components/menu.php';?>

<?php include 'components/about.php';?>

<?php include 'components/cart.php';?>

<?php include 'components/contact.php';?>

<!-- End Content -->
</div>
</body>
</html>
