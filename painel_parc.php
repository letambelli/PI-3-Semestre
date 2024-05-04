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
    <div class="painel-container">
        <h2>Bem Vindo(a), <?php echo $_SESSION['nome'];?>!</h2>
        <button><a href="#">Consultar Agendamentos</a></button>
        <button><a href="config_parceiro.php">Meus Dados</a></button>
        <button class="sair"><a href="logout.php">Sair</a></button>
        </div>

</body>
</html>