<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$subject = trim($_POST["subject"]);
		$message = trim($_POST["msg"]);
		

		if( $name == "" OR $email == "" OR $phone == "" OR $message == "") {
			echo "You must type your name";
			exit;
		}

		foreach( $_POST as $value ){
		  if( stripos($value,'Content-Type:') !== FALSE ){
		    echo "There was a problem with the information you entered.";
		    exit("{$_SERVER['REMOTE_ADDR']} Has been Recorded");
		  }
		}

		if ($_POST["address"] !== "") {
			echo "Your form submission has an error";
			exit;
		}

		require_once("inc/phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();

		if ( !$mail->ValidateAddress($email) ) {
			echo "You must specify a valid email address.";
			exit;
		}

		$body = $email_body;

		//Email Body
		$email_body = "";
		$email_body = "<strong>You have a new submission from NAIFAclientCast.com.</strong>" . "<br>";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Phone: " . $phone . "<br>";
		$email_body = $email_body . "Subject: " . $subject . "<br>";
		$email_body = $email_body . "Message: " . $message;


		$mail->SetFrom($email, $name);

		$address = "info@naifaclientcast.com";

		$mail->AddAddress($address, "NAIFA ClientCast");

		$mail->Subject    = "New Submission from Contact Us | NAIFA ClientCast";
		//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->MsgHTML($email_body);

		if(!$mail->Send()) {
		  echo "There was a problem sending the email: " . $mail->ErrorInfo;
		  exit;
		}
		
		//redirect
		header('Location: contact-us.php?status=thanks');
		exit;

	}
?>

<?php 
  $pageTitle = 'Contact Us';
  $section = "contact-us";
  include('inc/header.php');
?>

      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center text-primary"><?php echo $pageTitle;?></h1>          
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

        <?php if( isset($_GET["status"]) AND $_GET["status"] == "thanks" ) { ?>

			<p class="text-center">Your information has been submitted successfully. We will be in touch shortly!</p>

	    <?php } else {?>
	    	<p class="lead text-center">NAIFA ClientCast<sup>&reg;</sup> is free with your NAIFA membership!</p>
			<p class="text-center">Please contact us by calling (262) 626-2590, emailing <a href="mailto:info@naifaclientcast.com">info@naifaclientcast.com</a>, or by using the following form:</p>
			<hr>

	        <form action="contact-us.php" method="post">
	        	<div class="form-group">
					<label for="name">First &amp; Last Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name">
				</div>
				<div class="form-group">
					<label for="contactEmail">Email address</label>
					<input type="email" class="form-control" id="contactEmail" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone" placeholder="(555) 555-5555">
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Sign Me Up!">
				</div>
				<div class="form-group">
					<label for="msg">Message</label>
					<textarea id="msg" name="msg" class="form-control"></textarea>
				</div>
				<div class="form-group" style="display:none;">
					<label for="address">Address</label>
					<p><strong>Note:</strong> If you are a human from the planet earth, please leave this field blank.</p>
					<input type="text" class="form-control" id="address" name="address">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

	    <?php } ?>

        </div>
      </div>

<?php include('inc/footer.php'); ?>