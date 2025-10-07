<?php
include "conexao_con.php";

$sql = "SELECT * FROM carros";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

   <div class="container py-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Cadastro seu Carro</h2>
                        <form action="incluir.php" method="GET">
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca:</label>
                                <input type="text" id="marca" name="marca" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Placa:</label>
                                <input type="text" id="placa" name="placa" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="mb-3">Lista de carros</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Placa</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['marca'] ?></td>
                                    <td><?= $row['placa'] ?></td>
                                    <td>
                                        <a href="altera.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                        <a href="exclui.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>