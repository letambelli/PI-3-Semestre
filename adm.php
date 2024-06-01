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
                <label>Nome Completo:</label>
                <input type="text" id="nome" name="nome" maxlength="50" required>
            </div>
            <div class="form-group">

                <label>E-mail:</label>
                <input type="email" id="email" name="email" maxlength="50" required>
            </div>
            <div class="form-group">

                <label>Telefone:</label>
                <input type="tel" id="telefone" name="telefone" maxlength="20" oninput="formatarTelefone(this)" required>
            </div>
            <div class="form-group">
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" minlength="4" maxlength="20" required>
            </div>

            <div class="inline-elements">
            <input type="checkbox" required>
            <p>Li e aceito os <a class="link" href="documentos/temos_de_uso_e_politica_de_privacidade.pdf">Termos de Uso e Política de Privacidade</a></p>
            </div>

            <div class="button-container">
                <button type="button"><a href="config_adm.php">Cancelar</a></button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>