<?php
if(isset($_POST['signup-button'])){

    require 'dbconfig.php';

    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $pass = $_POST['pwd'];
    $tel = $_POST['tel'];

    if(empty($emri) || empty($mbiemri) || empty($email) || empty($pass || empty($tel))){
            header("Location: ../signup.php?error=emptyfields&emri=".$emri."&mbiemri=".$mbiemri
            ."&email=".$email."&tel=".$tel);
            exit();
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/[a-zA-z]*$/",$emri)){
        header("Loaction: ../signup.php?error=invalidemailemri");
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&emri=".$emri);
        exit();
    }elseif(!preg_match("/^[a-zA-Z]*$/",$emri)){
        header("Location: ../signup.php?error=invalidemri=".$email);
    }else{
        $sql = "SELECT kEmail FROM klienti where kEmail =?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signup.php?error=sqlerror");

        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows();
            if($resultCheck > 0){
                header("Location: ..//singup.php?error=emailtaken&emri=".$emri);
                exit();
            }else{
                $sql = "INSERT INTO klienti(kEmri,kMbiemri,kEmail,kPass,kTel) values(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }else{
                    $passHashed = password_hash($pass,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sssss",$emri,$mbiemri,$email,$passHashed,$tel);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../signup.php");
}
