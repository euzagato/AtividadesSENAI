<?php
include 'php/conetion.php';

$select = $conection->prepare("SELECT id_modelo, nome_modelo FROM modelo ORDER BY id_modelo;");
$select->execute();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stl.css">
    <title>Consulta de Modelos</title>
</head>

<body>
    <header>
        <h1>Cosulta de Modelos</h1>
    </header>

    <table>
        <tr>
            <td>ID</td>
            <td>MODELO</td>
            <td>AÇÕES</td>
        </tr>

        <?php foreach ($select as $modelo) { ?>
            <tr>
                <td><?php echo $modelo['id_modelo']; ?></td>
                <td><?php echo $modelo['nome_modelo']; ?></td>
                <td>
                    <a href="php/delete/delete_modelo.php?id_modelo=<?php echo $modelo['id_modelo']; ?>">Excluir</a>
                    <a href="alter_modelo.php?id_modelo=<?php echo $modelo['id_modelo']; ?>">Alterar</a>
                    <a href="DIRETORIO.php?id_modelo=<?php echo $modelo['id_modelo']; ?>">Alocar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>