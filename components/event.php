<?php 
    $id = $_GET['id'];
    
    function getBusiness($id, $conn){

        echo "getting business with id ".$id;
        
    }

    function getEvent($id, $conn) {
        $sql = 'SELECT * FROM eventet WHERE idEventet = ?;';

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'database error couldnt get event with id '.$id;
        }else{
            mysqli_stmt_bind_param($stmt,"i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            $event = array();
            
            if($row = mysqli_fetch_assoc($result)){
                array_push($event, $row);
                    echo '<h1>ID #'.$row['idEventet'].'</h1>';
                    echo '<h1>Eventi '.$row['eEmri'].'</h1>';
                    echo '<h1>Biznesi id'.$row['idBiznesi'].'</h1>';
                ?>

                <?php
            }

            return $event;
            
        }
    }

   $res =getEvent((int)$id, $conn);
    $idBiznesi =  $res[0]['idBiznesi'];
    print_r($idBiznesi);


    $sql = "SELECT bEmri from biznesi where idBiznesi = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'database error couldnt get event with id '.$id;
    }else {
        mysqli_stmt_bind_param($stmt, "i", $idBiznesi);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $emri = $row['bEmri'];
        echo $emri;


        //print_r($result);

    }

    
  // $businessId = $eventet['idBiznesi'];
  // print_r($businessId);

   // getBusiness($businessId, $conn);
?>
<p style="color: white;">Ju keni klikuar ne eventin me id <?php echo $id; ?>.</p>
<a href="?#">Kthehu</a>

<table class="content-table" align="ceneter" border="1px" style="width:700px; margin-left: auto;  margin-right: auto;">
<?php
    $query = "select eventet.idEventet, biznesi.idBiznesi,tavolinat.Karrigat,tavolinat.tStatus,tavolinat.idTavolinat from eventet inner join biznesi on eventet.idBiznesi = biznesi.idBiznesi inner join tavolinat on biznesi.idBiznesi=Tavolinat.idBiznesi  where idEventet = 2;";
    $result = mysqli_query($conn,$query);
    ?>

<tbody>
<?php

    while($row = mysqli_fetch_assoc($result)){
    ?>


  <tr class="eventTable">
    <td><?php echo $row['idBiznesi'] ?></td>
    <td><?php echo $row['Karrigat'] ?></td>
    <td><?php echo $row['tStatus'] ?></td>
    <td><?php echo $row['idTavolinat'] ?></td>

    </tr>

<?php
}
?>
</tbody>

</table>
