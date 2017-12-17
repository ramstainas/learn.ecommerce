<!DOCTYPE html>
<?php
  include 'includes/config.php';
  include 'functions/functions.php';
?>
<html>
<head>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <!-- Main container starts-->
	<div class="main_wrapper">
    <!-- Header container starts-->
	  <div class="header_wrapper">
      <img id="logo" src="images/logo.png"> 
    </div>
    <!-- Header container ends-->
    <!-- Menu bar container starts-->
		<div class="menubar">
      <ul id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="all_products.php">All Products</a></li>
        <li><a href="#">My Account</a></li>
        <li><a href="#">Sign Up</a></li>
        <li><a href="#">Shopping</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    

    <!-- Search form container starts-->
    <div id="form">
      <form method="GET" action="results.php">
        <input type="text" name="query" placeholder="Search a product" />
        <input type="submit" name="search" value="Search" />
        
      </form>
    </div>
    <!-- Search form container ends-->
    </div>
    <!-- Menu bar container ends-->