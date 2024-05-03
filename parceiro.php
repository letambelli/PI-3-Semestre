<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Planos e Preços</title>
    <link rel="stylesheet" href="parceiro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastrar Parceiro</h2>
        <form action="parceiro_cadastrar.php" method="POST">
            <div class="form-group">
                
                <input type="text" id="nome_empresa" name="nome_empresa" placeholder="Nome da empresa"required>
            </div>
            <div class="form-group">

                <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ da empresa"required>
            </div>
            <div class="form-group">
               
                <input type="text" id="nome" name="nome" placeholder="Nome completo"required>
            </div>
            <div class="form-group">
        
                <input type="email" id="email" name="email" placeholder="Email"required>
            </div>
            <div class="form-group">

                <input type="tel" id="telefone" name="telefone" placeholder="Telefone"required>
            </div>
            <div class="form-group">
                
                <input type="password" id="senha" name="senha" placeholder="Senha"required>
            </div>

            <div class="button-container">
                <button type="button"><a href="config_adm.php">Cancelar</a></button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>