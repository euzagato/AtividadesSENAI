<?php
include('conexao.php');

$consulta = "SELECT * FROM `carros` ORDER BY car_id";
try {
    $consultar = $conexao->prepare($consulta);
    $consultar->execute();
} catch (PDOException $e) {
    echo ("Deu Errado, mn " . $e->getMessage());
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
    <title>Ver Carros</title>
</head>

<body class="container-fluid bg-light mt-5 ">
    <header></header>
    <table class="table table-success table-striped table-hover">
        <tr>
            <th class="lead display-6">ID</th>
            <th class="lead display-6">NOME</th>
            <th class="lead display-6">MODELO</th>
            <th class="lead display-6">ANO</th>
            <th class="lead display-6">VALOR</th>
            <th class="lead display-6">FOTO</th>
        </tr>

        <?php foreach ($conexao->query($consulta) as $indice) { ?>
            <tr>
                <td class="lead"><?php echo $indice['car_id']; ?></td>
                <td class="lead"><?php echo $indice['car_nome']; ?></td>
                <td class="lead"><?php echo $indice['car_modelo']; ?></td>
                <td class="lead"><?php echo $indice['car_ano']; ?></td>
                <td class="lead"><?php echo $indice['car_valor']; ?></td>
                <td class="lead"><img src="../img/carros/<?php echo $indice['car_foto']; ?>" alt="" width="90px" height="60px"></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="6">
                <div class="container-fluid">
                    <p class="text-dark bg-light p-2 lead col-3">Total de automóveis: <?php echo $consultar->rowCount(); ?><a type="button" class="btn btn-outline-success ms-4" href="../index.php">Voltar</a></p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>