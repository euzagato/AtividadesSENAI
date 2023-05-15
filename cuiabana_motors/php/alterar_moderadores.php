<?php
if (empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
    header('location: area_restrita.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Produto</title>
</head>

<body>
    <div class="container">
        <form action="alter_moderadores.php" method="post" enctype="multipart/form-data">
            <label class="mt-2 mb-1"><b>Email*:</b></label>
            <input type="email" name="adm_email" class="form-control border-success" value="<?php echo $indice['adm_email']; ?>" required>

            <label class="mt-4 mb-1"><b>Nome de Usuário*:</b></label>
            <input type="text" name="adm_nome" class="form-control border-success" value="<?php echo $indice['adm_nome']; ?>" required>

            <label class="mt-4 mb-1"><b>Senha de Acesso*:</b></label>
            <input type="password" name="adm_senha" class="form-control border-success" value="<?php echo $indice['adm_senha']; ?>" required>

            <label class="mt-4 mb-1"><b>Foto da Pessoa:</b></label>
            <input type="file" name="adm_foto" class="form-control" required>
            <input type="hidden" name="adm_id" value="<?php echo $indice['adm_id']; ?>">

            <input type="submit" value="Alterar" class="btn btn-outline-success mt-5 btn-lg">
        </form>
    </div>
</body>

</html>