<?php
if (empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
    header("LOCATION: area_restrita.php");
}
?>
<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Cadastro Carros</title>
</head>

<body>
    <div class="container">
        <form action="php/insert_car.php" method="post" enctype="multipart/form-data">
            <label class="mt-3 mb-1"><b>Nome do Carro*:</b></label>
            <input type="text" name="car_nome" class="form-control" required>

            <label class="mt-4 mb-1"><b>Renavam*:</b></label>
            <input type="text" name="car_vin" class="form-control" required>

            <label class="mt-4 mb-1"><b>Foto do Carro:</b></label>
            <input type="file" name="car_foto" class="form-control">

            <label class="mt-4 mb-1"><b>Modelo*:</b></label>
            <input type="text" name="car_modelo" class="form-control" required>

            <label class="mt-4 mb-1"><b>Ano*:</b></label>
            <input type="number" name="car_ano" class="form-control" required>

            <label class="mt-4 mb-1"><b>Preço do Carro*:</b></label>
            <input type="text" name="car_valor" class="form-control" required>


            <input type="submit" value="Adicionar Automóvel" class="btn btn-outline-success mt-5 btn-lg">
        </form>
    </div>
</body>

</html>