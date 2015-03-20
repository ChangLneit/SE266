
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Assignment 4</title>
    <link rel="stylesheet" type="text/css" href="actor.css"/>
	</head>
<body>
	<?php	
	$gender= $_GET['gender'];
	$actorid =$_GET['actorid'];
	?>
	<!-- Edit the actor-->
	
	<div id = "editActor"><!-- Add Actor to the list-->
		 <fieldset>
    	<legend><b>Edit Actor</b></legend>
      	 <h5><?php echo ' ' . nl2br(htmlspecialchars($message)); ?></h5>
        <form action="edit.php" method="post">
			
		<input type="hidden" name="actorid" value="<?php echo $_GET['actorid']; ?>" />
		
        <label>First Name:</label>
        <input type="text" name="fname" 
               value="<?php echo htmlspecialchars($_GET['fname']); ?>" />
        <br />
		<label>Last Name:</label>
        <input type="text" name="lname" 
               value="<?php echo htmlspecialchars($_GET['lname']); ?>" />
        <br />
        <label>Birth Date:</label>
        <input type="text" name="birthdate" 
               value="<?php echo htmlspecialchars($_GET['birthdate']); ?>"/>
        <br />
			<label>Gender:</label>
			
				<input type="radio" name="gender" <?php if ($gender=="M") echo "checked";?> value="M" />Male
			
				<input type="radio" name="gender" <?php if ($gender=="F") echo "checked";?> value="F" />Female
		

		<br />	
		<label>&nbsp;</label>
        <input class="btn" type="submit" name="action" value="Update"/>
        <input class="btn" type="submit" name="action" value="Delete"/>
        <br />	
		</form>
		</fieldset>
		<a href="string_tester.php"><b>View List</b></a>
	  </div><!-- End of addActor -->
    
	
	
</body>
</html>