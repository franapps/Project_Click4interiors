<h1>Add Product</h1>
<?php
echo $this->Form->create('Product');
echo $this->Form->input('Product Name');
echo $this->Form->input('Product ID');
echo $this->Form->input('Manufacturer');
echo $this->Form->input('Alternate Manufacturer');
echo $this->Form->input('Product Description', array('rows' => '5'));
echo $this->Form->input('Category');
echo $this->Form->input('Sub-Category');
echo $this->Form->input('Tags');
echo $this->Form->input('Price');
echo $this->Form->input('Wholesale Cost');
echo $this->Form->input('Delivery Cost');
echo $this->Form->input('Image');
echo $this->Form->end('Add Product');
?>