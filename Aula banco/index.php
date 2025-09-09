<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Formulário Bonitinho</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="inclusao.php" method="GET">
        <h2>Cadastro Bonitinho</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="usuario" name="usuario" required />

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required />

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
