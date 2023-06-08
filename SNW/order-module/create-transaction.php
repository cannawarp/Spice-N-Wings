<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
</head>
<body>
  <div class="center-user">
    <div class="container">
      <form method="POST" action="processes/process.order.php?action=create">
        <div class="title">Registration</div>
        <div class="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Customer Name</span>
              <input type="text" id="fname" class="input" name="sname" placeholder="Customer Name" required>
            </div>
            <div class="input-box">
              <span class="details">Description</span>
              <input type="text" id="fname" class="input" name="desc" placeholder="Description" required>
            </div>
            <div class="input-box">
              <span class="details">Amount</span>
              <input type="text" id="fname" class="input" name="amount" placeholder="Amount" required>
            </div>
            <div class="input-box">
              <span class="details">Product</span>
              <select name="prodid" class="input" required>
                <option value="">Select a product</option>
                <option value="1">Product 1</option>
                <option value="2">Product 2</option>
                <option value="3">Product 3</option>
                <!-- Add more options for other products -->
              </select>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Create">
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>