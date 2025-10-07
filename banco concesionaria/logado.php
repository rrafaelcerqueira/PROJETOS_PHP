<?php
// Inclui o script de proteção de sessão
include('protege.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel do Usuário</title>
</head>
<body>
<h2>Bem-vindo, <?php echo $_SESSION['nome_dono']; ?>!</h2>
<p>Você está logado com sucesso.</p>

<a href="logout.php">Sair</a>
</body>
</html>
