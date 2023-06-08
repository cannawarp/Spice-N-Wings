<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=".date("Y-m-d")."-user-report.xls");

include_once 'C:\xampp\htdocs\SNW2\login\classes\class.sales.php';
include '../config/config.php';

$sales = new Sales();


echo 'Nbr' . "\t" . 'Name' . "\t" . 'Orders' . "\t" . 'Price' . "\t" .

$count = 1;
if($sales->list_instock() != false){
    foreach($sales->list_instock() as $value){
        extract($value);

                
            echo $count . "\t" . $prod_name."\t" .$prod_qty . "\t" . $prod_price . "\t" ."\n";
            
                $count++;
        
    }
}