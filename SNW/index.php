<?php
include_once 'classes/class-user.php';
include_once 'classes/class.order.php';
include_once 'classes/class.sales.php';
include_once 'classes/class.product.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$user = new User();
$order = new Order();
$sales = new Sales();
$product = new Product();

if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
$user_id_login = $user->get_user_id($_SESSION['user_email']);
$user_access_level = $user->get_user_access($user_id_login);


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
        <title>SNW System</title>
    </head>

    <body>
        <?php include 'navbar.php' ?>
            <div class="body-wrapper">

                <div id="content">

    <?php
      switch($page){

                case 'order':
                    require_once 'order-module/index.php';
                break; 

                case 'sales':
                    require_once 'sales-module/index.php';
                break; 

                case 'product':
                    require_once 'products-module/index.php';
                break; 

                case 'users':
                    require_once 'users-module/index.php';
                break; 

                default:
                    require_once 'main.php';
                break; 
            }
    ?>
                </div>
            </div>
    </body>
</html>