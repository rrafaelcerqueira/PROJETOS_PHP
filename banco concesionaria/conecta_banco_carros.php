<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "concesionaria_Paulo_Carros_picas";

$conn = mysqli_connect(hostname: $host, username: $user, password: $pass, database: $db);

if(!$conn){
    die("Morreu fi: " . mysqli_connect_error());
}



?>