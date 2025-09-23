<?php
include "conexao.php";

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql); // Corrigido: remover "mysql:"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <!-- Formulário de Cadastro -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Cadastro</h2>
                        <form action="inclusao.php" method="GET">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Nome:</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha:</label>
                                <input type="password" id="senha" name="senha" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de Usuários -->
        <div class="row">
            <div class="col">
                <h2 class="mb-3">Lista de usuários</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Usuário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['usuario'] ?></td>
                                    <td>
                                        <a href="alterar.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                        <a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
