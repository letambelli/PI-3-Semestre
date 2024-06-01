<?php
    include('protect.php');

    $strcon = mysqli_connect ("localhost", "root", "", "sai") or die ("Erro ao se conectar com o banco");

    if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM agendamento WHERE id=$id";

        $result = $strcon->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $codigo = $user_data ['codigo'];
                $notafiscal = $user_data ['notafiscal'];
                $carga = $user_data ['carga'];
                $qtd_itens = $user_data ['qtd_itens'];
                $peso = $user_data ['peso'];
                $qtd_pallet = $user_data ['qtd_pallet'];
                $veiculo = $user_data ['veiculo'];
                $placa = $user_data ['placa'];
                $motorista = $user_data ['motorista'];

                $fornecedor = $user_data ['fornecedor'];
                $cnpj_for = $user_data ['cnpj_for'];

                $cliente = $user_data ['cliente'];
                $cidade_ent = $user_data ['cidade_ent'];
                $estado_ent = $user_data ['estado_ent'];
                $bairro_ent = $user_data ['bairro_ent'];
                $rua_ent = $user_data ['rua_ent'];
                $numero_ent = $user_data ['numero_ent'];
                $cep_ent = $user_data ['cep_ent'];

                $hr_coleta = $user_data ['hr_coleta'];
                $hr_entrega = $user_data ['hr_entrega'];

            }
            

        } else {
            header('Location: painel.php');
        }

    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Agendamento</title>
    <link rel="stylesheet" href="agendamento_edit.css">
    <script src="format.js"></script>
</head>
<body>
    <form name="agendamento" id="agendamento" onsubmit="return validarFormulario()" action="agendamento_save_edit.php" method="POST">

        <h1>Alterar Agendamento</h1>

        <label class="label">Código: </label>
        <input type="text" name="codigo" maxlength="6" value="<?php echo $codigo ?>" required><br>

        <label class="label">Nota Fiscal: </label>
        <input type="text" name="notafiscal" maxlength="20" value="<?php echo $notafiscal ?>" oninput="formatarNotaFiscal(this)" required><br>

        <label class="label">Carga: </label>
        <input type="text" name="carga" maxlength="30" value="<?php echo $carga ?>" required>

        <label class="label">Quantia de Itens: </label>
        <input type="number" name="qtd_itens" maxlength="5" value="<?php echo $qtd_itens ?>" required>

        <label class="label">Peso: </label>
        <input type="number" name="peso" maxlength="10" value="<?php echo $peso ?>" required>

        <label class="label">Quantidade de Pallets: </label>
        <input type="number" name="qtd_pallet" maxlength="5" value="<?php echo $qtd_pallet ?>" required><br>

        <label class="label">Veículo: </label>
        <select name="veiculo" value="<?php echo $veiculo ?>" required>
            <option value="carreta">Carreta</option>
            <option value="truck">Truck</option>
            <option value="toco">Toco</option>
        </select>
        <label class="label">Placa: </label>
        <input type="text" name="placa" value="<?php echo $placa ?>" required><br>

        <label class="label">Motorista: </label>
        <input type="text" name="motorista" value="<?php echo $motorista ?>" required><br>

        <h3>Coleta</h3>
        <label class="label">Fornecedor: </label>
        <input type="text" name="fornecedor" value="<?php echo $fornecedor ?>" required><br>
        <label class="label">CNPJ: </label>
        <input type="text" name="cnpj_for" value="<?php echo $cnpj_for ?>" oninput="formatarCNPJ(this)" required>

        <h3>Entrega</h3>
        <label class="label">Cliente: </label>
        <input type="text" name="cliente" value="<?php echo $cliente ?>" required><br>
        <label class="label">Cidade: </label>
        <input type="text" name="cidade_ent" value="<?php echo $cidade_ent ?>" required>
        <label class="label">Estado: </label>
        <input type="text" name="estado_ent" value="<?php echo $estado_ent ?>" required><br>
        <label class="label">Bairro: </label>
        <input type="text" name="bairro_ent" value="<?php echo $bairro_ent ?>" required><br>
        <label class="label">Rua: </label>
        <input type="text" name="rua_ent" value="<?php echo $rua_ent ?>" required><br>
        <label class="label">Nº: </label>
        <input type="text" name="numero_ent" value="<?php echo $numero_ent ?>" required><br>
        <label class="label">CEP: </label>
        <input type="text" name="cep_ent" value="<?php echo $cep_ent ?>" oninput="formatarCEP(this)" required><br><br>
        
        <h3>Horários</h3>
        <div class="horarios">
            <div>
                <label class="label">Horário de Coleta: </label>
                <input type="datetime-local" name="hr_coleta" id="hr_col" value="<?php echo $hr_coleta ?>" required>
            </div>
            
            <div>
                <label class="label">Horário de Entrega: </label>
                <input type="datetime-local" name="hr_entrega" id="hr_entr" value="<?php echo $hr_entrega ?>" required>
            </div>
        </div>
        
        <div class="button-container">
            <button class="cancelar"><a href="agendamento_consulta.php">Cancelar</a></button>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" name="update" value="Salvar">
        </div>
    </form>

</body>
</html>
