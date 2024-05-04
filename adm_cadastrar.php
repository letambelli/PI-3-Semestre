<?php
    //4 colunas

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $senha = $_POST['senha'];

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");
    $sql = "INSERT INTO adm (nome, email, telefone, senha) VALUES ('".$nome."', '".$email."', '".$telefone."', '".$senha."');";
    mysqli_query ($strcon, $sql) or die ('Erro ao tentar cadastrar registro');

    $id_usuario = mysqli_insert_id($strcon);
    $id_formatado = sprintf("%05d", $id_usuario);
    echo "Usuário cadastrado com sucesso. O Código de usuário é para o login é: " . $id_formatado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ADM</title>
    <link rel="stylesheet" href="adm_cadastrar.css">
</head>
<body>
    <button><a href="config_adm.php">Voltar para Configurações</a></button>
    
</body>
</html>