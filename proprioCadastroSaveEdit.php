<?php
    include('protect.php');

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

    if(isset($_POST['update'])){
        $id = $_POST ['id'];
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $telefone = $_POST ['telefone'];
        $senha = $_POST ['senha'];

        $sqlUpdate = "UPDATE adm SET nome='$nome', email='$email', telefone='$telefone', senha='$senha' WHERE id='$id'";

        $result = $strcon->query($sqlUpdate);
    }
    header('Location: cadastro_adm.php')
?>