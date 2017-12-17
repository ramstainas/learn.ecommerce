<!DOCTYPE html>
<?php 
  include 'includes/config.php'; 
  include 'functions/functions.php';


if(isset($_POST['insert_post'])){
	$p_title = $_POST['title'];
	$p_cat = $_POST['product_cat'];
	$p_price = $_POST['price'];
	$p_dsc = $_POST['desc'];
	$p_keywords = $_POST['keywords'];
	$p_status = $_POST['status'];

	if(isset($_FILES['image'])){
    	$p_image = $_FILES['image']['name'];
    	$p_image_tmp = $_FILES['image']['tmp_name'];

    	move_uploaded_file($p_image_tmp, "product_images/$p_image");

    	$sql = "INSERT INTO products(cat, title, price, p_desc, image, keywords, state ) values ('$p_cat', '$p_title','$p_price', '$p_dsc', '$p_image', '$p_keywords', '$p_status') ";
    	$result = mysqli_query($con, $sql);

	if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
	
    }
}

?>





<html>
<head>
</head>
<body>
	<form action="insert_products.php" method="post" enctype="multipart/form-data">
		<table align="center" width="500" border="0">
			<tr>
				<td colspan="8" align="center">
					<h2>Insert new product</h2>
				</td>
			</tr>
			<tr>
				<td align="right">Product title:</td>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<td align="right">Product category:</td>
				<td><select name="product_cat" required>
					<option>Select a category</option>
					<?php getOptionCats(); ?>
				</select></td>
			</tr>
			<tr>
				<td align="right">Product image:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td align="right">Product price:</td>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<td align="right">Product description:</td>
				<td><textarea name="desc" cols="20" rows="10" required></textarea></td>
			</tr>
			<tr>
				<td align="right">Product Keywords:</td>
				<td><input type="text" name="keywords" required></td>
			</tr>
			<tr>
				<td align="right">Product status:</td>
				<td><input type="text" name="status" required></td>
			</tr>
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>