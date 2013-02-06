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
			echo $this->html->css('elastislide');
			echo $this->html->css('custom');
			echo $this->html->script('jquery-182');
			echo $this->html->script('scripts');
			echo $this->html->script('modernizr.custom.17475');
		?>
		<!-- Google Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">

		<script type="text/javascript">
			$(document).ready(function() {
				$('.sub-menu').css("display", "none");
			});
		</script>
	</head>
	<body>
		<div id="container" class="demo-3">
			<!-- this is my headline -->
			<div id="header">
				<img id="logo" src="/app/webroot/img/newlogo.jpg">
				<div id="headline">
					<h1><a href="/">Welcome to Click4Interiors</a></h1>
					<h3>The Home of <?php echo $desc[rand(0, 6)]; ?> Furniture</h3>	
				</div>
				<div id="search">
					<form method="POST" id="ProductsSearchForm" action="/products/search" accept-charset="utf-8">
						<label for="ProductsSearch">I am looking for...</label>
						<input name="data[Products][search]" type="text" placeholder="tub chairs" id="ProductsSearch"><input type="submit" value="Find it!">
					</form>
				</div>
			</div>
			
			<!-- This is my navigation -->
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
				</ul>
			</div>

			<!-- This is the Footer -->
			<div id="footer">
				<p id="copyright"> www.click4interiors.co.uk | Copyright &#169 <?php echo date('Y'); ?> | All rights reserved</p>
			</div>

			<div class="fixed-bar gallery">
				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list">
				<!-- 
					<?php if($title_for_layout=="Products") {
						foreach ($products as $product): ?>
							<li><a href="#"><img src=<?php echo $product['Product']['Image']; ?> alt="image01"/></a></li>
					<?php endforeach; 
					}else{
						echo "<li><a href='/posts/latest'><img src='/app/webroot/img/namgecko.jpg' alt='image05' /></a></li>";
						echo "<li><a href=#><img src='/app/webroot/img/namgecko.jpg' alt='image06' /></a></li>";
						echo "<li><a href=#><img src='/app/webroot/img/namgecko.jpg' alt='image07' /></a></li>";
						echo "<li><a href=#><img src='/app/webroot/img/namgecko.jpg' alt='image08' /></a></li>";

					}; ?> 
				-->
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

		</div>
	</body>
</html>
