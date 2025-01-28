<?php

include './DB/connect.php';

//var_dump($_POST);
//$_POST é uma variavel GLOBAL do PHP --- APACHE --- request HTTP

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    //$senha = $_POST['pass'];
    //$conf_senha = $_POST['conf_pass'];


$sql = "INSERT INTO cliente (nome,cpf,fone,email) VALUES ('$nome','$cpf','$fone','$email')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "Cadastrado com sucesso";
}
else{
    die(mysqli_error($conn));
}

}