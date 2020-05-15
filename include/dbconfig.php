<?php

$servername = "localhost";
$dBUsername = "root";
$password   =  "password";
$dBName     =  "pi";

$conn = mysqli_connect($servername,$dBUsername,$password,$dBName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
