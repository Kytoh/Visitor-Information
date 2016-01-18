<?php
$base_path = __DIR__.'/';
ini_set ( 'DISPLAY_ERRORS', 0 );
include 'private/include.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="KevinCalaSanchez at kevincala.com">
<meta name="generator" content="HardCoded">

<title>Management</title>

<!-- Bootstrap Core /css -->
<!-- Compiled and minified CSS -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script type="text/javascript"
	src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</head>
<!--  -->
<body style="background: #DFDFFF; color: #000000">
	<nav>
		<div class="nav-wrapper container">
			<a href="http://www.kevincala.com" class="center brand-logo"><img
				src="images/logo.png" class="responsive-img" style="height: 64px;"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="http://www.kevincala.com">KevinCala.Com</a></li>
				<li><a href="https://github.com/Kytoh/Visitor-Information">Info
						about this tool</a></li>
			</ul>
		</div>

	</nav>

	<!-- Page Content -->
	<div style="clear: both" class="container">
		<ul class="tabs">
			<li class="tab col s3"><a href="#home">Welcome</a></li>
			<li class="tab col s3"><a href="#contact">Contact</a></li>
		</ul>
		<div class="row">
			<div id="home" class="col s12">
				<div class="col s12 m12">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Service</span>
							<p>Thank you for interesting in our service</p>
						</div>
						<div class="card-action">
							<a onclick="contact()">Please Contact Me</a>
						</div>
					</div>
				</div>
			</div>
			<div id="contact" class="col s12">
				<form class="col s12">
					<div class="row">
						<h5>Company Data</h5>
						<div class="input-field col s12 m6">
							<input id="business_name" type="text" class="validate" required>
							<label for="business_name">Company Name</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="ceoname" type="text" class="validate"> <label
								for="ceoname">CEO Name</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="business_city" type="text" class="validate" required>
							<label for="business_city">City</label>
						</div>
						<div class="input-field col s12 m6">
							<select id="business_country" class="icons">
								<option value="" disabled selected>Choose your option</option>
					          	<?php 
					        	foreach ( $country as $ky => $name ) {
									echo '<option value="' . $ky . '" data-icon="images/flags/' . $ky . '.png" class="circle left">' . $name . "</option>\n";
								}?>
          					</select> <label for="business_country">Country</label>
						</div>
					</div>
					<div class="row">
						<h5>Personal Information</h5>
						<div class="input-field col s12">
							<input id="fullname" type="text" class="validate" required> <label
								for="fullname">Full Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m4">
							<input id="phone" type="tel" class="validate" required> <label
								for="phone">Contact Phone</label>
						</div>
						<div class="input-field col s12 m8">
							<input id="email" type="email" class="validate"> <label
								for="email">Contact Email</label>
						</div>
					</div>
					<button onclick="document.getElementById('form').submit()"
						type="button" class="btn btn-primary s12">Send my Information</button>
					<br />
				</form>
			</div>
		</div>

	</div>
	<!-- /.container -->
	<footer>
		<div></div>
	</footer>

</body>
<script> 
$(document).ready(function() {
    $('select').material_select();
});

function contact(){$('ul.tabs').tabs('select_tab', 'contact');}</script>
}
</html>