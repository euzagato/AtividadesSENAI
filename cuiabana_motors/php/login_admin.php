<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Login Moderador</title>
</head>

<body>
    <div class="container">
        <form action="php/login_comparacao.php" method="post">
            <label class="mt-2 mb-1"><b>Email*:</b></label>
            <input type="email" name="adm_email" class="form-control border-success" required>

            <label class="mt-4 mb-1"><b>Senha de Acesso*:</b></label>
            <input type="password" name="adm_senha" class="form-control border-success" required>

            <input type="submit" value="Login" class="btn btn-outline-success mt-5 btn-lg">
        </form>
    </div>
</body>

</html>