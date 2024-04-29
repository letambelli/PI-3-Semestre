<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form name = "Cadastro" action = "usuario_cadastrar.php" method = "POST">
    <label>Nome Completo: </label>
    <input type = "text" name = "nome"></br>
    <label>E-Mail: </label>
    <input type = "email" name = "email"></br>
    <label>Telefone: </label>
    <input type = "tel" name = "telefone"></br>
    <label>Senha: </label>
    <input type = "password" name = "senha"></br>

    <input type = "submit" name = "enviar" value = "Enviar">
    </form>
</body>
</html>