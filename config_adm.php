<?php
    include('protect.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações ADM</title>
    <link rel="stylesheet" href="config_adm.css">
</head>
<body>

    <header class="cabecalho">
        <nav class="cabecalho_menu">
            <a class="cabecalho_menu_logo" href="painel.php">LogiPlanner</a>
            <a class="cabecalho_menu_link" href="logout.php">Sair</a>
        </nav>
    </header>

    <main>

        <div class="config-container-text">
            <h1>Cadastros</h1>
        </div>
        <div class="config-container">
            
            <a href="cadastro_adm.php">Meu Cadastro</a>
            <a href="parceiro.php">Cadastrar Parceiro</a>
            <a href="adm.php">Cadastrar ADM</a>
        </div>
    </main>
    
</body>
</html>