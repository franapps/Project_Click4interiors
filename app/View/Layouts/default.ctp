<?php 
$desc = array("Fabulous", "Gorgeous", "Fantastic", "Beautiful", "Trendy", "Contemporary", "Amazing")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->html->charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<?php
			echo $this->fetch('meta');
			echo $this->html->css('style');
<<<<<<< HEAD
<<<<<<< HEAD
			echo $this->html->css('flexslider');
			echo $this->html->script('jquery-182');
			echo $this->html->script('jquery.flexslider');
			echo $this->html->script('scripts');
=======
=======
>>>>>>> Updates to php
			echo $this->html->css('elastislide');
			echo $this->html->css('custom');
			echo $this->html->script('jquery-182');
			echo $this->html->script('scripts');
			echo $this->html->script('modernizr.custom.17475');
<<<<<<< HEAD
>>>>>>> Replaced flexslider with elastislide, updated css, added sample images
=======
>>>>>>> Updates to php
		?>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.sub-menu').css("display", "none");
			});
		</script>
	</head>
	<body>
<<<<<<< HEAD
<<<<<<< HEAD
		<div id="container">
			<!-- this is my headline -->
			<div id="header">
				<img id="logo" src="/app/webroot/img/newlogo.jpg" id="logo" style="max-height:90px;">
				<h1><a href="/">Welcome to Click4Interiors</a></h1>
				<h2><?php echo ">>".$title_for_layout; ?></h2>
				<h3>The Home of <?php echo $desc[rand(0, 6)]; ?> Furniture</h3>	
				<div class="search">
=======
=======
>>>>>>> Updates to php
		<div id="container" class="demo-3">
			<!-- this is my headline -->
			<div id="header">
				<img id="logo" src="/app/webroot/img/newlogo.jpg">
				<div id="headline">
					<h1><a href="/">Welcome to Click4Interiors</a></h1>
					<h3>The Home of <?php echo $desc[rand(0, 6)]; ?> Furniture</h3>	
				</div>
				<div id="search">
<<<<<<< HEAD
>>>>>>> Replaced flexslider with elastislide, updated css, added sample images
					<form method="POST" action="products/search">
=======
					<form method="POST" action="/products/search">
>>>>>>> Updates to php
						<label>I am Looking for...</label><input type="text" placeholder="tub chairs..."><input type="submit" value="Find it!">
					</form>
				</div>
			</div>
			
			<!-- This is my navigation -->
<<<<<<< HEAD
<<<<<<< HEAD
			<nav>
=======
			<nav >
>>>>>>> Replaced flexslider with elastislide, updated css, added sample images
				<!-- Drop down Nav Bar -->
				<div class="category">
					<h2><a href="/products" class="">Living </a></h2>
					<ul class="sub-menu">
						<li><a href="#">Chairs</a></li>
						<li><a href="#">Tables</a></li>
						<li><a href="#">Sofas</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="dining.php" class="">Dining </a></h2>
					<ul class="sub-menu">
						<li><a href="#">Dining Sets</a></li>
						<li><a href="#">Chairs</a></li>
						<li><a href="#">Tables</a></li>
						<li><a href="#">Sideboards</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="#" class="">Bedroom </a></h2>
					<ul class="sub-menu">
						<li><a href="#">Beds</a></li>
						<li><a href="#">Cabinets</a></li>
						<li><a href="#">Wardrobes</a></li>
						<li><a href="#">Dressers</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="#" class="">Bespoke </a></h2>
					<ul class="sub-menu">
						<li><a href="#">Tub Chairs</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="#" class="">Accessories </a></h2>
					<ul class="sub-menu">
						<li><a href="#">Mirrors</a></li>
						<li><a href="#">Lighting</a></li>
						<li><a href="#">Ornaments</a></li>
						<li><a href="#">Cushions</a></li>
						<li><a href="#">Rugs</a></li>
=======
			<nav >
				<!-- Drop down Nav Bar -->
				<div class="category">
					<h2><a href="/products/cat/living" class="">Living </a></h2>
					<ul class="sub-menu">
						<li><a href="/products/cat/chairs">Chairs</a></li>
						<li><a href="/products/cat/tables">Tables</a></li>
						<li><a href="/products/cat/sofas">Sofas</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="/products/cat/dining" class="">Dining </a></h2>
					<ul class="sub-menu">
						<li><a href="/products/cat/dining_sets">Dining Sets</a></li>
						<li><a href="/products/cat/dining_chairs">Chairs</a></li>
						<li><a href="/products/cat/dining_tables">Tables</a></li>
						<li><a href="/products/cat/sideboards">Sideboards</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="/products/cat/bedroom" class="">Bedroom </a></h2>
					<ul class="sub-menu">
						<li><a href="/products/cat/Beds">Beds</a></li>
						<li><a href="/products/cat/cabinets">Cabinets</a></li>
						<li><a href="/products/cat/wardrobes">Wardrobes</a></li>
						<li><a href="/products/cat/dressers">Dressers</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="/products/cat/bespoke" class="">Bespoke </a></h2>
					<ul class="sub-menu">
						<li><a href="/products/cat/bespoke">Tub Chairs</a></li>
					</ul>
				</div>
				<div class="category">
					<h2><a href="/products/cat/accessories" class="">Accessories </a></h2>
					<ul class="sub-menu">
						<li><a href="/products/cat/mirrors">Mirrors</a></li>
						<li><a href="/products/cat/lighting">Lighting</a></li>
						<li><a href="/products/cat/ornaments">Ornaments</a></li>
						<li><a href="/products/cat/cushions">Cushions</a></li>
						<li><a href="/products/cat/rugs">Rugs</a></li>
