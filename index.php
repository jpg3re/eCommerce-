<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    Jill testing commit & push 9/17. Jill testing using Atom.
-->
<html>

	<head>
		<title>CustomBucha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><img src="images/logo_grey.png" alt="Custom-Bucha" width="15%"/></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Welcome</a></li>
							<li class="current"><a href="about-us.php">Our Story</a></li>
							<li class="current"><a id="link" href="product.php">Shop</a></li>
							<li class="current"><a href="contact.php">Contact Us</a></li>
							<li><a href="sign-up.php" class="button primary">Sign Up</a></li>
							<li><a href="log-in.php" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>
				<?php
		session_start();
		if( $_SESSION["login"]=="true"){
			header('Location: member-home.php');
		}
		?>

	<!-- <script>
		var loggedIn='<?php echo $_SESSION["login"];?>';
		console.log(loggedIn);
		if(loggedIn=="true"){
			document.getElementById("link").href="product.php";
			console.log("link to product");
		}else{
			document.getElementById("link").href="log-in.php";
			console.log("link to login");
		} -->
		
	</script>
			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">
						<header></header>
						<br />
						<br />
						<h1> <strong> All the goodness of Kombucha,
						<br />
						customized to your taste </strong> </h1>
						<footer>
							<ul class="buttons stacked">
								<li><a href="product.php" class="button fit scrolly">Create Your Recipe</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-leaf"></span>
						<h2>We sell made-to-order kombucha based on
						<br />
						your flavor and tea preferences.</h2>
						<p>At CustomBucha, we recognize that not everyone prefers their kombucha the same way,
						<br />
						and not everyone has the time to home-brew,
						so we do the work for you.
						<br />
						</p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>Dating back to ancient China, Kombucha tea is a fermented drink made with sugar, bacteria and yeast. </h2>
									</header>
									<p>As a great source of probiotics, it significantly improves digestion. It has also been shown to increase energy, strengthen the immune system and reduce cholesterol.</p>
									<footer>
										<ul class="buttons">
											<li><a href="about-us.php" class="button">See Why We Love Kombucha</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<img src="images/kombucha_home.jpg" alt="Orange Kombucha" width="80%"/>
									</ul>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Made in small-batches</h3>
										</header>
										<p>Our Kombucha is created in small-batches to provide for your customizations and ensure the highest quality.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Simple Ingredients</h3>
										</header>
										<p>You decide everything that goes into your bottle of Kombucha. We ensure every one of these ingredients is of the best quality, never using artificial flavoring.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Fair Trade</h3>
										</header>
										<p>Our tea leaves are entirely fair-trade and organic. We want to provide a great taste that you can feel great about.</p>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<!-- <section class="wrapper style3 container special">

							<header class="major">
								<h2>Next look at this <strong>cool stuff</strong></h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>A Really Fast Train</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>An Airport Terminal</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Hyperspace Travel</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>And Another Train</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer>

						</section> -->

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Get Started!</h2>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button primary">Begin Your Recipe</a></li>
							<li><a href="about-us.php" class="button">Read More About Us</a></li>
						</ul>
					</footer>

				</section>

			<!-- Footer -->
				<footer id="footer">

					<!-- <ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul> -->

					<ul class="copyright">
						<li>&copy; CustomBucha</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
