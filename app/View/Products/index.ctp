<!-- File: app/view/products/index.php -->

<h1>Products Home</h1>
<p>This page will display a list of categories containing our products.</p>

<h1>Product List</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Description</th>
		<th> </th>
	</tr>
	<!-- Here is where we loop through our $products array, printing out product info -->
	<?php foreach ($products as $product): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($product['Product']['Product Name'],
			array('controller' => 'products', 'action' => 'view', $product['Product']['Product ID'])); ?>
		</td>
		<td>
			<?php echo '£'.$product['Product']['Price']; ?>
		</td>
		<td><p style="max-width: 400px; max-height: 200px; overflow: hidden;"> <?php echo $product['Product']['Product Description']; ?> </p></td>
		<td><img src=<?php echo $product['Product']['Image']; ?> style="max-width: 200px; max-height: 200px;" /></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($product); ?>
</table>