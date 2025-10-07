<?php

    session_start();

    include('conecta_banco_carros.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_dono = $_POST['nome_dono'];
        $placa = $_POST['placa_carro'];

        // Busca o usuário pelo nome
    $sql = "SELECT * FROM carros WHERE nome_dono = '$nome_dono'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);

        // Verifica se a senha está correta
        if (password_verify($nome_dono, $placa['placa'])) {
            // Armazena informações na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            // Redireciona para o painel
            header("Location: logado.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    }

?>
