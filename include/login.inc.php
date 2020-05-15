<?php

if(isset($_POST['login-submit'])){
    require 'dbconfig.php';

    $email = $_POST['email'];
    $pass = $_POST['pwd'];

    if(empty($email) || empty($pass)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }else{

        $sql = "SELECT * FROM klienti WHERE kEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ..//index.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pass,$row['kPass']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wronpwd");
                    exit();
                }elseif($pwdCheck == true){

                    session_start();
                    $_SESSION['userEmri'] = $row['kEmri'];
                    $_SESSION['idKlienti'] = $row['idKlienti'];
                    header("Location: ../index.php?login=success");
                    exit();

                }else{
                    header("Location: ../index.php?error=wrongpwd");
                }

            }else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }

    }

}else{
    header("Location: ../index.php");
}
