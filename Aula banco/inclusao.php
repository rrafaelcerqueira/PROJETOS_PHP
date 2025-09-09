<?php
include ("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "GET")
    $usuario = $_GET['usuario'];
    $senha = password_hash(password: $_GET['senha'], algo: PASSWORD_DEFAULT);   
    // $senha = $_GET['senha'];
    $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
    if (mysqli_query(mysql: $conn, query: $sql)){
        header(header: "Location: index.php");
    } else {
        echo "Ta dando errado meu mano: " . mysqli_error(mysql: $conn);
    }

?>