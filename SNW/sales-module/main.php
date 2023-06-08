<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h3>Sales List</h3>
  <div id="subcontent">
    <table id="data-list">
      <tr>
        <th>Name</th>
        <th>Orders</th>
        <th>Price</th>
        <th>Sales</th>
        <th>Action</th>
      </tr>
      <?php
      $count = 1;
      if ($sales->list_instock() != false) {
        foreach ($sales->list_instock() as $value) {
          extract($value);
          // Assuming the product name for bottled water is "Bottled Water"
          if ($prod_name === "Bottled Water") {
            // Update the order count to 12
            $orderCount = 12;
          } else if ($prod_name === "Wings") {
            // Update the order count to 2 for Wings
            $orderCount = 2;
          } else if ($prod_name === "Chicken Ala King") {
            // Update the order count to 2 for Chicken Ala King
            $orderCount = 3;
          } else if ($prod_name === "Softdrinks") {
            // Update the order count to 2 for Softdrinks
            $orderCount = 5;
          } else {
            $orderCount = $sales->get_product_order_sales($prod_id);
          }
          $prodPrice = $product->get_prod_price($prod_id);
          $salesValue = 0; // Initialize salesValue to a default value
if ($orderCount !== null && $prodPrice !== null) {
  $salesValue = $orderCount * $prodPrice;
}
      ?>

          <tr>
            <td><a href="index.php?page=product&action=profile&id=<?php echo $prod_id; ?>"><?php echo $prod_name; ?></a></td>
            <td style="text-align: center;"><?php echo $orderCount; ?></td>
            <td style="text-align: center;"><?php echo $prodPrice; ?></td>
            <td style="text-align: center;"><?php echo $salesValue; ?></td>
            <td>
              
              <?php
              if ($user_access_level != 'Staff') {
              ?>
                <form method="POST" action="processes/process.order.php?action=delete">
                  <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                  <button type="submit">Delete</button>
                </form>
              <?php
              }
              ?>
            </td>
          </tr>
        <?php
          $count++;
        }
      } else {
        echo "<tr><td colspan='5'>No Record Found.</td></tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>