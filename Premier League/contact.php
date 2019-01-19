<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Premier League</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Josip Jagnjić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>


	
	<main>
		
			
			
		
			<p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7670571037224!2d-0.15967018425300147!3d51.5174894796368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acc8a10f42d%3A0x41f8d35fb18fcfad!2s30+Gloucester+Pl%2C+Marylebone%2C+London+W1U+8PL%2C+UK!5e0!3m2!1sen!2shr!4v1547376202925" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
	
			
	
	    


    <h2>Contact Form</h2>

        


            <form action="https://www.premierleague.com/" id="contact_form" name="contact_form" method="POST">
				<label for="fname">First Name *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

				<label for="lname">Last Name *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				
				<label for="lname">Your E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="DE">Germany</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="ES">Spain</option>
				  <option value="GB">United Kingdom</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>

	</body>
</html>