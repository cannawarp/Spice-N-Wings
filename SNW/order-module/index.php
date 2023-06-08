<script>
function showResults(str) {
  if (str.length == 0) {
    document.getElementById("search-result").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("search-result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "order-module/search.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
Search <input type="text" id="search" name="search" onkeyup="showResults(this.value)">
    <a href="index.php?page=order" class="move">Order List</a> 
    <a href="index.php?page=order&action=create" class="move">New Order</a> 
    
    <?php
      switch($action){
                case 'create':
                    require_once 'order-module/create-transaction.php';
                break; 
                case 'order':
                    require_once 'order-module/order-products.php';
                break; 
                case 'result':
                    require_once 'order-module/search-order.php';
                break;
                default:
                    require_once 'order-module/main.php';
                break; 
            }
    ?>