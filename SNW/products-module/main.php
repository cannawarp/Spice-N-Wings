<span id="search-result">
<h3>Product Details</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>Product ID</th>
        <th>Product Details</th>
        <th>Name</th>
        <th>Price</th>
        <th>Type</th>
        <th>Action</th> <!-- New column for the delete button -->
      </tr>
<?php
$count = 1;
if($product->list_product() != false){
  foreach($product->list_product() as $value){
    extract($value);
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><img src="img/<?php echo $prod_image;?>" class="thumbnail"/></td>
        <td><a href="index.php?page=product&action=profile&id=<?php echo $prod_id;?>"><?php echo $prod_name;?></a></td>
        <td><?php echo $prod_price;?></td>
        <td><?php echo $product->get_prod_type_name($product->get_prod_type($prod_id));?></td>
        <td>
          <?php
          if($user_access_level != 'Staff'){ 
          ?>  
            <form method="POST" action="processes/process.order.php?action=delete">
              <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
              <button type="submit">Delete</button>
            </form>
          <?php
          }
          ?>
        </td> <!-- Delete button for each row -->
      </tr>
<?php
    $count++;
  }
}else{
  echo "<tr><td colspan='6'>No Record Found.</td></tr>";
}
?>
    </table>
</div>
</span>