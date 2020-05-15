<?php
session_start();

include 'include/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head><title>Hotel Alpet-Come and feel the difference!</title>
 <link rel="stylesheet" type="text/css" href="style/new.css" />

    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
<h1>Rezervo Online</h1>
<header class="menu-top" align="center">



<div align="center">
 <ul>
 <li><a href="index.php">Fillimi</a></li>
 <li>&bull;</li>
 <li><a href="rezervime.html">Rezervime</a></li>
 <li>&bull;</li>
 <li><a href="oferta.html">Oferta</a></li>
 <li>&bull;</li>
 <li><a href="vendndodhja2.html">Vendndodhja</a></li>
<li>&bull;</li>
<li><a href="kontakti.html">Kontakti</a></li>
 </ul>

</div>

    <div class="log">
        <?php
            if(isset($_SESSION['userEmri'])) {
                echo'<div class="logout">
            <form action="include/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>';
            }else{
                echo'
        <div class="login">

            <form action="include/login.inc.php" method="post">
                <input type="text" name="email" placeholder="enter your email...">
                <input type="password" name="pwd" placeholder="password..">
                <button type="submit" name="login-submit">Login</button>

            </form>
        </div>
        <div class="singup">
            <a href="signup.php">Signup</a>
        </div>';
            }
        ?>


    </div>
    <div class="photomenu" align="center">
        <img src="photos/winter-hotel-0.jpg" alt="AlpsHotel">
    </div>
</header>
</body>
</html>
