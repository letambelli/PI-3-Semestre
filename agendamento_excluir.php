<?php
    include('protect.php');

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

    if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM agendamento WHERE id=$id";

        $result = $strcon->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM agendamento WHERE id=$id";

            $resultDelete = $strcon->query($sqlDelete);

        }
            header('Location: agendamento_consulta.php');

    }
    
?>