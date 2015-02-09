<?php 
//get IDs
$category_id =$_POST['category_id'];
//$category_name =$_POST['category_name'];
//delete the category from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";
$db->exec($query);

// diplay the category page
include('category_list.php');
?>
