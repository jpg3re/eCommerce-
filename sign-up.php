<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Sign Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><img src="images/logo_grey.png" alt="Custom-Bucha" width="15%"/></h1>
					<nav id="nav">
						<ul>
                            <li class="current"><a href="index.html">Welcome</a></li>
							<li class="current"><a href="about-us.html">Our Story</a></li>
							<li class="current"><a href="contact.html">Contact Us</a></li>
							<li><a href="sign-up.php" class="button primary">Sign Up</a></li>
							<li><a href="log-in.html" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-user-circle"></span>
						<h2>Sign UP</h2>
						<p>Join the CustomBucha community!</p>
						<p>Use the form below to create an account.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form id="insert" name="insert" action="sign-up.php" method="POST">
										<div class="row gtr-50">
											<div class="col-12">
												<label for="name">Full Name</label>
												<input type="text" name="full_name" id="full_name"/>
											</div>
											<div class="col-12">
												<label for="email">Email</label>
												<input type="text" name="email" title="Email" id="email" />
											</div>
											<div class="col-12">
												<label for="name">Password</label>
												<input type="text" name="password" id="password"/>
											</div>
											<div class="col-12">
												<label for="address">Address</label>
												<input type="text" name="address" id="address"/>
											</div>
											<div class="col-4">
												<label for="city">City</label>
												<input type="text" name="city" id="city"/>
											</div>
											<div class="col-4">
												<label for="state">State</label>
												<select name="state" id="state">
													<option value="" disabled selected>Select State</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</select>
											</div>
											<div class="col-4">
												<label for="zip">Zip Code</label>
												<input type="text" name="zip_code" id="zip_code">
											</div>
											<div class="col-12">
												<ul class="buttons" style="text-align: center">
													<li><input type="submit" class="signup" value="Sign Up" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				$(document).ready(function() {

				  $('#insert').submit(function(e) {
				    e.preventDefault();
				    var password = $('#password').val();
						var full_name = $('#full_name').val();
						var email = $('#email').val();
						var address = $('#address').val();
						var city = $('#city').val();
						$(".error").remove();
						if(full_name.length < 1) {
							$('#full_name').after('<span class="error" style="color:red">Field can not be empty</span>');
						}
						if (!/^[a-zA-Z\s]*$/.test(full_name)){
							$('#full_name').after('<span class="error" style="color:red">Invalid name</span>');
						}
						if (password.length < 8) {
							$('#password').after('<span class="error" style="color:red">Password must be at least 8 characters long</span>');
						}
						if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)){
							$('#email').after('<span class="error" style="color:red">Invalid email</span>');
						}
						if(!/^[a-zA-Z0-9\-\s]+$/.test(address)){
							$('#address').after('<span class="error" style="color:red">Invalid address</span>');
						}
						if(!/^[a-zA-Z0-9\-\s]+$/.test(city)){
							$('#city').after('<span class="error" style="color:red">Invalid city</span>');
						}
					});
				 });
		</script>
	</body>
</html>

<?php
$password= $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);

    $db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9n13lvg10h48 user=cmjanmfuwvlbwe password=
	97d83c70e48411627d817565d0b1d3f2d592e6df32448158238e69eae50a61aa");
	$query = "INSERT INTO siteusers VALUES ('$_POST[full_name]','$_POST[email]','$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip_code]', '$hashed_password')";
	$result = pg_query($query);
?>
