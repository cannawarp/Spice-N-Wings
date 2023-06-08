<span id="search-result">
  <div class="order_list">
    <h3>Order List</h3>
  </div>
  <table id="data-list">
    <tr>
      <th>Order No.</th>
      <th>Order Date / ID</th>
      <th>Customer / Description</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Action</th> <!-- New column for the delete button -->
    </tr>
    <?php
    $count = 1;
    if ($order->list_order() != false) {
      foreach ($order->list_order() as $value) {
        extract($value);
        ?>
        <tr>
          <td><?php echo $count; ?></td>
          <td><a href="index.php?page=order&action=order&id=<?php echo $order_id; ?>"><?php echo $order_date_added . ' - ' . $order_id; ?></a></td>
          <td><?php echo $order_customer . ' - ' . $order_description; ?></td>
          <td><?php echo $order_amount; ?></td>
          <td>
            <?php
            if ($order_saved == 0) {
              echo "Open Transaction";
            } else {
              echo "Saved Transaction";
            }
            ?>
            <?php if ($order_saved == 0) : ?>
              <br>
              <a href="index.php?page=order&action=complete&id=<?php echo $order_id; ?>">Complete Sale</a>
            <?php endif; ?>
          </td>
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
        <tr>
        <?php
        $count++;
      }
    } else {
      echo "No Record Found.";
    }
    ?>
  </table>
</div>