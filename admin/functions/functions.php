<?php

function getOptionCats(){
	global $con;
	$get_cats = "SELECT * FROM category";
	$run_cats = mysqli_query($con, $get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats["cat_id"];
		$cat_title = $row_cats["cat_title"];
		echo "<option value='$cat_id'>$cat_title</option>";
	}
}

?>