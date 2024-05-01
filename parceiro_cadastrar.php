<?php

    $nome_empresa = $_POST ['nome_empresa'];
    $cnpj = $_POST ['cnpj'];
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $senha = $_POST['senha'];

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");
    $sql = "INSERT INTO parceiros (nome_empresa, cnpj, nome, email, telefone, senha) VALUES ('".$nome_empresa."','".$cnpj."', '".$nome."', '".$email."', '".$telefone."', '".$senha."');";
    mysqli_query ($strcon, $sql) or die ('Erro ao tentar cadastrar registro');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Parceiro cadastrado com sucesso!</p>
    <button><a href="config_adm.php">Voltar para o Login</a></button>
    
</body>
</html>