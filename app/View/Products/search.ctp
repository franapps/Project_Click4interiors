<?php
    echo $this->Form->create('Products', array('action' => 'search'));
    echo $this->Form->input('Products.search');
    echo $this->Form->end('Submit');
?> 

<?php if(isset($products) && count($products) != 0) {
    foreach ($products as $product): ?>
        <tr>
            <td>
                <?php echo $this->Html->link($product['Product']['Product Name'],array('controller' => 'products', 'action' => 'view', $product['Product']['ID']));?>
            </td>
            <td><?php echo '£'.$product['Product']['Price']; ?></td>
            <td><p style="max-width: 400px; max-height: 200px; overflow: hidden;"> <?php echo $product['Product']['Product Description']; ?> </p></td>
            <td><img src=<?php echo $product['Product']['Image']; ?> style="max-width: 200px; max-height: 200px;" /></td>
        </tr>
    <?php endforeach;}else{
        echo " <p class='error'> Sorry, there is no such product matching ".$searchstring.". If you used multiple words in the search, try using each word individually. </p>";
    } 
?>