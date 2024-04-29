<?php
    include('protect.php');
    
    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

    $sql = "SELECT * FROM agendamento ORDER BY id DESC";

    $result = $strcon->query($sql);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Agendamento</title>
</head>
<body>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Código</th>
                    <th scope="col">Nota Fiscal</th>
                    <th scope="col">Carga</th>
                    <th scope="col">Quantia de Itens</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Quantidade de Pallets</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Motorista</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Nº</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Horário de Coleta</th>
                    <th scope="col">Horário de Entrega</th>
                    <th scope="col"></th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['codigo'] . "</td>";
                        echo "<td>" . $user_data['notafiscal'] . "</td>";
                        echo "<td>" . $user_data['carga'] . "</td>";
                        echo "<td>" . $user_data['qtd_itens'] . "</td>";
                        echo "<td>" . $user_data['peso'] . "</td>";
                        echo "<td>" . $user_data['qtd_pallet'] . "</td>";
                        echo "<td>" . $user_data['veiculo'] . "</td>";
                        echo "<td>" . $user_data['placa'] . "</td>";
                        echo "<td>" . $user_data['motorista'] . "</td>";
                        echo "<td>" . $user_data['fornecedor'] . "</td>";
                        echo "<td>" . $user_data['cnpj_for'] . "</td>";
                        echo "<td>" . $user_data['cliente'] . "</td>";
                        echo "<td>" . $user_data['cidade_ent'] . "</td>";
                        echo "<td>" . $user_data['estado_ent'] . "</td>";
                        echo "<td>" . $user_data['bairro_ent'] . "</td>";
                        echo "<td>" . $user_data['rua_ent'] . "</td>";
                        echo "<td>" . $user_data['numero_ent'] . "</td>";
                        echo "<td>" . $user_data['cep_ent'] . "</td>";
                        echo "<td>" . $user_data['hr_coleta'] . "</td>";
                        echo "<td>" . $user_data['hr_entrega'] . "</td>";
                        echo "<td><button><a href=\"agendamento_edit.php\">Alterar</a></button></td>";
                        echo "<td><button><a href=\"\">Excluir</a></button></td>";
                        
                    }
                ?>
            </tbody>
        </table>
    </div>

    <button><a href="painel.php">Voltar</a></button>
</body>
</html>
