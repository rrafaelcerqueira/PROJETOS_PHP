<?php
include ("conexao_con.php");

if ($_SERVER["REQUEST_METHOD"] == "GET")
    $marca = $_GET['marca'];
    $placa = $_GET['placa'];   
    $sql = "INSERT INTO carros (marca, placa) VALUES ('$marca', '$placa')";
    if (mysqli_query(mysql: $conn, query: $sql)){
        header(header: "Location: index.php");
    } else {
        echo "Ta dando errado meu mano: " . mysqli_error(mysql: $conn);
    }

?>