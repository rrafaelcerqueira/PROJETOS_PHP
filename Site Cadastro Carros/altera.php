<?php
include "conexao_con.php";

$id = $_GET['id'];
$sql = "SELECT * FROM carros WHERE id=$id";
$result = mysqli_query(mysql: $conn, query: $sql);
$row = mysqli_fetch_assoc(result: $result);

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $marca = $_GET['marca'];
    $placa = $_GET['placa'];

    if (!empty($marca)){
        $sql = "UPDATE carros SET $marca='$marca', placa='$placa' WHERE id=$id";
    } else {
        $sql = "UPDATE carros SET marca='$marca' WHERE id=$id";
    }
    
    if (mysqli_query($conn, $sql)){
        header("Location: index.php");
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>