<?php
require "header.php";
include 'include/dbconfig.php';
?>





<div class="menu2">
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            ?>
            <p style="color: white;">Ju keni klikuar ne eventin me id <?php echo $id; ?>.</p>
            <a href="?#">Kthehu</a>
            <?php
        }else{
    ?>

    <table class="content-table" align="ceneter" border="1px" style="width:700px; margin-left: auto;  margin-right: auto;">
        <thead>
        <tr>
            <th colspan="7" ><h2>Eventet</h2></th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Data</th>
            <th>Fillon</th>
            <th>Mbaron</th>
            <th>Muzika</th>
            <th>Biznesi</th>
        </tr>
        </thead>
        <?php
        $query = "SELECT * FROM eventet;";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
        ?>  <tbody>
            <tr class="eventTable" onclick="clickRow(this)">
                <td><?php echo $row['idEventet'] ?></td>
                <td><?php echo $row['eEmri'] ?></td>
                <td><?php echo $row['eData'] ?></td>
                <td><?php echo $row['eFillimit'] ?></td>
                <td><?php echo $row['eMbarimit'] ?></td>
                <td><?php echo $row['eMuzika'] ?></td>
                <td><?php echo $row['idBiznesi'] ?></td>

            </tr>
            </tbody>
       <?php
        }
        ?>


    </table>






    <?php
    if(isset($_SESSION['userEmri'])){
        echo '<p class="login-status">You are logged in</p>';

    }else{
        echo'<p class="login-status"> You are logged out</p>';
    }

        }
    ?>



</div>





<?php
require "footer.php";
?>
