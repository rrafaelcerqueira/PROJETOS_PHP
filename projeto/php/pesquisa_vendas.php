<?php include 'conexaopdo.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Pesquisa de Vendas</h2>
        <form method="GET" action="" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="codigo" class="form-control" placeholder="Código da Venda">
            </div>
            <div class="col-md-3">
                <input type="date" name="data" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" name="cliente" class="form-control" placeholder="Nome do Cliente">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
            </div>
        </form>
        <div class="mt-3">
            <a href="../index.html" class="btn btn-secondary">Voltar ao Menu Principal</a>
        </div>
        <hr>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $codigo = $_GET['codigo'] ?? '';
            $data = $_GET['data'] ?? '';
            $cliente = $_GET['cliente'] ?? '';

            $sql = "SELECT v.id, v.datemissao, c.nome
                    FROM venda v
                    JOIN cliente c ON v.idcliente = c.id
                    WHERE 1=1";

            if (!empty($codigo)){
                $sql .= " AND v.id = " . intval($codigo);
            }
            if (!empty($data)){
                $sql .= " AND v.datemissao = '" . $data . "'";
            }
            if (!empty($cliente)){  
                $sql .= " AND c.nome LIKE '%" . $cliente . "%'";
            }

            $stmt = $pdo->prepare($sql);
            $stmt = $pdo->query($sql);
            $resultados = $stmt->fetchALL();

            if(!empty($resultados)){
                echo "<div class='table-responsive mt-4'>";
                echo "<table class='table table-bordered table-striped table-hover'>";
                echo "<thead class='table-dark'><tr><th>Código</th><th>Data</th><th>Cliente</th></tr><thead><tbody>";

                foreach($resultados as $row){
                    echo "<tr><td>".$row['id']."</td><td>".$row['datemissao']."</td><td>".$row['nome']."</td></tr>";
                }
                echo "</tbody></table></div>";
            } else {
                echo "<p class='text-center text-danger mt-3'>Nenhuma venda encontrada.</p>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>