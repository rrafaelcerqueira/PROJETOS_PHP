<?php
include "conexao_con.php";
$id = $_GET['id'];
$sql = "DELETE FROM carros WHERE id=$id";
if (mysqli_query(mysql: $conn, query: $sql)){
    header(header: "Location: index.php");
} else {
    echo "Erro: " . mysqli_error(mysql: $conn);
}

?>