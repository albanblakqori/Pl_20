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


    
    ?>

</div>
<?php
require "footer.php";
?>
