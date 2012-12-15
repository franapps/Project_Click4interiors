<h1><?php echo h($product['Product']['Product Name']); ?></h1>

<div>
	<img src=<?php echo $product['Product']['Image']; ?> style="max-height: 500px;">
</div>

<p><?php echo h($product['Product']['Product Description']); ?></p>