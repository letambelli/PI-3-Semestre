<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ADM</title>
</head>
<body>
    <h1>Cadastrar ADM</h1>
    <form name = "Cadastro" action = "adm_cadastrar.php" method = "POST">
    <label>Nome Completo: </label>
    <input type = "text" name = "nome"></br>
    <label>E-Mail: </label>
    <input type = "email" name = "email"></br>
    <label>Telefone: </label>
    <input type = "tel" name = "telefone"></br>
    <label>Senha: </label>
    <input type = "password" name = "senha"></br>
    
    <button><a href="config_adm.php">Cancelar</a></button>
    <input type = "submit" name = "enviar" value = "Enviar">
    </form>
</body>
</html>