<?php
    $icon = "//media.getsitecontrol.com/prod2/images/3130/a582af5305e3fe719d93fe8c10ad1210_157640964.svg";
    $title = "Thank You!";
    include("includes/header.php");s
?>
    <link rel="stylesheet" href="css/thanks.css">
    </head>

    <?php
// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
            //Date
            date_default_timezone_set('Asia/Kolkata');
            $date=getdate(date("U"));
			// Assign trimmed form data to variables
			// Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
			$name	= $_POST['name'];
            $email	= trim($_POST['email']);
            $phone  = trim($_POST['phone']);
            $msg	= $_POST['message']; 
            $sub    = $_POST['subscribe'];            
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); // If true, kill the script
				
			}
			
			// Add the recipient email to a variable
			$to	= "jainabhishek7204@yahoo.com";			
			
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message .= "Name: $name\r\n";
            $message .= "Email: $email\r\n";
            $message .= "Phone: $phone\r\n\r\n";
            $message .= "Message:\r\n   $msg\r\n\r\n";
            $message .= "Subcription status: $sub\r\n\r\n";
            $message .= "$date[weekday], $date[mday], $date[month], $date[hours]:$date[minutes]";
			
			// If the subscribe checkbox was checked
			/*if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
			
				// Add a new line to the $message
				$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
				
			}*/
		
			$message = wordwrap($message, 72); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!

			mail($to, $subject, $message, $headers);

	?>

    <body>
        <div id="root">
          <div role="dialog" id="wpreview" class="page-2" style="">
              <div class="container">
                  <div class="images">
                      <img src="//media.getsitecontrol.com/prod2/images/3130/a582af5305e3fe719d93fe8c10ad1210_157640964.svg" class="image" style="position: absolute; object-fit: contain; object-position: 50% 50%; left: 50%; transform: translateX(-50%) rotate(0deg); top: 32px; width: 368px; height: 214px;">
                    </div>
                    <div class="body">
                        <div class="content no-fields">
                            <h1 class="title">Thank you!</h1>
                            <p class="description">We appreciate the feedback. Your opinion means the world to us.</p>
                            <form class="" action="/">
                            <div class="buttons">
                                <button type="submit" class="button primary">Done</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>