<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Please enter all the fields and click on the Submit button.';
        break;
    case 'process_data':
       $name = $_POST['name'];
        $email = $_POST['email']; 
        $phone = $_POST['phone'];
		
		 // trim the spaces from the start and end of all data
        $name = trim($name);
        $email = trim($email);
        $email = trim($email);
        // 1. make sure the user enters a name
	    if(empty($name)){
			$message = "Please enter your name!";
		 	break;
		}
		
        // 2. display the name with only the first letter capitalized
		$name = strtolower($name);
        $name = ucwords($name);
		// Define first name
		$i= strpos($name, ' ');
		if ($i===false){
			
			$first_name = $name;
		}else{
			$first_name= substr($name, 0, $i);
		}
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
		if (empty($email)){
			$message = "Please enter your email address!";
			break;
		}
		
        // 2. make sure the email address has at least one @ sign and one dot character
		else if(strpos($email, '@') === false) {
            $message = 'The email address must contain an @ sign.';
            break;
        } else if(strpos($email, '.') === false) {
            $message = 'The email address must contain a dot character.';
            break;
        }
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
		// remove common formatting characters from the phone number
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);
	
		if (strlen($phone)<7){
			$message = "Phone number muest be at least seven digits";
			break;
		}
        // 2. format the phone number like this 123-4567 or this 123-456-7890
		  if (strlen($phone) == 7) {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3);
            $phone = $part1 . '-' . $part2;
        } else {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3, 3);
            $part3 = substr($phone, 6);
            $phone = $part1 . '-' . $part2 . '-' . $part3;
        }
	
		// for the heard_from radio buttons,
    	// display a value of 'Unknown' if the user doesn't select a radio button
		if(isset($_POST['heard_from'])){
			$heard_from = $_POST['heard_from'];
		}else{
			$message = "Please choose where you heard from us";
			break;
		}
    	// for the wants_updates check box,
    	// display a value of 'Yes' or 'No'
		if (isset($_POST['wants_updates'])){
			$wants_updates = $_POST['wants_updates'];
		}else{
			$message = "Please choose if you want to recevie updates";
			break;
		}
        
		 // for the dropdown list
		
		$contact_via=$_POST['contact_via'];
	
		
		// for the comment
		$comments = $_POST['comments'];
		$comments = nl2br($comments, false);
		$comments = htmlspecialchars($comments);
		/*
			$message =
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n".
			"Want Update: $wants_updates\n".
			"Heard From:  $heard_from\n".
			"Contact Via: $contact_via\n".
			"Comments:    $comments";
		*/
			

		require_once('database.php');
		$query = "INSERT INTO Survey
         		 (Name, Email, Phone,Hear_from,Wants_updates,Contact_via,Comments)
         		 VALUES
         		 ('$name', '$email', '$phone', '$heard_from','$wants_updates','$contact_via','$comments')";
		$db->exec($query);
		//clear the form
		$name = " ";
        $email = " ";
        $phone = " ";
		
		
        break;
	}
	include 'string_tester.php';
?>