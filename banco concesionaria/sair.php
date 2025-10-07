<?php
// Inicia a sessão
session_start();

// Destroi todas as variáveis de sessão
session_unset();

// Encerra a sessão
session_destroy();

// Redireciona para o login
header("Location: index.php");
exit();
?>
