


<div class="jumbotron text-center cover" style="padding-top:20px;">
    <p>Kliko per te fshire rezervimet!</p>

</div>
<table class="content-table table table-hover" align="ceneter" style="width:700px; margin-left: auto;  margin-right: auto;">
    <thead>
    <tr>
        <th colspan="7" ><h2>Rezervimet</h2></th>
    </tr>
    <tr>
        <th>IDREZERVIMIT</th>
        <th>Eventi</th>
        <th>DATA</th>
        <th>KENGETARI</th>

    </tr>
    </thead>
    <?php
    $idKlienti = $_SESSION['idKlienti'];
    $query1 = "select idRezervimet, eEmri, eData,eMuzika from rezervimet inner join eventet on rezervimet.idEventet = eventet.idEventet where idKlienti = $idKlienti;";

    $query = "select biznesi.bEmri, eventet.eEmri,idTavolinat from rezervimet inner join eventet on rezervimet.idEventet = eventet.idEventet inner join biznesi on eventet.idBiznesi = biznesi.idBiznesi where idKlienti = 2;";
    $result = mysqli_query($conn,$query1);
    while($row = mysqli_fetch_assoc($result)){
        ?>  <tbody>
        <tr class="eventTable" onclick="clickRow(this)">
            <td><?php echo $row['idRezervimet'] ?></td>
            <td><?php echo $row['eEmri'] ?></td>
            <td><?php echo $row['eData'] ?></td>
            <td><?php echo $row['eMuzika']?></td>


        </tr>
        </tbody>
        <?php
    }
    ?>


</table>
