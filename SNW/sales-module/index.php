<div id="third-submenu">
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'result':
                    require_once 'sales-module/search-user.php';
                break;
                default:
                    require_once 'sales-module/main.php';
                break; 
            }
    ?>
  </div>