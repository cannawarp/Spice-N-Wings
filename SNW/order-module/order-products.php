<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

h3 {
  margin-top: 0;
}

#receive-details {
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table td {
  padding: 8px;
}

table .info-text {
  font-weight: bold;
}

.btn-box {
  margin-bottom: 20px;
}

.btn-jsactive {
  display: inline-block;
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-jsactive:hover {
  background-color: #45a049;
}

#subcontent {
  margin-bottom: 20px;
}

#data-list {
  width: 100%;
  border-collapse: collapse;
}

#data-list th,
#data-list td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

#data-list th {
  background-color: #f2f2f2;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.modal h2 {
  margin-top: 0;
}

.modal p {
  margin-bottom: 20px;
}

.modal .container {
  margin-bottom: 20px;
}

.modal .clearfix {
  text-align: right;
}

.modal .submitbtn,
.modal .cancelbtn {
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 10px;
}

.modal .submitbtn:hover,
.modal .cancelbtn:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
  <h3>Order Transaction</h3>
  <div id="receive-details">
    <table>
      <tr>
        <td><label for="recdate">Order Date</label></td>
        <td class="info-text"><?php echo $order->get_order_date($id);?></td>
        <td><label for="purfrom">Sold To</label></td>
        <td class="info-text"><?php echo $order->get_order_customer($id);?></td>
      </tr>
      <tr>
        <td><label for="recamount">Amount</label></td>
        <td class="info-text"><?php echo $order->get_order_amount($id);?></td>
        <td><label for="recstatus">Status</label></td>
        <td class="info-text">
          <?php if($order->get_order_save($id) == 0){
              echo "Open Transaction";
            }else{
              echo "Saved Transaction";
            }
            ?>
        </td>
      </tr>
    </table>
  </div>

  <div class="btn-box">
    