<?php
    include('protect.php');
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Parceiro</title>
    <link rel="stylesheet" href="parceiro.css">
    <script src="format.js"></script>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Parceiro</h2>
        <form action="parceiro_cadastrar.php" method="POST">
            <div class="form-group">
                
                <label>Nome da Empresa:</label>
                <input type="text" id="nome_empresa" name="nome_empresa" maxlength="50" required>
            </div>
            <div class="form-group">

                <label>CNPJ da Empresa:</label>
                <input type="text" id="cnpj" name="cnpj" maxlength="20" oninput="formatarCNPJ(this)" required>
            </div>
            <div class="form-group">
               
                <label>Nome Completo:</label>
                <input type="text" id="nome" name="nome" maxlength="50" required>
            </div>
            <div class="form-group">

                <label>E-mail:</label>
                <input type="email" id="email" name="email" maxlength="120" required>
            </div>
            <div class="form-group">

                <label>Telefone:</label>
                <input type="tel" id="telefone" name="telefone" maxlength="16" oninput="formatarTelefone(this)" required>
            </div>
            <div class="form-group">
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" minlength="4" maxlength="30" required>
            </div>
            
            <div class="inline-elements">
            <input type="checkbox" required>
            <p>Li e aceito os <a class="link" href="documentos/temos_de_uso_e_politica_de_privacidade.pdf">Termos de Uso e Política de Privacidade</a></p>
            </div>

            <div class="button-container">
                <a href="config_adm.php">Cancelar</a>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>