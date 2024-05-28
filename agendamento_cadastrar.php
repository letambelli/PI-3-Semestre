<?php
    include('protect.php');
    
    $codigo = $_POST ['codigo'];
    $notafiscal = $_POST ['notafiscal'];
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

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");
    $sql = "INSERT INTO agendamento (codigo, notafiscal, carga, qtd_itens, peso, qtd_pallet, veiculo, placa, motorista, fornecedor, cnpj_for, cliente, cidade_ent, estado_ent, bairro_ent, rua_ent, numero_ent, cep_ent, hr_coleta, hr_entrega) VALUES ('".$codigo."' ,'".$notafiscal."' , '".$carga."' , '".$qtd_itens."' , '".$peso."' , '".$qtd_pallet."' , '".$veiculo."' , '".$placa."' , '".$motorista."' , '".$fornecedor."' ,  '".$cnpj_for."' ,'".$cliente."' , '".$cidade_ent."' ,  '".$estado_ent."' ,  '".$bairro_ent."' ,  '".$rua_ent."' ,  '".$numero_ent."' ,  '".$cep_ent."' ,'".$hr_coleta."' , '".$hr_entrega."');";
    mysqli_query ($strcon, $sql) or die ('Erro ao tentar cadastrar registro');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Realizado com Sucesso</title>
    <link rel="stylesheet" href="agendamento_cadastrar.css">
</head>
<body>
    <div class="container">
        <p>Agendamento realizado com sucesso!</p>
        <a href="painel.php"><button>Voltar para o início</button></a>
    </div>
</body>
</html>


