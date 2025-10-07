<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Formulário Bonitinho</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="logar.php" method="POST">
        <h2>LOGIN</h2>

        <label for="nome"></label>
        <input type="text" id="nome_dono" name="nome_dono" placeholder="Nome" required />

        <label for="senha"></label>
        <input type="text" id="placa" name="placa_carro" placeholder="Placa do Carro" required />

        Não possue conta? <a href="cadastro.php"> Cadastre -  se </a>

        <br>
        <br>

        <button type="submit">LOGAR</button>
    </form>
</body>
</html>