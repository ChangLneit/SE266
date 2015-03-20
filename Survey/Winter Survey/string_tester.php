<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Winter Survey</title>
    <link rel="stylesheet" type="text/css" href="survey.css"/>
</head>

<body>
    <div id="content">
        <h1>Winter Survey</h1>
		<h4><?php echo ' ' . nl2br(htmlspecialchars($message)); ?></h4>
       
        <form  action="#" method="post">
        <input type="hidden" name="action" value="process_data"/>
			
		<div class="question">
        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name); ?>"/>
        <br />

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email); ?>"/>
        <br />

        <label>Phone:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone); ?>"/>
        <br />
		</div>
	
  		<div class="question">
        <p>How did you hear from us?</p>
        <input type="radio" name="heard_from" value="Search Engine" />
        Search engine<br />
        <input type="radio" name="heard_from" value="Friend" />
        Word of mouth<br />
        <input type=radio name="heard_from" value="Other" />
        Other<br />
		</div>
		
		<div class="question">
        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates" value="Yes"/>Yes.<br />
		<input type="checkbox" name="wants_updates" value="Once a week"/>Once a Week<br />
		<input type="checkbox" name="wants_updates"/ value="NO">Not at all<br />
		</div>
			
		<div class="questions">
        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>
		</div>

        <p>Comments(Limit 200 words):</p>
        <textarea name="comments" rows="6" cols="80"></textarea>
		
    
			
			
			
		<label>&nbsp;</label>
        <input id="btn" type="submit" value="Submit" />
        <br />
			
			
        </form>

        

    </div>
</body>
</html>