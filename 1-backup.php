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
