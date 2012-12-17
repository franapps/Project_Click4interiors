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
			echo $this->html->css('flexslider');
			echo $this->html->script('jquery-182');
			echo $this->html->script('jquery.flexslider');
			echo $this->html->script('scripts');
		?>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.sub-menu').css("display", "none");
			});
		</script>
	</head>
	<body>
		<div id="container">
			<!-- this is my headline -->
			<div id="header">
				<img id="logo" src="/app/webroot/img/newlogo.jpg" id="logo" style="max-height:90px;">
				<h1><a href="/">Welcome to Click4Interiors</a></h1>
				<h2><?php echo ">>".$title_for_layout; ?></h2>
				<h3>The Home of <?php echo $desc[rand(0, 6)]; ?> Furniture</h3>	
				<div class="search">
					<form method="POST" action="products/search">
						<label>I am Looking for...</label><input type="text" placeholder="tub chairs..."><input type="submit" value="Find it!">
					</form>
				</div>
			</div>
			
			<!-- This is my navigation -->
			<nav>
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
				
				<!-- Content goes here -->
				<?php echo $this->fetch('content'); ?>

			</div>

			<!-- This is the Footer -->
			<div id="footer" class="clearfix">
				<ul class="clearfix">
					<a href="#"><li>About us</li></a>
					<a href="#"><li>Terms & Conditions</li></a>
					<a href="/posts/index"><li>Blog</li></a>
				</ul>
				<p id="copyright" class="clearfix"> www.click4interiors.co.uk | Copyright &#169 <?php echo date('Y'); ?> | All rights reserved</p>
			</div>

		</div>
	</body>
</html>