>>>>>>> Updates to php
					</ul>
				</div>
			</nav>

			<!-- Jscript for the nav bar -->
			<script type="text/javascript">
				$("div.category").hover(function() {
					$(this).find("ul.sub-menu").stop(true, true).slideDown();
				}, function(){
					$(this).find("ul.sub-menu").stop(true, true).slideUp();
				});
			</script>

<<<<<<< HEAD
<<<<<<< HEAD
			<div id="content">
				
				<!-- Content goes here -->
				<?php echo $this->fetch('content'); ?>

			</div>

			<!-- This is the Footer -->
			<div id="footer" class="clearfix">
				<ul class="clearfix">
					<a href="#"><li>About us</li></a>
					<a href="#"><li>Terms & Conditions</li></a>
					<a href="/posts/index"><li>Blog</li></a>
=======

			<div id="content">
				<div id="viewer">
					<!-- Content goes here -->
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>


			<!-- This is the Footer -->
			<div id="sidebar">
				<ul>
					<a href="#"><li>About us</li></a>
					<a href="#"><li>Latest Offers</li></a>
					<a href="#"><li>Newest Products</li></a>
					<a href="/posts/index"><li>Blog</li></a>
					<a href="#"><li>Terms & Conditions</li></a>
>>>>>>> Updates to php
				</ul>
				<p id="copyright" class="clearfix"> www.click4interiors.co.uk | Copyright &#169 <?php echo date('Y'); ?> | All rights reserved</p>
			</div>
=======


			<div id="content">
				<div id="viewer">
					<!-- Content goes here -->
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>

			<!-- This is the Footer -->
<<<<<<< HEAD
			<div id="sidebar">
				<ul>
					<a href="#"><li>About us</li></a>
					<a href="#"><li>Latest Offers</li></a>
					<a href="#"><li>Newest Products</li></a>
					<a href="/posts/index"><li>Blog</li></a>
					<a href="#"><li>Terms & Conditions</li></a>
				</ul>
			</div>

			<!-- This is the Footer -->
			<div id="footer">
				<p id="copyright"> www.click4interiors.co.uk | Copyright &#169 <?php echo date('Y'); ?> | All rights reserved</p>
			</div>

			<div class="fixed-bar gallery">
				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list">
					<li><a href="#"><img src="img/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="img/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="img/namgecko.jpg" alt="image03" /></a></li>
					<li><a href="#"><img src="img/4.jpg" alt="image04" /></a></li>
					<li><a href="#"><img src="img/5.jpg" alt="image05" /></a></li>
					<li><a href="#"><img src="img/6.jpg" alt="image06" /></a></li>
					<li><a href="#"><img src="img/7.jpg" alt="image07" /></a></li>
					<li><a href="#"><img src="img/1.jpg" alt="image08" /></a></li>
					<li><a href="#"><img src="img/4.jpg" alt="image09" /></a></li>
					<li><a href="#"><img src="img/7.jpg" alt="image10" /></a></li>
					<li><a href="#"><img src="img/5.jpg" alt="image11" /></a></li>
					<li><a href="#"><img src="img/2.jpg" alt="image12" /></a></li>
					<li><a href="#"><img src="img/1.jpg" alt="image13" /></a></li>
					<li><a href="#"><img src="img/6.jpg" alt="image14" /></a></li>
					<li><a href="#"><img src="img/2.jpg" alt="image15" /></a></li>
					<li><a href="#"><img src="img/6.jpg" alt="image16" /></a></li>
					<li><a href="#"><img src="img/1.jpg" alt="image17" /></a></li>
					<li><a href="#"><img src="img/4.jpg" alt="image18" /></a></li>
					<li><a href="#"><img src="img/7.jpg" alt="image19" /></a></li>
					<li><a href="#"><img src="img/namgecko.jpg" alt="image20" /></a></li>
=======
			<div id="footer">
				<p id="copyright"> www.click4interiors.co.uk | Copyright &#169 <?php echo date('Y'); ?> | All rights reserved</p>
			</div>

			<div class="fixed-bar gallery">
				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list">
					<?php foreach ($products as $product): ?>
					<li><a href="#"><img src=<?php echo $product['Product']['Image']; ?> alt="image01" /></a></li>
					<?php endforeach; ?>
>>>>>>> Updates to php
				</ul>

				<!-- End Elastislide Carousel -->
			</div>

			<script type="text/javascript" src="/app/webroot/js/jquerypp.custom.js"></script>
			<script type="text/javascript" src="/app/webroot/js/jquery.elastislide.js"></script>
			<script type="text/javascript">
				
				$( '#carousel' ).elastislide( {
					minItems : 4
				} );
				
			</script>
<<<<<<< HEAD
>>>>>>> Replaced flexslider with elastislide, updated css, added sample images
=======
>>>>>>> Updates to php

		</div>
	</body>
</html>
