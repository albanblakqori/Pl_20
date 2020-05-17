<?php

include "header.php";

include 'include/dbconfig.php';
?>

<table class="content-table table table-hover" align="ceneter" style="width:700px; margin-left: auto;  margin-right: auto;">
        <thead>
        <tr>
            <th colspan="7" ><h2>Te dhenat e bizneseve</h2></th>
        </tr>
        <tr>
            <th>Emri</th>
            <th>Adresa</th>
            <th>Telefoni</th>
            <th> Menagjer</th>

        </tr>
        </thead>
        <?php
        $query = "Select pEmri,pMbiemri,bEmri, bAdresa, bTel from biznesi inner join punetoret on biznesi.idBiznesi = punetoret.idBiznesi;";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
        ?>  <tbody>
            <tr class="eventTable" onclick="">
                <td><?php echo $row['bEmri'] ?></td>
                <td><?php echo $row['bAdresa'] ?></td>
                <td><?php echo $row['bTel'] ?></td>
                <td> <?php echo $row['pEmri'] . ' ' . $row['pMbiemri']?></td>

            </tr>
            </tbody>
       <?php
        }
        ?>


    </table>


