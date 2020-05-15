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
                ?>

                <?php
            }

            return $event;
            
        }
    }

    $event = getEvent((int)$id, $conn);
    
    $businessId = $event['idBiznesi'];

    getBusiness($businessId, $conn);
?>
<p style="color: white;">Ju keni klikuar ne eventin me id <?php echo $id; ?>.</p>
<a href="?#">Kthehu</a>