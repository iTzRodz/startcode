<?php
    if(isset($_POST['btncadastro'])) {

        include_once('C:\xampp\htdocs\StartCode\config.php');

        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $nascimento = $_POST['data-nasc'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['tel'];

        $result = mysqli_query($conexao, "INSERT INTO Dado_pessoal(email, nome, data_nasc, cpf, sexo, telefone) VALUES('$email', '$nome', '$nascimento', '$cpf', '$sexo', '$telefone')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Obrigado</p>
</body>
</html>