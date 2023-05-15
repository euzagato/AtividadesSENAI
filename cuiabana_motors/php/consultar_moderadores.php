<?php
include('conexao.php');
session_start();


if (empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
    header('location: area_restrita.php');
} else {
    $consulta = "SELECT * FROM `admin` ORDER BY adm_id";
    try {
        $consultar = $conexao->prepare($consulta);
        $consultar->execute();
    } catch (PDOException $e) {
        echo ("Deu Errado, mn " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Administrar Carros</title>
</head>

<body class="container-fluid bg-light mt-5 ">
    <header></header>
    <table class="table table-success table-striped table-hover">
        <tr>
            <th class="lead display-6">ID</th>
            <th class="lead display-6">NOME</th>
            <th class="lead display-6">FOTO</th>
            <th class="lead display-6">EMAIL</th>
            <th class="lead display-6">SENHA</th>
            <th class="lead display-6">AÇÕES</th>
        </tr>

        <?php foreach ($conexao->query($consulta) as $indice) { ?>
            <tr>
                <td class="lead"><?php echo $indice['adm_id']; ?></td>
                <td class="lead"><?php echo $indice['adm_nome']; ?></td>
                <td class="lead"><img src="../img/adm/<?php echo $indice['adm_foto']; ?>" alt="" width="90px" height="60px"></td>
                <td class="lead"><?php echo $indice['adm_email']; ?></td>
                <td class="lead"><?php echo $indice['adm_senha']; ?></td>
                <td>
                    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#alt<?php echo $indice['adm_id']; ?>"><img src="../img/botao/update.png" width="30px"></a>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $indice['adm_id']; ?>"><img src="../img/botao/delete.png" width="30px"></a>
                </td>
            </tr>

            <!-- MODAL DE EXCLUSÃO -->
            <div class="modal fade" id="del<?php echo $indice['adm_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluindo moderador...</h1>
                            <button type="button" class="btn btn-close btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger lead">Tem certeza que deseja excluir <?php echo $indice['adm_nome']; ?>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-dismiss="modal">Não</button>
                            <a type="button" class="btn btn-outline-danger btn-lg" href="delete_admin.php?adm_id=<?php echo $indice['adm_id'] ?>">Sim</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL DE ALTERAÇÃO -->
            <div class="modal fade" id="alt<?php echo $indice['adm_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel ">Alterando o registro de:<p class="modal-title fs-5 text-success"><?php echo $indice['adm_nome']; ?></p></h1>
                            <button type="button" class="btn btn-close btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            include('alterar_moderadores.php');
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-dismiss="modal">Cancelar Alteração</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <tr>
            <td colspan="6">
                <div class="container-fluid">
                    <p class="text-dark bg-light p-2 lead col-3">Total de automóveis: <?php echo $consultar->rowCount(); ?><a type="button" class="btn btn-outline-success ms-5" href="../admin_page.php">Voltar</a></p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>