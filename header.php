<?php
session_start();

include 'include/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<link rel="icon" href="photos/chair.png">
<head><title>Veni yt</title>
 
 <!-- Bootstrap souce !-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style/new.css">

    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
</head>
<body> 
<div class="log">
        <?php
            if(isset($_SESSION['userEmri'])) {
                echo'<div class="logout authentication">
            <form action="include/logout.inc.php" method="post" >
                <button type="submit" class="btn btn-danger" name="logout-submit">Shkyqu</button> 
            </form>W
        </div>';
            }else{
                echo'
        <div class="login authentication">

            <form action="include/login.inc.php" method="post">
                <input type="text" name="email" placeholder="Email...">
                <input type="password" name="pwd" placeholder="Fjalekalimi...">
                <button type="submit" class="btn btn-primary" name="login-submit">Kyqu</button> 
                <button type="button" onclick="registerBtn()" class="btn btn-secondary">Regjistrohu</button>

            </form>
            
        </div>';
            }
        ?>
</div> 
    
    <div class="jumbotron text-center cover" style="padding-top:150px;">
        <h1>Veni yt!</h1>
        <p>Rezervime online, rezervo vendin tënd.</p> 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center" style="margin-bottom:50px; ">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Faqja Kryesore</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Bizneset</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Regjistro Biznesin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="signup.php">Shfleto</a>
    </li>
    
  </ul>
</nav>

</header>
</body>
</html>
