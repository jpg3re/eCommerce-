<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head>
		<title>Products</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>




	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
					<h1 id="logo"><img src="images/logo_grey.png" alt="Custom-Bucha" width="15%"/></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Welcome</a></li>
							<li class="current"><a href="about-us.php">Our Story</a></li>
							<li class="current" ><a href="product.php">Shop</a></li>
							<li class="current"><a href="contact.php">Contact Us</a></li>
							<li><a id="link1" href="sign-up.php" class="button primary">Sign Up</a></li>
							<li><a id="link2" href="log-in.php" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>

				<script>
			var loggedIn='<?php echo $_SESSION["login"];?>';
			console.log(loggedIn);
			if(loggedIn=="true"){
				document.getElementById("link1").href = "profile.php";
				document.getElementById("link1").innerHTML="My Profile";

				document.getElementById("link2").href = "logout.php";
				document.getElementById("link2").innerHTML="Logout";
				console.log("link to product");
			}else{
				console.log("link to login");
			}

		</script>

			<!-- Main -->
				<article id="main">
					<header class="special container">
						<span class="icon fa-shopping-cart"></span>
						<h2> <strong >Products</strong></h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3>Six Pack Customize</h3>
												</header>
												<p>$24</p>
												<ul class="buttons">
													<li><a href="six-pack.html" class="button primary">View Details</a></li>
												</ul>
											</section>

											<section>
												<header>
													<h3>Twelve Pack Customize</h3>
												</header>
												<p>$42</p>
												<ul class="buttons">
													<li><a href="12-pack.html" class="button primary">View Details</a></li>
												</ul>
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<img src="images/bottles.png" width ="25%" alt="" />
												<br />
												<br />
												<br />
												<br />
												<br />
												<img src="images/bottles.png" width ="25%" />
											</section>
										</div>
								</div>
							</div>
						</section>

						<footer id="footer">

							<ul class="copyright">
								<li>&copy; CustomBucha</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>

						</footer>


								</div>
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
