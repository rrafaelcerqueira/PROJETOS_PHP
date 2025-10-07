<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Formulário Bonitinho</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="inclusao.php" method="POST">
        <h2>CADASTRO CARRO</h2>
        <label for="nome">Nome do Carro</label>
        <input type="text" id="nome_carro" name="nome_carro" required />

        <label for="nome">Seu nome:</label>
        <input type="text" id="nome_dono" name="nome_dono" required />

        <label for="nome">Marca do carro:</label>
        <input type="text" id="marca" name="marca_carro" required />

        <label for="senha">Placa do carro:</label>
        <input type="text" id="placa" name="placa_carro" required />

        <button type="submit">Enviar</button>
        <br>
        <br>
        <a href="index.php" class="botaovolta">Voltar</a>
    </form>
</body>
</html>
