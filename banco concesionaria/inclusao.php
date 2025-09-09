<?php
include ("conecta_banco_carros.php");

if ($_SERVER["REQUEST_METHOD"] == "GET")
    $nome = $_GET['nome_carro'];
    $nome_dono = $_GET['nome_dono'];
    $marca = $_GET['marca_carro'];
    $placa = password_hash(password: $_GET['placa_carro'], algo: PASSWORD_DEFAULT);   
    $sql = "INSERT INTO carros (nome, nome_dono, marca, placa) VALUES ('$nome', '$nome_dono', '$marca', '$placa')";
    if (mysqli_query(mysql: $conn, query: $sql)){
        header(header: "Location: index.php");
    } else {
        echo "Ta dando errado meu mano: " . mysqli_error(mysql: $conn);
    }

?>