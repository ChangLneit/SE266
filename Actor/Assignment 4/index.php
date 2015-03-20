<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start';
}


switch ($action) {
    case 'start':
        $message = 'Please enter all the fields and click on the Submit button.';
        break;
    case 'process_data':
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$birthdate = $_POST['birthdate']; 
		

        // 1. make sure the user enters a first name
	    if(empty($fname)){
			$message = "Please enter the first name!";
		 	break;
		}
	 	// 2. make sure the user enters a last name
	    if(empty($lname)){
			$message = "Please enter the last name!";
		 	break;
		}
		 // 3. make sure the user enters a birth date
	    if(empty($birthdate)){
			$message = "Please enter the birth date!";
		 	break;
		}

		// for the gender radio buttons,
    	// display a value of 'Unknown' if the user doesn't select a radio button
		if(isset($_POST['gender'])){
			$gender = $_POST['gender'];
		}else{
			$message = "Please select the gender";
			break;
		}
		// write the data into database 
		require_once('database.php');
		$query = "INSERT INTO Actor_List
         		 (FirstName, LastName, Gender, BirthDate)
         		 VALUES
         		 ('$fname', '$lname', '$gender', '$birthdate')";
		$db->exec($query);
		//clear the form
		$fname = " ";
        $lname= " ";
        $birthdate = " ";
        break;
	
	
	
	
	}
	include 'string_tester.php';
?>