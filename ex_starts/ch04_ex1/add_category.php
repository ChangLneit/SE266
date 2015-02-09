<?php
	//get the category data
	
	$category_name =$_POST['category_name'];
	
   // Validate inputs
	if (empty($category_name)) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
	} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$category_name')";
    $db->exec($query);

    // Display
    include('category_list.php');
	}
?>
