<?php

	//REALWEALTH EMAIL NOTIFICATION
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//Create variables from form
		$firstName = trim($_POST["first_name"]);
		$lastName = trim($_POST["last_name"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$bizName = trim($_POST["bizName"]);
		$streetAddress = trim($_POST["streetAddress"]);
		$city = trim($_POST["city"]);
		$state  = trim($_POST["state"]);
		$zip = trim($_POST["zip"]);
		$dealerOrCompany = trim($_POST["dealerOrCompany"]);
		

		if( $firstName == "" OR $lastName == "" OR $email == "" OR $phone == "" ) {
			echo "You must fill in the correct details.";
			exit;
		}

		foreach( $_POST as $value ){
		  if( stripos($value,'Content-Type:') !== FALSE ){
		    echo "There was a problem with the information you entered.";
		    exit("{$_SERVER['REMOTE_ADDR']} Has been Recorded");
		  }
		}

		if ($_POST["middleName"] !== "") {
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
		$email_body = "<strong>You have a new submission from NAIFAclientCast.com | Upgrade</strong>" . "<br>";
		$email_body = $email_body . "Name: " . $firstName . " " . $lastName . "<br>";
		$email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Phone: " . $phone . "<br>";
		$email_body = $email_body . "Business Name: " . $bizName . "<br>";
		$email_body = $email_body . "Address: " . $streetAddress . " | " . $city . " | " . $state . " | " . $zip . "<br>"; 
		$email_body = $email_body . "Primary Dealer or Company: " . $dealerOrCompany . "<br>";

		$mail->SetFrom($email, $name);
		$address = "info@realwealthradio.com";
		
		$mail->AddAddress($address, "NAIFA ClientCast");

		$mail->Subject    = "New Submission from Upgrade | NAIFA ClientCast";
		//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->MsgHTML($email_body);

		if(!$mail->Send()) {
		  echo "There was a problem sending the email: " . $mail->ErrorInfo;
		  exit;
		}
		
		//redirect
		header('Location: marketing-tips.php?status=thanks');
		exit;

} ?>

<?php 
$pageTitle = 'Maximize Your Results';
$section = "marketing-tips";
include('inc/header.php');
?>

<?php if( isset($_GET["status"]) AND $_GET["status"] == "thanks" ) { ?>

	<p class="text-center">Your information has been submitted successfully. We will be in touch shortly!</p>

<?php } else {?>
	
	<div class="row text-center">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Basic Service</h2>
				</div>
				<div class="panel-body">
					<p class="lead text-primary">Free with your <br> NAIFA membership!</p>
					<div class="well text-left">
						<strong>With Basic Service, you get:</strong>
						<ul>
							<li>Access to the current month’s podcast to share with your clients (via the NAIFA ClientCast<sup>&reg;</sup> shared webpage)</li>
							<li>Access to the current month’s Power Session LIVE webinar for agents</li>
							<li>Online marketing tips and materials</li>
							<li>Live Sales Support</li>
						</ul>
					</div>

					<!--makeshift spacing-->
					<span class="hidden-sm hidden-xs">
						<br><br><br>
					</span>

					<a href="register-now.php" class="btn btn-primary btn-lg">Register Now</a>

				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title">Premier Service</h2>
			  </div>
			  <div class="panel-body">
			    <p class="lead text-primary">Discounted with your <br> NAIFA membership!</p>
			    <div class="well text-left">
			    	<strong>With Premier Service, you get:</strong>
					<ul>
						<li>A personal customized webpage to share NAIFA ClientCast<sup>&reg;</sup> with your clients</li>
						<li>A library of podcasts categorized by topic on your webpage for your clients</li>
						<li>Insider-access to our marketing website for advsiors, including the full library of Power Session LIVE webinars</li>
						<li>Additional online marketing resources, tips and tools</li>
						<li>Live Sales Support</li>
					</ul> 
				</div>
				<!-- Button trigger modal -->
				<a href="#" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#upgradeModal">Upgrade</a>
			  </div>
			</div>
		</div>
	</div>

	<div class="row text-center">
		<p class="lead">Premier Service is usually $300/month with a $250 one-time setup fee. With your NAIFA membership, you are eligible for a significant discount!</p>  

		<p>Monthly: $99 setup fee, plus $15.95/month<br> <small>Concentrates on insurance-related topics</small></p>

		<p>Weekly: $99 setup fee, plus $39.95/month<br><small>Discusses insurance and securities-related topics</small></p>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-primary">Maximize Your Results with Premier Service</h1>        
		</div>
	</div>

	<div class="member-benefits">
		<div class="row">
			<div class="col-sm-8">
				<h3>Market Yourself to Clients and Prospects Every Week</h3>
				<p>Want more focus on you and your practice? Brand your NAIFA ClientCast<sup>&reg;</sup> webpage with your photo, logo and contact information. Your clients and prospects can reach you with ease with the More Information button. Share your webpage link on social media – prospects who see it can use the Free Subscription button to be added to your list. The Forward to a Friend button can be tracked to your personalized webpage, so you can capture those referrals, and see who is referring you.</p>
				<blockquote class="panel-rwm">
					<img class="img-circle pull-right" src="images/edward-downey-testimonial.jpg" alt="Edward Downey" width="168" height="168" />

					<p>“This podcast is one of the most important things we do to offer education and marketing to our clients. <strong>Staying in touch with them is much easier this way</strong> versus just sending out a mailer. It’s not sales-y – just really good information presented in user-friendly professional format. <strong>I’ve learned a lot from it myself!</strong>”</p>

					<footer><cite class="source-title">Edward F. Downey</cite>, Bartlett, IL</footer>
				</blockquote>
			</div>
			<div class="col-sm-4">
				<img class="img-responsive img-shadow" src="images/realwealth-weekly-sample-page.jpg" alt="Jim's Real Wealth Weekly Page" />
			</div>
		</div>

		<hr />

		<div class="row">
			<div class="col-sm-8">
				<h3>Cross-sell to Your Clients While You Sleep
				<small>and while you are awake</small></h3>
				<p>We interview <a href="http://realwealthmarketing.com/real-wealth-weekly-guests/">nationally-recognized guests and industry experts</a> to provide timely, relevant information to your clients. We cover topics such as business planning, college education planning, estate planning, insurance needs, retirement income planning, tax planning, among other topics to encourage clients to work with their team of professionals to achieve a realistic comprehensive plan. <em>Real</em> Wealth<sup>&reg;</sup> exposes your client to the other services that you offer that can help them achieve their financial goals. Instead of talking to each client about every service you offer, use <em>Real</em> Wealth<sup>&reg;</sup> and put cross-selling on autopilot.</p>
				<blockquote class="panel-rwm">
					<img class="img-circle pull-right" src="images/todd-schneider-testimonial.jpg" alt="Todd Schneider" width="200" height="200" />

					<p>“I was excited to sign up for the program right away. When I saw the topic for my first podcast, "Buying vs. Leasing a Vehicle", I thought, 'What does this have to do with financial planning?' But right after I sent it out, a <strong>client reached out to me and rolled over his 401(k)</strong>, and that was the first program I had distributed! What a <strong>great way to stay top-of-mind with clients</strong>!”</p>

					<footer><cite class="source-title">Todd Schneider</cite>, Southlake, TX</footer>
				</blockquote>
			</div>
			<div class="col-sm-4">
				<img class="img-responsive img-shadow" src="images/cross-sell.jpg" alt="cross-sell" />
			</div>
		</div>


		<div class="row">	
			<div class="col-sm-8">
				<h3>Never miss another Power Session LIVE webinar! </h3>
				<p>You’ll have access to the full library with your Premier Service subscription. Each session gives you a taste of MDRT, featuring the best and most successful experts in the industry.</p>
			
				<blockquote class="panel-rwm">
					<img class="img-circle pull-right" src="images/joe-anthes.jpg" alt="Joe Anthes" width="200" height="200" />

					<p>“Excellent presentation on a complicated subject, in a short period of time!”</p>

					<footer><cite class="source-title">Joe Anthes</cite>, Hopatcong, NJ <em>(in reference to MAXIMIZING Social Security with Robin Mueller in January 2015)</em></footer>
					<div class="clearfix"></div>
				</blockquote>

			</div>
			<div class="col-sm-4">
				<img class="img-responsive img-shadow" src="images/webinar-library.jpg" alt="Webinar Library" />
			</div>
		</div>


		<div class="row">	
			<div class="col-sm-8">
				<h3>Sharpen your Skills with Sales Ideas from the Top Producers in the Country!</h3>
				<p>Our webinars are organized by category, so you can easily navigate the topics that are key for your own practice. Want to increase your life insurance sales? Listen to <em>Life Insurance as an Asset</em> Class with John Wheeler. </p>
			
				<blockquote class="panel-rwm">
					<img class="img-circle img-responsive pull-right" src="images/chuck-stickney.jpg" alt="Joe Anthes" />

					<p>“Thanks for today’s presentation on Life Insurance as an asset class.  Very good, very thought provoking.  Keep more of these coming whenever possible.”</p>

					<footer><cite class="source-title">Chuck Stickney</cite>, Lansing, MI</footer>
					<div class="clearfix"></div>
				</blockquote>

			</div>
			<div class="col-sm-4">
				<!-- <img class="img-responsive img-shadow" src="images/webinar-library.jpg" alt="Webinar Library" /> -->
			</div>
		</div>

	</div><!--.member-benefits-->

	<!-- Modal -->
	<div class="modal fade" id="upgradeModal" tabindex="-1" role="dialog" aria-labelledby="upgradeModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="upgradeModalLabel">Upgrade to Premeir Service</h4>
	      </div>
	      <div class="modal-body">
	   		<form action="marketing-tips.php" method="post">
	        	<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label for="first_name">First Name</label>
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
						</div>
						<div class="col-sm-6">
							<label for="last_name">Last Name</label>
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
						</div>
					</div>
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
					<label for="bizName">Business Name</label>
					<input type="text" class="form-control" id="bizName" name="bizName" placeholder="Business Name">
				</div>
				<div class="form-group">
					<label for="streetAddress">Street Address</label>
					<input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="123 Example St.">
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="city">City</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="City Name">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="state">State</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="WI">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="zip">Zip</label>
							<input type="text" class="form-control" id="zip" name="zip" placeholder="55555">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="dealerOrCompany"><p>Name of Broker-Dealer or Primary Company, if applicable</p></label>
					<input type="text" class="form-control" id="dealerOrCompany" name="dealerOrCompany" placeholder="Company Name">
				</div>
				<div class="form-group" style="display:none;">
					<label for="middleName">Middle Name</label>
					<p><strong>Note:</strong> If you are a human from the planet earth, please leave this field blank.</p>
					<input type="text" class="form-control" id="middleName" name="middleName">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

<?php } ?>

<?php include('inc/footer.php'); ?>