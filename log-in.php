<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Log In</title>
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
							<li class="current"><a href="prouduct.php">Shop</a></li>
							<li><a href="sign-up.php" class="button primary">Sign Up</a></li>
							<li><a href="log-in.php" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">
                    <span class=""></span>
					<header class="special container">
						<span class="icon fa-sign-in"></span>
						<h2>Log In</h2>
                        <p>Welcome back kombucha-lover!</p>
                        <p>Input your information below to log into your account.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form id="insert" name="insert" action="check.php" method="POST">
										<div class="row gtr-50">
											<div class="col-12">
												<label for="email">Email</label>
												<input type="text" name="email" />
                                            </div>
                                            <div class="col-12">
												<label for="password">Password</label>
                                                <input type="password" name="password" id="password"/>
                                            </div>
											<div class="col-12">
												<ul class="buttons" style="text-align: center">
													<li><input type="submit" class="login" value="Log In" /></li>
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

	</body>
</html>
