<?php
require "header.php";

$score_file = "scores/".$_SESSION['userEmri'].".txt";

function debug_to_console($data){
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function write_score($score = 0){
    $scorefile = fopen("scores/".$_SESSION['userEmri'].".txt","w");
    fwrite($scorefile, $score);
    fclose($scorefile);
}

function read_score(){
    $scorefile = fopen("scores/".$_SESSION['userEmri'].".txt" ,"r");
    $score = (int)fgets($scorefile);
    debug_to_console($score);
    fclose($scorefile);
    return $score;
}

if (file_exists($score_file)){ 
    $score = read_score(); 
} 
else { 
    write_score();
} 


?>

<body>
<div class="row">
    <div class="col"></div>
    <div class="col-2" style="height:100%; text-align:justify;">
    
            <?php
            global $points;
            function loja(){
                if(!isset($_POST['user_choice'])){
                    if(!isset( $_SESSION['userEmri'])){
                        header('location:signup.php');
                    }
                    else{
                        //echo "First page:";
                        $_SESSION['secondPage'] = true;
                        echo '
                        <h6 style = "margin-bottom:30px;"> Zgjedh opsionin </h6>
                        <hr>
                        <form action="game.php"; method="post" />
                        <div class="custom-control custom-radio" style="margin-bottom:15px;">
                            <input type="radio" name="user_choice" class="custom-control-input" id="defaultUnchecked" value="Gur" title="Gur">
                            <label class="custom-control-label" for="defaultUnchecked">Gur</label>
                        </div>

                        <div class="custom-control custom-radio" style="margin-bottom:15px;">
                            <input type="radio" name="user_choice" class="custom-control-input" id="defaultUnchecked2" value="Leter" title="Leter">
                            <label class="custom-control-label" for="defaultUnchecked2">Leter</label>
                        </div>
                        
                        <div class="custom-control custom-radio" style="margin-bottom:15px;">
                            <input type="radio" name="user_choice" class="custom-control-input" id="defaultUnchecked3" value="Gerrsher" title="Gerrsher">
                            <label class="custom-control-label" for="defaultUnchecked3">Gerrsher</label>
                        </div>
                        <hr>
                        
                        
                        <input class = "btn btn-secondary" style="margin-top:20px;" type="submit" name="form_submit" value="Zgjodha"/> 
                        </form> ';
                    }
                }
            }
            loja();
            ?>
            <?php
                if(!isset($_SESSION['userEmri'])) {
                    header('location:game.php');
                } else {
                    if(isset($_POST['user_choice'])) {
                        //echo "Second Page:<br><br>";
                        $CPUChoice = array('Gur', 'Leter', 'Gerrsher');
                        shuffle($CPUChoice);
                        echo "<br>Kompjuteri ka zgjedhur ". $CPUChoice[0]."<br>";

                        $CPU = $CPUChoice[0];
                        $User = $_POST['user_choice'];

                        echo 'Lojtari: '.$User.' <br>Kompjuteri: '.$CPU;

                        if($User === $CPU){
                            echo '<br>Rezultati: Barazim!';
                        }
                        else if($User === "Gur"){
                            if($CPU === "Gerrsher") {
                                echo '<br><b>Rezultati: Lojtari fitoj...</b>';
                                $score++;
                            } else {
                                echo '<br><b>Rezultati: Humbe</b>';
                                $score--;
                            }
                        }
                        else if($User === "Leter") {
                            if($CPU === "Gur") {
                                echo '<br><b>Rezultati: Lojtari fitoj...</b>';
                                $score++;
                            }else {
                                if($CPU === "Gerrsher") {
                                    echo '<br><b>Rezultati: Humbe</b>';
                                    $score--;
                                }
                            }
                        }
                        else if($User === "Gerrsher") {
                            if($CPU === "Gur") {
                                echo '<br><b>Rezultati: Humbe</b>';
                                $score--;
                            } else {
                                if($CPU === "Leter") {
                                    echo '<br><b>Rezultati: Lojtari fitoj...</b>';
                                    $score++;
                                }
                            }
                        }
                        write_score($score);
                        
                        echo('<br><br><a class="login-status alert alert-success" style="margin-top:20px;bottom:10px; "href="game.php">Luaj prap </a>');
                   }
                }
                echo '<p style="margin-top:50px;" class="login-status alert alert-secondary">Ti ke '.$score.' pike.</p>';
            ?>
             
            </div>
            <div class="col"></div>
            </div>

        </body>


<?php
require "footer.php";
?>
