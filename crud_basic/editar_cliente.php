<?php
require './DB/connect.php';

if(isset($_GET['id'])){

    $id_recebido = $_GET['id'];

    $sql = "SELECT * FROM cliente WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);

    $cliente = mysqli_fetch_assoc($result);

}
else{

    header('location: index.php');

}

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $sql_update = "UPDATE cliente SET nome = '$nome',cpf = '$cpf', fone = '$fone', email = '$email' WHERE id = $id_recebido";

    $result_update = mysqli_query($conn,$sql_update);

    if($result_update){
        echo '<script> alert("Cliente atualizado com sucesso") </script>';
    }

    //echo "DADOS RECEBIDOS VIA POST";
   // echo $nome . <'br'> . $cpf . <'br'> . $fone . <'br'>  . $email;
}


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
    <header class = "menu">
        <ul>
            <li> <a href="index.php">Cadastrar</a></li>
            <li> <a href="listar.php">Listar</a></li>
        </ul>
    </header>

    <h1>Editar Cliente</h1>
   <form method="POST">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" name = "nome" id="nome" placeholder="nome" value = "<?=$cliente['nome'];?>">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CPF</label>
        <input type="text" class="form-control" name= "cpf" id="cpf" placeholder="000.000.000-00" value = "<?=$cliente['cpf'];?>">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fone</label>
        <input type="text" class="form-control" name = "fone" id="fone" placeholder="(XX) X XXXX-XXXX" value = "<?=$cliente['fone'];?>">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name = "email" id="email" placeholder="name@example.com" value = "<?=$cliente['email'];?>">
        </div>
        <button type="reset" name = cancelar class = "btn btn-danger"> Cancelar</button>
        <button type="submit" name = editar class = "btn btn-primary"> Editar</button>
            </div>
        
    </form>

    
</body>
</html>