<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>Paint Estimate</title>
	</head>
	<body>
		<div id="content">
			<h1>Paint Estimate Calculator</h1>
			<?php if (!empty($error_message)) { 
			echo "<p class='error'> $error_message;</p>";
			} // end if ?>
			<form action="room_estimater.php" method="post">

			<div id="data">
            <label>Room Length:</label>
            <input type="text" name="room_length"
                   value="<?php echo $room_length; ?>"/><br />

            <label>Room Width:</label>
            <input type="text" name="room_width"
                   value="<?php echo $room_width; ?>"/><br />

            <label>Room Height:</label>
            <input type="text" name="room_height"
                   value="<?php echo $room_height; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

		</form>
		</div>
	</body>	
</html>