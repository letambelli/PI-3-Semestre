<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_adm.css">
</head>
<body>
    <div class="login-container">
        <h1>Acesse sua conta</h1>
        <form action=""  method="POST">

        <p>
            <label>Usuário:</label>
            <input type="text" id="id" name="id">
        </p>

        <p>
            <label>Senha:</label>
            <input type="password" id="senha" name="senha">
        </p>

        <div class="button-container">
            <button type="button"><a href="index.php">Voltar</a></button>
            <button type="submit" value="continue">Entrar</button><br><br>
        </div>

        <?php

        $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

        if(isset($_POST['id']) || isset($_POST['senha'])){
            if(strlen($_POST['id']) == 0) {
                echo "Preencha seu código de usuário!";
            } else if(strlen($_POST['senha']) == 0) {
                echo "Preencha sua senha!";
            } else {
                $id = $strcon->real_escape_string($_POST['id']);
                $senha = $strcon->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM adm WHERE id = '$id' AND senha = '$senha'";
                $sql_query = $strcon->query($sql_code) or die("Falha na execução do código SQL: " . $strcon->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    header("Location: painel.php");

                } else {
                    echo "Falha ao logar! Código de Usuário ou senha incorretos";
                }
            }
        }

        ?>
        </form>
    </div>
    
    
    

    

</body>
</html>