<?php
include ("conecta_banco_carros.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
    $nome = $_POST['nome_carro'];
    $nome_dono = $_POST['nome_dono'];
    $marca = $_POST['marca_carro'];
    $placa = $_POST['placa_carro']; 
    
    
    $sql = "INSERT INTO carros (nome, nome_dono, marca, placa) VALUES ('$nome', '$nome_dono', '$marca', '$placa')";
    if (mysqli_query(mysql: $conn, query: $sql)){
        header(header: "Location: index.php");
    } else {
        echo "Ta dando errado meu mano: " . mysqli_error(mysql: $conn);
    }

?>