<?php
    include('protect.php');

    $strcon = mysqli_connect("localhost", "root", "", "sai") or die("Erro ao se conectar com o banco");

    $sql = "SELECT * FROM adm WHERE id = " . $_SESSION['id'];
    $result = mysqli_query($strcon, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Erro ao executar a consulta.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="container">
        <h1>Alterar Meus Dados</h1>
        <form action="proprioCadastroSaveEdit.php" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required>
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
            </div>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="<?php echo htmlspecialchars($row['telefone']); ?>" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" value="<?php echo htmlspecialchars($row['senha']); ?>" required>
            </div>

            <div class="button-container">
                <button type="button"><a href="cadastro_adm.php">Cancelar</a></button>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="submit" name="update" value="Salvar" id="update">
            </div>
        </form>
    </div>
</body>
</html>
