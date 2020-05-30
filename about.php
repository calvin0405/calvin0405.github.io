<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>GameBoy Store</title>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" media="screen" href="Style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
		
	<header>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-6">
					<a href="index.php">
						<img class="icon" src="https://imagehost.imageupload.net/2020/05/28/Logob1fdbfbece8a5fcb.png" width=50%>
					</a>
				</div>

				<div class="col-lg-3">
					<div class="searchBar">
						<input type="text" class="searchInput" placeholder="Search...">
						<button type="submit" class="searchButton">
							<i class="fas fa-search"></i>
					   </button>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="shoppingCart">
						<button href="#" class="cartButton">
							<i class="fas fa-shopping-cart"></i><b> CART</b>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>
		

	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
		<div class="container-xl">
			<div class="navbar-brand">GAMEBoy Store</div>

			<div id="navb" class="navbar-collapse collapse hide">
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">HOME</a>
				  	</li>

					<li class="nav-item active now">
						<a class="nav-link" href="about.php">ABOUT US</a>
					</li>
						
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PRODUCTS</a>
						<div class="dropdown-menu">
							<a href="ps4.php" class="dropdown-item">PLAYSTATION 4</a>
							<div class="dropdown-divider"></div>
							<a href="xbox.php" class="dropdown-item">XBOX</a>
							<div class="dropdown-divider"></div>
							<a href="switch.php" class="dropdown-item">NINTENDO SWITCH</a>
							<div class="dropdown-divider"></div>
							<a href="pc.php"class="dropdown-item">PC GAMING</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="contact.php">CONTACT US</a>
				  	</li>
			 	</ul>
		  
		  		<ul class="nav navbar-nav ml-auto">
				  <?php
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    ?>
                      <li class="nav-item">
			  			<a class="nav-link" href="register.php"><span class="fas fa-user"></span> Sign Up</a>
					</li>

					<li class="nav-item">
			  			<a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
					</li>
					<?php
        }
        else{
        ?>
                <li class="nav-item">
			  			<a class="nav-link" href="reset-password.php"><span class="fas fa-user"></span> Reset PW</a>
					</li>

					<li class="nav-item">
			  			<a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
				<?php
        }
                    ?>
		  		</ul>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="container-xl">
			<div class="banner">
				<img src="https://imagehost.imageupload.net/2020/05/29/about-us-banner-png-2.png" width=100%>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-lg-12">
			<div class="container-xl intro">
				<h1 class="heading">Welcome to GAMEBoy Store</h1>
				<p class="font">We are a fast paced, forward thinking and dynamic internet based retailer of video games products.</p>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="container-xl intro">
				<h3 class="heading">HOW WE STARTED</h3>
				<p class="font">We operate from our custom built head office in Hong Kong, which houses the central command station for our entire operation. It is responsible for the picking, packing and dispatching of your order, as well as everything before, during and after that process. After noticing that gamers in Hong Kong were paying same of the highest prices in the world for video games, we decided created GAMEBoy Store to bring you the biggest titles at the best prices!</p>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="container-xl intro">
				<h3 class="heading">WHAT WE DO</h3>
				<p class="font">We entered the market with a core objective, bringing video games at the best possible value for the online community. Nowadays we continue on the same path and have broadened our product offering to include categories like console, accessories and prepaid card. All in all we have almost 100,000 products for sale on our site and that offering is growing every day.</p>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="container-xl intro">
				<h3 class="heading">THE FUTURE</h3>
				<p class="font">We will work tirelessly to bring you the most on trend products and the best prices and will push the boundaries of our product offering further and further to ensure ozgameshop.com is your one stop shop for all things entertainment.</p>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="container-xl slogan">
				<h2><i>"Video games ruined our lives, good job we have two more..."</i></h2>
			</div>
		</div>

	</div>

	<footer>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/f1.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk//templates_new/images/f3.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/f5fps.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/f6.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/f7.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/f9.gif">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/boot-paypal-logo.gif">
				</div>

				<div class="col-lg-2">
					<img class="paymentIcon" src="https://www.openshop.com.hk/templates_new/images/boot-octopus-logo.gif">
				</div>

				<div class="col-lg-2"></div>
				<div class="col-lg-2"></div>
				<div class="col-lg-2"></div>
				<div class="col-lg-2"></div>

			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="awardBar">
						<img class="awardIcon" width=100 src="https://www.openshop.com.hk/templates_new/images/nf.png">
						<img class="awardIcon" width=100 src="https://www.openshop.com.hk/templates_new/images/localbrandhk.png">
						<img class="awardIcon" width=100 src="https://www.openshop.com.hk/templates_new/images/smile20192.jpg">
						<img class="awardIcon" width=70 src="https://www.openshop.com.hk/templates_new/images/pc3pic.png">
					</div>
				</div>
			</div>

		</div>
	</footer>

	<script>
		$('ul.nav li.dropdown').hover(function() {
  			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
		}, function() {
  			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
		});
	</script>

</body>
</html>