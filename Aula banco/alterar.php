<?php
include "conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = mysqli_query(mysql: $conn, query: $sql);
$row = mysqli_fetch_assoc(result: $result);

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    if (!empty($senha)){
        $senha = password_hash(password: $senha, algo: PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET usuario='$usuario', senha='$senha' WHERE id=$id";
    } else {
        $sql = "UPDATE usuarios SET usuario='$usuario' WHERE id=$id";
    }
    
    if (mysqli_query($conn, $sql)){
        header("Location: index.php");
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>