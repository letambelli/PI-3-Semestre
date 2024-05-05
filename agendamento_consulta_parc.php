<?php
include('protect.php');

$strcon = mysqli_connect("localhost", "root", "", "sai") or die("Erro ao se conectar com o banco");

$sql_parceiro = "SELECT * FROM parceiros WHERE id = " . $_SESSION['id'];
$result_parceiro = mysqli_query($strcon, $sql_parceiro);

if ($result_parceiro) {
    $parceiro_data = mysqli_fetch_assoc($result_parceiro);
    $nome_empresa = $parceiro_data['nome_empresa'];
    $cnpj = $parceiro_data['cnpj'];

    $sql_agendamento = "SELECT * FROM agendamento WHERE fornecedor = '$nome_empresa' OR cliente = '$nome_empresa' OR cnpj_for = '$cnpj'";

    if (!empty($_GET['search'])) {
        $data = mysqli_real_escape_string($strcon, $_GET['search']);
        $sql_agendamento .= " AND (id LIKE '%$data%' OR codigo LIKE '%$data%' OR notafiscal LIKE '%$data%' OR fornecedor LIKE '%$data%' OR cliente LIKE '%$data%' OR cnpj_for LIKE '%$data%' OR motorista LIKE '%$data%' OR cidade_ent LIKE '%$data%')";
    }

    $sql_agendamento .= " ORDER BY id DESC";

    $result_agendamento = $strcon->query($sql_agendamento);

} else {
    die("Erro ao buscar dados do parceiro.");
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Agendamento</title>
    <link rel="stylesheet" href="agendamento_consulta.css">
</head>
<body>
    <div class="box-search">
        <input type="search" class="form-control" placeholder="Pesquisar" id="pesquisar">
        <button class="pesquisa" onclick="searchData()">Pesquisar</button>
    </div>
    <br>
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
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_agendamento)) {
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
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <button class="voltar"><a href="painel_parc.php">Voltar</a></button>
    </div> 
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key == "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'agendamento_consulta_parc.php?search='+search.value;
    }
</script>
</html>
