<?php
// Este arquivo garante que apenas usuários logados acessem certas páginas
session_start();

// Se não houver sessão ativa, redireciona para o login
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}
?>
