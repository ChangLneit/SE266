<?php
    require_once('database.php');
	 // Get actors
    $query = 'SELECT *
              From Actor_List
              ORDER BY ActorID ASC';
    $actorList = $db->query($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Assignment 4</title>
    <link rel="stylesheet" type="text/css" href="actor.css"/>
	</head>

<body>
    <div id="content"><!-- Start the main content-->
	  <h2>Actors</h2>
		
	  <!-- Search actors-->
	  <div id='search'>
		  <form method="post" action="index.php">
			  <input type="hidden" name="action" value="search"/>

			  <lable>First Name:</lable>
			  <input type="text" name="fname" value="" />
			  <br />
			  <lable>Last Name:</lable>
			  <input type="text" name="Lname" value="" />
			  <input class="btn" type="submit" value="Search" />
		  </form>
		  
	  </div><!--end of search-->
	 <br />
	 <!-- display Actors-->
	  <div id="display_actors">
		<fieldset>
		<table>
			
			<?php foreach ($actorList as $temp) : ?>
                <tr>
                    <td><?php echo $temp['FirstName']; ?></td>
                    <td><?php echo $temp['LastName']; ?></td>
					<td><?php echo $temp['Gender']; ?></td>
                    <td><?php echo $temp['BirthDate']; ?></td>
					<td><?php echo $temp['ActorID']; ?></td>
                   	<td>
						<a href="edit_actor.php?fname=<?php echo $temp['FirstName']; ?>&lname=<?php echo $temp['LastName']; ?>&birthdate=<?php echo $temp['BirthDate']; ?>&gender=<?php echo $temp['Gender']; ?>&actorid=<?php echo $temp['ActorID']; ?>">Edit</a>
					</td>
                </tr>
            <?php endforeach; ?>


		</table>
	    </fieldset>
	  </div><!-- End of display actors-->
	  <div id = "addActor"><!-- Add Actor to the list-->
		<fieldset>
			<legend><b>Add Actor</b></legend>

		<h5><?php echo ' ' . nl2br(htmlspecialchars($message)); ?></h5>
       
        <form action="#" method="post">
        <input type="hidden" name="action" value="process_data"/>
		
		
        <label>First Name:</label>
        <input type="text" name="fname" 
               value="<?php echo htmlspecialchars($fname); ?>"/>
        <br />
		<label>Last Name:</label>
        <input type="text" name="lname" 
               value="<?php echo htmlspecialchars($lname); ?>"/>
        <br />
        <label>Birth Date:</label>
        <input type="text" name="birthdate" 
               value="<?php echo htmlspecialchars($birthdate); ?>"/>
        <br />
			<label>Gender:</label>
		
				<input type="radio" name="gender" value="M" />Male
			
				<input type="radio" name="gender" value="F" />Female
			
		<br />
		<label>&nbsp;</label>
        <input class="btn" type="submit" value="Add" />
        <br />	
		</form>
		</fieldset>
	  </div><!-- End of addActor -->
  
    </div><!-- End of Contont-->
</body>
</html>