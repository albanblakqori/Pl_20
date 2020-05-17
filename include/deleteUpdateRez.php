<?php

function deleteRez($id,$conn){
    $sql = "delete from rezervimet where idRezervimet =$id";
    if(mysqli_query($conn,$sql)){
        ?>
        <div class="jumbotron text-center cover" style="padding-top:150px;">
            <h2>Rezervimi u fshi me sukses!</h2>
            <p>Refresh per te pare ndryshimet.</p>
        </div><?php
    }

}



function updateTable($idRez,$conn){

    $sql = "select idTavolinat from rezervimet where idRezervimet = $idRez";
    $result = mysqli_query($conn,$sql);

    $row= mysqli_fetch_assoc($result);

   if($res = $row['idTavolinat']) {

       $query = "update tavolinat set tStatus='Free' where idTavolinat=$res";
       mysqli_query($conn,$query);
    }else{
       echo "kurgjo";
   }



}





