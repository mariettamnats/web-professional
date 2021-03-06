﻿<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

	if ($_POST['submit']) {
	
		if(!empty($_POST['check'])) {
			foreach($_POST['check'] as $value) {
				$check_msg .= "Checked:".$value."\n";            
			}	
		}
		
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			
			$error_message = "Please enter a valid e-mail address.";
			
		} else {
		
			$email_to = "mariettamnats@gmail.com";
			$email_subject ="Web Request!";
			$headers = 'From: ' . $_POST['email'] . "\r\n";

			if(mail($email_to, $email_subject, $check_msg, $headers)) {
				$result = "Your information has been submitted.";
			} else {
				$result = "Your e-mail address could not be submitted. Please contact us directly for service inquiries.";
			}
		}
	}

?>


<html lang="en">
<head>
    <title></title>

		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="css/styles.css">
		
		<style>

			.connect {
				margin: 50px 10px 10px 0;
			}
		
		</style>
		
</head>


<body>

	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				
				<a class="navbar-brand">Web Professional</a>
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			
			<!--<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="email" placeholder="E-mail" class="form-control" />
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" />
					</div>
					<button type="button class=" btn btn-success">Log In</button>
				</form>-->
			</div>
		</div>
	</div>
	
	<div class="jumbotron" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="title">Welcome to Web Professional</h1>
				<p class="lead">Contract us to design your next website or update an existing one.</p>
			</div>
		</div>
	</div>
	
	<div class="container" id="services">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<form method="post">
					<div class="form-group">
					
						<h4>Services Provided</h4>
							<ul>
								<li><input type="checkbox" name="check[]" value="responsive"> 
								Develop a creative, interactive, responsive website</li>
								<li><input type="checkbox" name="check[]" value="new"> 
								Create a new site to match a pre-determined layout</li>
								<li><input type="checkbox" name="check[]" value="existing"> 
								Custom layout to improve existing website</li>
								<li><input type="checkbox" name="check[]" value="errors"> 
								Fix errors on a site</li>
								<li><input type="checkbox" name="check[]" value="small"> 
								Small changes to existing website</li>
							</ul>
						
						<p class="marginTop">We will contact you:</p>
					
						<input type="email" class="rounded" placeholder="E-mail" name="email" size="30" required/> <br />
						<button type="submit" class="btn btn-success marginT" name="submit" value="submit">Submit</button><br />
						
							<?php if ($error_message) {echo '<div class="resultn">' . $error_message . '</div>';} else if ($result) {echo '<div class="resultp">' . $result . '</div>';} ?>

						
					</div>
				</form>
			</div>
			
			<div class="col-md-4">
				<div class="connect">
					<h4>Connect</h4>
					<p>Keep up to date on my posts by connecting with me on the social media of your choice:
						<ul>
							<li><a href="https://ca.linkedin.com/in/marietta-mnatsakanian-371a3b21" target="_blank"><img src="images/linkedin.jpg"></a>
							<li><a href="https://twitter.com/MariettaMnats" target="_blank"><img src="images/twitter.png"></a></li>
							<li><a href="https://github.com/mariettamnats" target="_blank"><img src="images/github.png"></a></li>
							<li><a href="https://plus.google.com/103177514776558866212" target="_blank"><img src="images/googleplus.png"></a></li>
						</ul>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="container footer">
		<div class="row">
			<p class="copyright">Copyright ©2016 Web Professional. All rights reserved.</p>
		</div>
	</div>


	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" 
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="transit.min.js"></script>

	<script type="text/javascript">
	
	$(document).ready(function() {
		$('.title').transition({ scale: 1.1 } , 1500 );
	});
	
	</script>

	
</body>
</html>
	