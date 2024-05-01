<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">

    <p>
        <label>Email:</label>
        <input type="text" id="email" name="email">
    </p>

    <p>
        <label>Senha:</label>
        <input type="password" id="senha" name="senha">
    </p>

    <button><a href="login_escolher.php">Voltar</a></button>
    <button type="submit">Entrar</button>
    
    <?php

        $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

        if(isset($_POST['email']) || isset($_POST['senha'])){
            if(strlen($_POST['email']) == 0) {
                echo "Preencha seu email";
            } else if(strlen($_POST['senha']) == 0) {
                echo "Preencha sua senha";
            } else {
                $email = $strcon->real_escape_string($_POST['email']);
                $senha = $strcon->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM parceiros WHERE email = '$email' AND senha = '$senha'";
                $sql_query = $strcon->query($sql_code) or die("Falha na execução do código SQL: " . $strcon->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    header("Location: painel_parc.php");

                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
            }
        }

        ?>
    </form>

    

</body>
</html>