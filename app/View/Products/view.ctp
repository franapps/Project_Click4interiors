<h1><?php echo $product['Product']['Product Name']; ?></h1>

<div>
	<img id="viewport" src=<?php echo $product['Product']['Image']; ?> style="max-height: 500px;">
</div>

<div id="desc">
	<h3> Item Description </h3>
	<p><?php echo $product['Product']['Product Description']; ?></p>
	<h4 id="price"><?php echo '£'.$product['Product']['Price']; ?></h4>
	<a href="#" class="button">Buy Now</a>
</div>