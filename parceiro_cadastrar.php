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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="parceiro_cadastrar.css">
    <title>cadastrado</title>
</head>
<body>
    <div class="container">
        <p>Parceiro cadastrado com sucesso!</p>
        <button><a href="config_adm.php">Voltar para Configurações</a></button>
    </div>
</body>
</html