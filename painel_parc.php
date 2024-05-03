<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>Bem Vindo(a), <?php echo $_SESSION['nome'];?>!</p>
    <button><a href="#">Consultar Agendamentos</a></button>
    <button><a href="config_parceiro.php">Meus Dados</a></button>
    <button><a href="logout.php">Sair</a></button>

</body>
</html>