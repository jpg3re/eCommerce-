<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Our Story</title>
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
							<li class="current"><a id="home" href="index.php">Welcome</a></li>
							<li class="current"><a href="about-us.php">Our Story</a></li>
							<li class="current"><a href="product.php">Shop</a></li>
							<li class="current"><a href="contact.php">Contact Us</a></li>
							<li><a id="link" href="sign-up.php" class="button primary">Sign Up</a></li>
							<li><a id="logout" href="log-in.php" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>

				<?php
					session_start();
	
				?>

		<script>
			var loggedIn='<?php echo $_SESSION["login"];?>';
			console.log(loggedIn);
			if(loggedIn=="true"){
				document.getElementById("logout").href="logout.php";
				document.getElementById("logout").innerHTML="Logout";

				document.getElementById("link").href="profile.php";
				document.getElementById("link").innerHTML="My Profile";
				console.log("link to product");
			}else{
				
				console.log("link to login");
			}
			
		</script>
			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-history"></span>
						<h2> <strong>Our Story</strong></h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3>Kombucha</h3>	
												</header>
												<p>Kombucha is a refreshing beverage made from fermented tea. Kombucha has many positive health benefits due to its rich source of probiotics and antioxidants. Your immune system and overall health is boosted significantly and is scientifically proven to have a variety of health benefits. </p>
											</section>

											<section>
												<a  class="image featured"><img src="images/KombuchaProduction.jpg" alt="" /></a>
												<header>
													<h3>Founded in 2018</h3>
												</header>
												<p>CustomBucha was founded in 2018 in Charlottesville, Virginia by a group of Kombucha lovers. "Brew master," Jack Girerd uses his special Kombucha technique to make the critcally acclaimed customizable Kombucha.  </p>
												
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<a class="image featured"><img src="images/kombuchaPour.jpg" alt="" /></a>
												<header>
													<h3>CostumBucha</h3>
												</header>
												<p>CostumBucha is a unique company, because it offers customizable flavors of Kombucha. Customers are able to select their favorite flavors and can experiment with different combinations of ingredients. Selecting the type of tea and adding different fruity ingredients are options in the customization stage. </p>
												<a class="image featured"><img src="images/kombuchaFlavors.jpg"/></a>
												<p>The founders of CustomBucha, Jill DeWoody, Emily Roberts, and Jack Girerd, recognized the lack of customization in the Kombucha industry and created a more enjoyable Kombucha experience, where the user gets to drink the limitless possibilities that CostumBucha offers. There are hundreds of different combinations that are possible with our extensive selection of organic ingredients. </p>
											</section>
										</div>

								</div>
							</div>
						</section>


						<section id="cta">

							<header>
								<h2>Get Started!</h2>
							</header>
							<footer>
								<ul class="buttons">
									<li><a href="#" class="button primary">Begin Your Recipe</a></li>
									<li><a href="sign-up.php" class="button">Sign Up</a></li>
								</ul>
							</footer>
		
						</section>
						<footer id="footer">

							<ul class="copyright">
								<li>&copy; CustomBucha</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
		
						</footer>
					<!-- Two -->
						<!-- <section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>This is Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Also Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Probably Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section> -->

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
