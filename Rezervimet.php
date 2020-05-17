<?php

include "header.php";
include 'include/dbconfig.php';
    if(!isset($_SESSION['idKlienti'])){
        header('Location: index.php?error=kyqu');
    }else {
        include 'include/rezervimet.inc.php';
        include 'include/deleteUpdateRez.php';
        if (isset($_GET['id'])) {

            $idToDelete = $_GET['id'];
            updateTable($idToDelete,$conn);
            deleteRez($idToDelete,$conn);
            header("Location ./index.php");





        }
    }
?>






