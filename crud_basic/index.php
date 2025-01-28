<?php
require './DB/connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class= menu>
        <ul>
            <li> <a href="index.php">Cadastrar</a></li>
            <li> <a href="listar.php">Listar</a></li>
        </ul>
    </header>
    <h1>Cadastro de Cliente</h1>

    <form method="POST" action="cadastra_cli.php">
    <div class = "container">
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fone</label>
        <input type="text" class="form-control" name = "fone"  id="fone" placeholder="(XX) X XXXX-XXXX">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name = "email" id="email" placeholder="name@example.com">
        </div>

        <button type="submit" name="cadastrar" class = "btn btn-sucess "> Cadastrar</button>
            </div>

    </div>
    </form>

</body>
</html>