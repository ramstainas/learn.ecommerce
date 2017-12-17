<?php

function getProducts(){
  if(!isset($_GET['cat'])){
    global $con;
    $get_products = "SELECT * FROM products order by RAND() LIMIT 0, 6";
    $result_products = mysqli_query($con, $get_products);

  		while($row_products = mysqli_fetch_array($result_products)){
		  	$p_id = $row_products["id"];
		  	$p_title = $row_products["title"];
		  	$p_cat = $row_products["cat"];
		  	$p_price = $row_products["price"];
		  	$p_image = $row_products["image"];

  			echo "
  				<div id = 'single_product'>
  				<h3>$p_title</h3>
  				<img src='admin/product_images/$p_image' width='180' height='180' />
  				<p><b> $p_price $</b></p>
  				<a href='details.php?p_id=$p_id' style='float:left'>Details</a>
  				<a href='index.php?p_id=$p_id'><button style='float:right'>Add to cart</button></a>
  				</div>
  				";

  }
}
}


function getdetails(){
  if(isset($_GET['p_id'])){
  	$p_id = $_GET['p_id'];
  	global $con;

  	$sql = "SELECT * FROM products WHERE id='$p_id'";
  	$result = mysqli_query($con, $sql);

  	while($row_products = mysqli_fetch_array($result)){
  	$p_id = $row_products["id"];
  	$p_title = $row_products["title"];
  	$p_price = $row_products["price"];
  	$p_image = $row_products["image"];
  	$p_desc = $row_products["p_desc"];

  	echo "
  		<div id = 'single_product'>
  			<h3>$p_title</h3>
  			<img src='admin/product_images/$p_image' width='400' height='300' />
  			<p id='price'><b> $p_price $</b></p>
  			<p>$p_desc</p>
  			<a href='index.php' style='float:left'>Go back</a>
  			<a href='index.php?p_id=$p_id'><button style='float:right'>Add to cart</button></a>
  		</div>
  	";
  }
}

}


function getCategory(){
		global $con;

  		$get_cats = "SELECT * FROM category";

  		$result_cats = mysqli_query($con, $get_cats);

  while($row_cats = mysqli_fetch_array($result_cats)){
  	$cat_id = $row_cats["cat_id"];
  	$cat_title = $row_cats["cat_title"];

  	echo "
  		<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>
  	";

  }
}



function getCategoryBasedProducts(){
  if(isset($_GET['cat'])){
  	$cat_id = $_GET['cat'];
    global $con;

    $sql = "SELECT * FROM products where cat = '$cat_id'";
    $result = mysqli_query($con, $sql);
    $count_cat_products = mysqli_num_rows($result);

    if($count_cat_products ==0){
    	echo "<h2>There is no product in this category</h2>";

    } else {

  		while($row  = mysqli_fetch_array($result)){
		  	$p_id = $row["id"];
		  	$p_title = $row["title"];
		  	$p_cat = $row["cat"];
		  	$p_price = $row["price"];
		  	$p_image = $row["image"];

  			echo "
  				<div id = 'single_product'>
  				<h3>$p_title</h3>
  				<img src='admin/product_images/$p_image' width='180' height='180' />
  				<p><b> $p_price $</b></p>
  				<a href='details.php?p_id=$p_id' style='float:left'>Details</a>
  				<a href='index.php?p_id=$p_id'><button style='float:right'>Add to cart</button></a>
  				</div>
  				";

  }
  }
}}




function getAllProducts(){
	global $con;
    $get_products = "SELECT * FROM products";
    $result_products = mysqli_query($con, $get_products);

  		while($row_products = mysqli_fetch_array($result_products)){
		  	$p_id = $row_products["id"];
		  	$p_title = $row_products["title"];
		  	$p_cat = $row_products["cat"];
		  	$p_price = $row_products["price"];
		  	$p_image = $row_products["image"];

  			echo "
  				<div id = 'single_product'>
  				<h3>$p_title</h3>
  				<img src='admin/product_images/$p_image' width='180' height='180' />
  				<p><b> $p_price $</b></p>
  				<a href='details.php?p_id=$p_id' style='float:left'>Details</a>
  				<a href='index.php?p_id=$p_id'><button style='float:right'>Add to cart</button></a>
  				</div>
  				";
  }
}




function searchProduct($qq){
	$search = $qq;
	global $con;
    $sql = "SELECT * FROM products WHERE keywords like '%$search%'";
    $result = mysqli_query($con, $sql);

    $count = mysqli_num_rows($result);

    if($count == 0){

      echo "<h3>No product found.</h3>"; 
    } else{

  		while($row = mysqli_fetch_array($result)){
		  	$p_id = $row["id"];
		  	$p_title = $row["title"];
		  	$p_cat = $row["cat"];
		  	$p_price = $row["price"];
		  	$p_image = $row["image"];

  			echo "
  				<div id = 'single_product'>
  				<h3>$p_title</h3>
  				<img src='admin/product_images/$p_image' width='180' height='180' />
  				<p><b> $p_price $</b></p>
  				<a href='details.php?p_id=$p_id' style='float:left'>Details</a>
  				<a href='index.php?p_id=$p_id'><button style='float:right'>Add to cart</button></a>
  				</div>
  				";
  }
}
}


?>