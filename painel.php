<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>

    <header class="cabecalho">
        <nav class="cabecalho_menu">
            <a class="cabecalho_menu_logo" href="painel.php">LogiPlanner</a>
            <a class="cabecalho_menu_link" href="logout.php">Sair</a>
        </nav>
    </header>

    <main>
    <div class="painel">
    <div class="painel-msg">
        <h2>Bem Vindo(a), <?php echo $_SESSION['nome'];?>!</h2><br>
        <h1>Início</h1>
    </div>

    <div class="painel-container">
        <a href="agendamento_consulta.php">Consultar Agendamentos</a>
        <a href="agendamento.php">Realizar Agendamento</a>
        <a href="config_adm.php">Cadastros</a>
    </div>
    </div>
    </main>

</body>
</html>