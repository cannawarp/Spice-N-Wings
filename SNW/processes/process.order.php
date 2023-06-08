<?php
include '../classes/class.order.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
  case 'create':
    create_new_transaction();
    break;
  case 'additem':
    new_order_item();
    break;
  case 'saveitem':
    save_sale_items();
    break;
}

function create_new_transaction() {
  $order = new Order();
  $name = ucwords($_POST['sname']);
  $desc = ucwords($_POST['desc']);
  $amount = $_POST['amount'];
  $rid = $order->new_order($name, $desc, $amount);
  if (is_numeric($rid)) {
    header('location: ../index.php?page=order&action=order&id=' . $rid);
  }
}

function new_order_item() {
  $order = new Order();
  $orderid = $_POST['orderid'];
  $prodid = $_POST['prodid'];
  $qty = $_POST['qty'];
  $rid = $order->new_order_item($orderid, $prodid, $qty);
  if ($rid) {
    header('location: ../index.php?page=order&action=order&id=' . $orderid);
  }
}

function save_sale_items() {
  $order = new Order();
  $orderid = $_POST['orderid'];
  $order->save_to_released($orderid);
  $rid = $order->save_order_items($orderid);
  if ($rid) {
    header('location: ../index.php?page=order&action=order&id=' . $orderid);
  }
}

// processes/process.order.php

// Include necessary files and initialize objects

// Check if the form is submitted and the action is 'create'
if (isset($_POST['action']) && $_POST['action'] === 'create') {
    // Get the form data
    $customerName = $_POST['sname'];
    $description = $_POST['desc'];
    $amount = $_POST['amount'];
    $productId = $_POST['prodid'];

    // Perform validation and error handling if necessary

    // Create the order in the database
    $orderId = $order->create_order($customerName, $description, $amount);

    if ($orderId) {
        // Update the sales data based on the ordered product
        $sales->update_sales($productId, $amount);

        // Redirect to the sales page
        header('Location: sales.php');
        exit();
    } else {
        // Handle error if order creation fails
        // Display an error message or redirect to an error page
    }
}

// Handle other actions such as delete if necessary
?>