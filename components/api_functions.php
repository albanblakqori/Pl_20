<?php
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
        }

        return $event;
    }
}

function setReserved($status, $table_id, $conn){
    $sql = "UPDATE tavolinat SET tStatus=? WHERE idTavolinat=?";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
//        echo 'database error couldnt get event with id '.$id;
        return false;
    }else{
        mysqli_stmt_bind_param($stmt,"si", $status, $table_id);
        mysqli_stmt_execute($stmt);
    }
    return true;
}

function reserveTable($event_id, $table_id, $conn){
    $sql = 'INSERT INTO rezervimet(idKlienti, idTavolinat, idEventet) VALUES(?, ?, ?)';

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
//        echo 'database error couldnt get event with id '.$id;
        return false;
    }else{
        mysqli_stmt_bind_param($stmt,"iii", $_SESSION['idKlienti'], $table_id, $event_id);
        mysqli_stmt_execute($stmt);

        setReserved("Reserved", $table_id, $conn);
    }

    return true;
}