<?php
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Parceiro</title>
    <link rel="stylesheet" href="adm.css">
    <script src="format.js"></script>
</head>
<body>
    <div class="container">
        <h2>Cadastrar ADM</h2>
        <form action="adm_cadastrar.php" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">

                <label>E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">

                <label>Telefone:</label>
                <input type="tel" id="telefone" name="telefone" oninput="formatarTelefone(this)" required>
            </div>
            <div class="form-group">
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <div class="button-container">
                <button type="button"><a href="config_adm.php">Cancelar</a></button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>