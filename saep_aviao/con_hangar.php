<?php
include 'php/conetion.php';

$select = $conection->prepare("SELECT id_hangar, nome_hangar FROM hangar ORDER BY id_hangar");
$select->execute();
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stl.css">
    <title>Consulta de Hangares</title>
</head>

<body>
    <header>
        <h1>Cosulta de Hangares</h1>
    </header>

    <table>
        <tr>
            <td>ID</td>
            <td>HANGAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php foreach ($select as $hangar) { ?>
            <tr>
                <td><?php echo $hangar['id_hangar']; ?></td>
                <td><?php echo $hangar['nome_hangar']; ?></td>
                <td>
                    <a href="php/delete/delete_hangar.php?id_hangar=<?php echo $hangar['id_hangar']; ?>">Excluir</a>
                    <a href="alter_hangar.php?id_hangar=<?php echo $hangar['id_hangar']; ?>">Alterar</a>
                    <a href="DIRETORIO.php?id_hangar=<?php echo $hangar['id_hangar']; ?>">Alocar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>