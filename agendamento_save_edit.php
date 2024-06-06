<?php
    include('protect.php');

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

    if(isset($_POST['update'])){
        $id = $_POST ['id'];
        $carga = $_POST ['carga'];
        $qtd_itens = $_POST ['qtd_itens'];
        $peso = $_POST ['peso'];
        $qtd_pallet = $_POST ['qtd_pallet'];
        $veiculo = $_POST ['veiculo'];
        $placa = $_POST ['placa'];
        $motorista = $_POST ['motorista'];
    
        $fornecedor = $_POST ['fornecedor'];
        $cnpj_for = $_POST ['cnpj_for'];
    
        $cliente = $_POST ['cliente'];
        $cidade_ent = $_POST ['cidade_ent'];
        $estado_ent = $_POST ['estado_ent'];
        $bairro_ent = $_POST ['bairro_ent'];
        $rua_ent = $_POST ['rua_ent'];
        $numero_ent = $_POST ['numero_ent'];
        $cep_ent = $_POST ['cep_ent'];
    
        $hr_coleta = $_POST ['hr_coleta'];
        $hr_entrega = $_POST ['hr_entrega'];

        $obs = $_POST ['obs'];

        $sqlUpdate = "UPDATE agendamento SET carga='$carga', qtd_itens='$qtd_itens', peso='$peso', qtd_pallet='$qtd_pallet', veiculo='$veiculo', placa='$placa', motorista='$motorista', fornecedor='$fornecedor', cnpj_for='$cnpj_for', cliente='$cliente', cidade_ent='$cidade_ent', estado_ent='$estado_ent', bairro_ent='$bairro_ent', rua_ent='$rua_ent', numero_ent='$numero_ent', cep_ent='$cep_ent', hr_coleta='$hr_coleta', hr_entrega='$hr_entrega', obs='$obs' WHERE id='$id'";

        $result = $strcon->query($sqlUpdate);
    }
    header('Location: agendamento_consulta.php')
?>