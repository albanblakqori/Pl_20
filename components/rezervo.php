<?php
session_start();
include "../include/dbconfig.php";
$ses = $_SESSION['idKlienti'];
include "api_functions.php";

$command = $_POST['command'];

$response = array(
    "data" => false,
    "message" => "Default message",
    "success" => false
);

if($command == 'get_table'){
    $idTavolinat = $_POST['Id'];
    $event_id = $_POST['event_id'];

    $sql = "SELECT * FROM tavolinat WHERE idTavolinat = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo'database error';
    }else{
        mysqli_stmt_bind_param($stmt,"i",$idTavolinat) ;
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $tavolinat = array();

        while($row = mysqli_fetch_assoc($result)){
            $idBiznesi = $row['idBiznesi'];
            $Karrigat = $row['Karrigat'];
            $idTavolinat = $row['idTavolinat'];
            $tStatus = $row['tStatus'];


            array_push($tavolinat, $row);
        }

        $response['tavolinat'] = $tavolinat;
        $response['event'] = getEvent($event_id, $conn);
        $response['success'] = true;
        $response['message'] = '...';
    }
}else if($command == 'reserve_table'){
    $event_id = $_POST['event_id'];
    $table_id = $_POST['table_id'];

    if(reserveTable($event_id, $table_id, $conn)) {
        $response['message'] = 'Table reserved successfully!';
        $response['success'] = true;
    }else{
        $response['message'] = 'The table could not be reserved!';
    }
}else{
    $response['message'] = 'Invalid command';
}

echo json_encode($response);