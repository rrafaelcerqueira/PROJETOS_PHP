<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "concesionaria_Paulo_Carros_picas";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Morreu fi: " . mysqli_connect_error());
}



?>