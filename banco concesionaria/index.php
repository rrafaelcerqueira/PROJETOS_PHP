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
        <label for="nome">Nome do carro:</label>
        <input type="text" id="nome_carro" name="nome_carro" required />

        <label for="nome">Nome do dono:</label>
        <input type="text" id="nome_dono" name="nome_dono" required />

        <label for="nome">Marca do carro:</label>
        <input type="text" id="marca" name="marca_carro" required />

        <label for="senha">Placa do carro:</label>
        <input type="text" id="placa" name="placa_carro" required />

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
