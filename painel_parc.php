<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="painel_parc.css">
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho_menu">
            <a class="cabecalho_menu_logo" href="painel_parc.php">LogiPlanner</a>
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
                <a href="agendamento_consulta_parc.php">Consultar Agendamentos</a></button>
                <a href="cadastro_parc.php">Meus Dados</a>
        </div>
        </div>
    </main>

</body>
</html>