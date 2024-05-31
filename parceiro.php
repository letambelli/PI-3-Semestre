<?php
    include('protect.php');
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Parceiro</title>
    <link rel="stylesheet" href="parceiro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastrar Parceiro</h2>
        <form action="parceiro_cadastrar.php" method="POST">
            <div class="form-group">
                
                <label>Nome da Empresa:</label>
                <input type="text" id="nome_empresa" name="nome_empresa" required>
            </div>
            <div class="form-group">

                <label>CNPJ da Empresa:</label>
                <input type="text" id="cnpj" name="cnpj" required>
            </div>
            <div class="form-group">
               
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">

                <label>E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">

                <label>Telefone</label>
                <input type="tel" id="telefone" name="telefone" required>
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