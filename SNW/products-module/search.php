<?php
include_once '../classes/class.product.php';

$product = new Product();

// get the q parameter from URL
$q = $_GET["q"];
$count = 1;
$hint=' <h3>Search Result(s)</h3><table id="data-list">
<tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Status</th>
      </tr>';
$data = $product->list_product_search($q);
if($data != false){
    //$hint = '<ul>';
    foreach($data as $value){
        extract($value);

        //$hint .= '<li>'.$prod_name. '</li>';
        $hint .= '
       <tr>
        <td>'.$count.'</td>
        <td><a href="index.php?page=product&action=profile&id='.$prod_id.'">'.$prod_name.', '.$prod_description.'</a></td>
        <td>'.$prod_price.'</td>
        <td>'.$prod_status.'</td>
      </tr>
        </tr>';
        $count++;
    }
}
$hint .= '</table>';

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "No result(s)" : $hint;
?>