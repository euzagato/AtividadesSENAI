<?php
include 'php/conetion.php';

$select = $conection->prepare("SELECT id_aeronave, hangar.nome_hangar, modelo.nome_modelo, aeronave.prefixo, aeronave.locacao FROM aeronave INNER JOIN hangar ON hangar.id_hangar = aeronave.id_hangar INNER JOIN modelo ON modelo.id_modelo = aeronave.id_modelo ORDER BY id_aeronave;");
$select->execute();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stl.css">
    <title>Consulta de Aeronaves</title>
</head>


<body>
    <header>
        <h1>Cosulta de Aeronaves</h1>
    </header>

    <table>
        <tr>
            <td>ID</td>
            <td>HANGAR</td>
            <td>MODELO</td>
            <td>PREFIXO</td>
            <td>LOCADO</td>
            <td>AÇÕES</td>
        </tr>


        <?php foreach ($select as $aeronave) { ?>
            <tr>
                <td><?= $aeronave['id_aeronave']; ?></td>
                <td><?= $aeronave['nome_hangar']; ?></td>
                <td><?= $aeronave['nome_modelo']; ?></td>
                <td><?= $aeronave['prefixo']; ?></td>
                <td><?= $aeronave['locacao'] ? "SIM" : "NÃO"; ?></td>
                <td>
                    <a href="php/delete/delete_aeronave.php?id_aeronave=<?= $aeronave['id_aeronave']; ?>">Excluir</a>
                    <a href="alter_aeronave.php?id_aeronave=<?= $aeronave['id_aeronave']; ?>">Alterar</a>
                    <a href="php/update/alocar.php?id_aeronave=<?= $aeronave['id_aeronave']; ?>&loc=<?= $aeronave['locacao']; ?>">
                        <?= $aeronave['locacao'] == 1 ? "Devolver" : "Alocar"; ?>
                    </a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>