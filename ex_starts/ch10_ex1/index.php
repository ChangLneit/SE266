<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = $_POST['invoice_date'];
        $due_date_s = $_POST['due_date'];

        // make sure the user enters both dates
		if(empty($invoice_date_s)){
			$message = " Invoice date must be entered!";
			break;
		}else if (empty($due_date_s)){
			$message = " Due date must be entered!";
			break;
		}
        // convert date strings to DateTime objects
        // and use a try/catch to make sure the dates are valid
		try {
				$invoice_date_o = new DateTime($invoice_date_s);
				$due_date_o = new DateTime($due_date_s);
		    } catch (Exception $e) {
   			     $message = " Both Dates must be valiad!";
			     break;
		      }

        // make sure the due date is after the invoice date
		if ($invoice_date_o >= $due_date_o ){
			$message = "Error, Due date must be after the invoice date!";
			break;
		}
        // format both dates 
		$format_string = 'F j, Y'; 
		$invoice_date_f = $invoice_date_o->format($format_string);
        $due_date_f = $due_date_o->format($format_string);

        // get the current date and time and format it
		$current_date_o = new DateTime();
		$current_date_f = $current_date_o->format($format_string);
		$current_time_f = $current_date_o->format('g:i:s a');
        // get the amount of time between the current date and the due date
        // and format the due date message
		$span = $current_date_o->diff($due_date_o);
		if ($due_date_o < $current_date_o) {
            $due_date_message = $span->format(
                'This invoice is %y years, %m months, and %d days overdue.');
        } else {
            $due_date_message = $span->format(
                'This invoice is due in %y years, %m months, and %d days.');
        }
        break;
}
include 'date_tester.php';
?>