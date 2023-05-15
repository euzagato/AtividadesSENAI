<?php
if (empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
   header("LOCATION: area_restrita.php");
}
?>
<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Cadastro Administrador</title>
</head>

<body>
    <div class="container">
        <form action="./insert_admin.php" method="post" enctype="multipart/form-data">
            <label class="mt-2 mb-1"><b>Email*:</b></label>
            <input type="email" name="adm_email" autocomplete="off" class="form-control border-success" required>

            <label class="mt-4 mb-1"><b>Nome de Usuário*:</b></label>
            <input type="text" name="adm_nome" autocomplete="off" class="form-control border-success" required>

            <label class="mt-4 mb-1"><b>Senha de Acesso*:</b></label>
            <input type="password" name="adm_senha" autocomplete="off" class="form-control border-success" required>
    
            <label class="mt-4 mb-1"><b>Foto da Pessoa:</b></label>
            <input type="file" name="adm_foto" class="form-control">

            <input type="submit" value="Cadastrar Administrador" class="btn btn-outline-success mt-5 btn-lg">
        </form>
    </div>
</body>

</html>