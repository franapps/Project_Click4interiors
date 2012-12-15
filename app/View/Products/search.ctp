<?php
    echo $this->Form->create('Products', array('action' => 'search'));
    echo $this->Form->input('Products.search');
    echo $this->Form->end('Submit');
?> 

<?php foreach ($products as $product): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($product['Product']['Product Name'],array('controller' => 'products', 'action' => 'view', $product['Product']['Product ID']));?>
        </td>
        <td><?php echo '£'.$product['Product']['Price']; ?></td>
        <td><p style="max-width: 400px; max-height: 200px; overflow: hidden;"> <?php echo $product['Product']['Product Description']; ?> </p></td>
        <td><img src=<?php echo $product['Product']['Image']; ?> style="max-width: 200px; max-height: 200px;" /></td>
    </tr>
<?php endforeach; ?>