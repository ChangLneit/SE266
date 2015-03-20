<?php
		if (isset($_POST['action'])) {
    		$action =  $_POST['action'];
		} else {
    		$action =  'start_app';
		}

		// When Action = Update

		if($action = "Update"){
			
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$birthdate = $_POST['birthdate']; 
		$actorid = $_POST['actorid'];

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
		/// update the data into database  
		
			require_once('database.php'); 
			$query = "Update Actor_List 
           	 		  Set FirstName ='$fname', LastName = '$lname', 
    			 		  Gender= '$gender', BirthDate = '$birthdate'
				 	 Where ActorID = '$actorid' ";
				 
			$db->exec($query); 
  	 	}
	
	// When Action = Delete
	if($action = "Delete"){
		
       	require_once('database.php'); 
		$actorid = $_POST['actorid'];
		$query = "DELETE FROM Actor_List
				  WHERE ActorID = '$actorid' ";
				 
		$db->exec($query); 
   }
	
	include 'edit_actor.php';
?>