<?php
require "header.php";
?>





<div class="menu2">

    <?php
    if(isset($_SESSION['userEmri'])){
        echo '<p class="login-status">You are logged in</p>';
    }else{
        echo'<p class="login-status"> You are logged out</p>';
    }
    ?>



</div>





<?php
require "footer.php";
?>
