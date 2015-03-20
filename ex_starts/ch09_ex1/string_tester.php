<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Winter Survey</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
        <h1>Winter Survey</h1>
        <form action="#" method="post">
        <input type="hidden" name="action" value="process_data"/>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name); ?>"/>
        <br />

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email); ?>"/>
        <br />

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone); ?>"/>
        <br />
		
	<fieldset>
  
        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine" />
        Search engine<br />
        <input type="radio" name="heard_from" value="Friend" />
        Word of mouth<br />
        <input type=radio name="heard_from" value="Other" />
        Other<br />

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates"/>YES, I'd like to receive
        information.<br />
		<input type="checkbox" name="wants_updates"/>Once a Week<br />
		<input type="checkbox" name="wants_updates"/>Not at all<br />
        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>
			
			
			
		<label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />
			
			
        </form>

        <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>

    </div>
</body>
</html>