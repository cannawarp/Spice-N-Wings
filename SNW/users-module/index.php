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
    xmlhttp.open("GET", "users-module/search.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
<div id="admin-body">
Search <input type="text" id="search" name="search" onkeyup="showResults(this.value)">
    <a href="index.php?page=users" class="move">List Users</a>
    <?php
    if($user_access_level != 'Staff'){ 
?>  
<a href="index.php?page=users&action=create" class="move">New User</a>
 <?php
 }
    ?>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'users-module/create-user.php';
                break; 
                case 'modify':
                    require_once 'users-module/modify-user.php';
                break; 
                case 'profile':
                    require_once 'users-module/view-profile.php';
                break;
                case 'result':
                    require_once 'users-module/search-user.php';
                break;
                default:
                    require_once 'users-module/main.php';
                break; 
            }
    ?>
  </div>