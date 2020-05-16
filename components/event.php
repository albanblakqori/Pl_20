<?php include('modal.php'); ?>
<div class="jumbotron info-event">
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
                
                //echo '<h1>ID #'.$row['idEventet'].'</h1>';
                echo '<h1 class="display-1" >Eventi '.$row['eEmri'].' me '.$row['eMuzika'].'</h1>';
                echo '<a>'.$row['eData'].', prej '.$row['eFillimit'].' deri '.$row['eMbarimit'].'</a>';
                echo '<h3> Muzike nga    '.$row['eMuzika'].'</h3>';
                //echo '<h1>Biznesi id'.$row['eFillimit'].'-'.$row['eMbarimit']'</h1>';
                
                ?>

                <?php
            }

            return $event;
            
        }
    }

    $res = getEvent((int)$id, $conn);
    $idBiznesi =  $res[0]['idBiznesi'];



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
 
    }

?>

<p style="color: black;"><h2>Eventi organizuar nga <?php echo $emri; ?></h2>
<br>
<a href="?#">Kthehu Mbrapa</a></th>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<table class="content-table table table-hover" align="ceneter" style="width:700px; margin-left: auto;  margin-right: auto;">
<thead>
    <tr>
    </tr>
    <tr>
        <th colspan="7"><h2>Informacione rreth eventit</h2></th>
    </tr>
    <tr>
        <th>ID Biznesit</th>
        <th>Karrikat e Tavolines</th>
        <th>Statusi</th>
        <th>ID Tavolinave</th>
    </tr>
</thead>
<?php
    $query = "select eventet.idEventet, biznesi.idBiznesi,tavolinat.Karrigat,tavolinat.tStatus,tavolinat.idTavolinat from eventet inner join biznesi on eventet.idBiznesi = biznesi.idBiznesi inner join tavolinat on biznesi.idBiznesi=Tavolinat.idBiznesi  where idEventet = 2;";
    $result = mysqli_query($conn,$query);
    ?>

<tbody>
<?php

    while($row = mysqli_fetch_assoc($result)){
    ?>
    
  <tr class="eventTable" onclick="openTableModal(this);">
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
