<?php
require "header.php";
?>

<div class="menu2" style="height:100%;">
    <?php
        if(isset($_GET['id'])){
            include('./components/event.php');
        }else{
            include('./components/event_table.php');
        }
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
