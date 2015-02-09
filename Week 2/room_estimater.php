

<?php
	$room_length =  $_POST['room_length'];
	$room_width =  $_POST['room_width'];
	$room_height =  $_POST['room_height'];
	//validate the length
	if (empty($room_length)) {
		 $error_message = " Error! Room Length is a required field!";
	}else if (!is_numeric($room_length)){
		 $error_message = " Error! Room Length must be a number!";
	}else if ($room_length <= 0) {
	     $error_message = "Room number must greater than 0!";
	}
	//validate the width
	else if (empty($room_width)) {
		 $error_message = " Error! Room width is a required field!";
	}else if (!is_numeric($room_width)){
		 $error_message = " Error! Room width must be a number!";
	}else if ($room_width <= 0) {
	     $error_message = "Room width must greater than 0!";
	}
	//validate the height
	else if (empty($room_height)) {
		 $error_message = " Error! Room height is a required field!";
	}else if (!is_numeric($room_height)){
		 $error_message = " Error! Room height must be a number!";
	}else if ($room_height <= 0) {
	     $error_message = "Room height must greater than 0!";
	}
  // set error message to empty string if no invalid entries
	 else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
	// Calculate the  paintable space and  the volume
	$ceiling= $room_width * $room_length;
	$wall_A= $room_width * $room_height;
	$wall_B= $room_length * $room_height;
	
	$painable_space = $ceiling + 2 * ($wall_A + $wall_B);
	$volume = $room_length * $room_width * $room_height;
	// Format the painable space and volume
	$painable_space_f= number_format($painable_space, 2). ' sq.ft.';
	$volume_f = number_format($volume, 2 ). ' cu.ft';
	// format the Numbers
	$room_length_f = number_format($room_length, 2). ' ft.';
    $room_width_f = number_format($room_width, 2). ' ft.';
    $room_height_f = number_format($room_height, 2). ' ft.';
?>


<!DOCTYPE html>
<head>
    <title>Paint Estimate Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Paint Estimate Calculator</h1>

        <label>Room Length:</label>
        <span><?php echo $room_length_f; ?></span><br />

        <label>Room Width:</label>
        <span><?php echo $room_width_f; ?></span><br />

        <label>Room Height:</label>
        <span><?php echo $room_height_f; ?></span><br />

        <label>Painable Space:</label>
        <span><?php echo $painable_space_f; ?></span><br /><br />
		
		<label>Room Volume:</label>
        <span><?php echo $volume_f; ?></span><br /><br />
		
		
		<h4 style= "float: right">
			<?php 
				$date = date('m/d/y');
				echo "The calculation was done on " . $date;
			?>
		</h4>
		
    </div>
		
</body>
</html>
	
	