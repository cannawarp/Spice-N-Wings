<?php
include_once '../classes/class.order.php';

$order = new Order();

// get the q parameter from URL
$q = $_GET["q"];
$count = 1;
$hint=' <h3>Search Result(s)</h3><table id="data-list">
<tr>
        <th>Order No.</th>
        <th>Customer Description</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>';
$data = $order->list_order_search($q);
if($data != false){
    //$hint = '<ul>';
    foreach($data as $value){
        extract($value);

        //$hint .= '<li>'.$prod_name. '</li>';
        $hint .= '
       <tr>
        <td>'.$count.'</td>
        <td><a href="index.php?page=order&action=profile&id='.$order_id.'">'.$order_customer.', '.$order_description.'</a></td>
        <td>'.$order_amount.'</td>
        <td>'.$order_status.'</td>
      </tr>
        </tr>';
        $count++;
    }
}
$hint .= '</table>';

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "No result(s)" : $hint;
?>