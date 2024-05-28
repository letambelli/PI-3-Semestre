<?php
    include('protect.php');
    
    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");


    $sql = "SELECT * FROM parceiros WHERE id = " . $_SESSION['id'];

    $result = mysqli_query($strcon, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Erro ao executar a consulta.";
    }

    
    $result = $strcon->query($sql);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Dados</title>
    <link rel="stylesheet" href="cadastro_parc.css">
</head>
<body>
    <div class="container">
        <h1>Meus Dados</h1>
        <form action="" method="POST">
            <div class="form-group">
                
                <label>Nome da Empresa:</label>
                <input type="text" id="nome_empresa" name="nome_empresa" value="<?php echo $row['nome_empresa']?>" readonly>
            </div>
            <div class="form-group">

                <label>CNPJ da Empresa:</label>
                <input type="text" id="cnpj" name="cnpj" value="<?php echo $row ['cnpj']?>" readonly>
            </div>
            <div class="form-group">
               
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" value='<?php echo $row ['nome']?>'readonly>
            </div>
            <div class="form-group">

                <label>E-mail:</label>
                <input type="email" id="email" name="email" value='<?php echo $row ['email']?>'readonly>
            </div>
            <div class="form-group">

                <label>Telefone</label>
                <input type="tel" id="telefone" name="telefone" value='<?php echo $row ['telefone']?>'readonly>
            </div>
            <div class="form-group">
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" value='<?php echo $row ['senha']?>' readonly>
            </div>

            <div class="button-container">
                <button type="button"><a href="painel_parc.php">Voltar</a></button>
            </div>
        </form>
    </div>
</body>
</html>