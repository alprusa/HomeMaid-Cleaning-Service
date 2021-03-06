<?php
	if (isset($_POST["submit"])) {
        $Name = $_POST['Name'];
		$email = $_POST['email'];
        $Subject = $_POST['Subject'];
		$Message = $_POST['Message'];
		$to = 'contact@homemaidcleaningservice.net';
		
		$body = "From: $Name\nE-Mail: $email\nSubject: $Subject\nMessage:\n $Message";
 
		// Check if subject has been entered
		if (!$_POST['Subject']) {
			$errSubject = 'Please enter a subject';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['Message']) {
			$errMessage = 'Please enter your message';
		}
 
        // If there are no errors, send the email
        if (!$errSubject && !$errEmail && !$errMessage) {
            if (mail ($to, $Subject, $body, $email)) {
                $result='<p class="text-success">Thank You! We will be in touch</p>';
            } else {
                $result='<p class="text-danger">Sorry there was an error sending your message. Please try again later</p>';
            }
        }
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Contact</title>
		<meta name="description" content="">
		<meta name="author" content="Alisa Prusa">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<link href="../defaultStyle.css" rel="stylesheet" type="text/css">
		<link href="contact.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	</head>

	<body>
		<div id="mainContainter">
			<!--Navbar html section-->
			<nav class="navbar navbar-static-top" role="navigation">
                <div class="container-fluid">
                	<div class="navbar-header">
                        <a href="../"><img src="../img/HMLogo.png" class="img-responsive navbar-toggle" id="logoSmall"/></a>
                        <!--Button that is created for menu when screen size reaches a certain limit-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="collapseButton">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
       				 </div>

                    <!--Buttons to go to different pages of the website-->
                    <div class="collapse navbar-collapse" id="navItems">
                        <ul class="nav navbar-nav">
                        	<li class="navTabs"><a href="../">Home</a></li>
                        	<li>
								<div class="navbar-header">
                        			<!--Logo image button to go make to main page-->
                       				 <a href="../"><img src="../img/HMLogo.png" class="img-responsive" id="logo"/></a>
                       				 <!--<form action="#">
										 <button type="submit" id="appointment" href="#">Make an Appointment</button>
									 </form>-->
                   				 </div>
	                        </li>
							<li class="navTabs"><a href="../contact/">Contact</a></li>
                        </ul>
                    </div>
                </div>
			</nav>
			
			<div id="bodyContent">
				<h4 style="text-align: center;">Your maid-to-order cleaning service, because every home needs a maid.</h4>
				
				<form role="form" method="post" action="index.php">
	 				<p style="text-align: center;"><b>Message Us:</b></p>
                    <input type="text" class="formBox" name="Name" id="Name" placeholder="Your Name" required><br>
					<input type="text" class="formBox" name="email" id="email" placeholder="Your email" required><br>
					<input type="text" class="formBox" name="Subject" id="Subject" placeholder="Subject" required><br>
					<textarea type="text" class="formBox" name="Message" rows=4 id="Message" placeholder="Your Message" required></textarea>
					<input id="submitButton" class="gVButton" type="submit" name="submit" value="Send" style="margin-top: 5px;">
                    <?php echo "$result";?>
	 			</form>
		        
		        <div class="infoSection">
		        	<p><b>Contact Us:</b>
			        <a id="emails" href="mailto:contact@homemaidcleaningservice.net?subject=HomeMaid Cleaning Service">
                     	<mark>email</mark>
                     </a></p>
			        <p><b>Phone: </b>(805) 865 - 4633</p>
		        </div>
			</div>

			<footer>
				<p>
					HomeMaid Cleaning Service <br> Call: (805) 865 - 4633
				</p>
			</footer>
		</div>
		
		<script src="../jquery-1.2.0.js"></script>
    	<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
