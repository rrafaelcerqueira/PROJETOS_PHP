<?php include 'conexaopdo.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos com Parâmetro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Lista de Produtos</h2>
        <form method="POST" class="row g-3 justify-content-center">
            <div class="col-md-4">
                <input type="number" name="valor" class="form-control" placeholder="Informe o parâmetro numérico" required>
            </div>
            <div class="col-md-2">
                <button type="submit" name="executar" class="btn btn-primary w-100">Executar</button>
            </div>
        </form>
        <div class="mt-3 text-center">
            <a href="../index.html" class="btn btn-secondary">Voltar ao Menu Principal</a>
        </div>
        <hr>

        <?php
        if (isset($_POST['executar'])) {
            $valor = intval($_POST['valor']);

            try {
                // Chamada com bindParam
                $stmt = $pdo->prepare("CALL lista_produtos(:valor)");
                $stmt->bindParam(':valor', $valor, PDO::PARAM_INT);
                $stmt->execute();

                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (!empty($resultados)) {
                    echo "<div class='table-responsive mt-4'>";
                    echo "<table class='table table-bordered table-striped table-hover'>";
                    echo "<thead class='table-dark'><tr><th>ID</th><th>Descrição</th><th>Preço</th></tr></thead><tbody>";
                    foreach ($resultados as $row) {
                        echo "<tr><td>".$row['id']."</td><td>".$row['descricao']."</td><td>".$row['precodevenda']."</td></tr>";
                    }
                    echo "</tbody></table></div>";
                } else {
                    echo "<p class='text-center text-danger mt-3'>Nenhum produto encontrado para o parâmetro informado.</p>";
                }
            } catch (PDOException $e) {
                echo "<p class='text-center text-danger mt-3'>Erro ao executar a consulta: " . $e->getMessage() . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
