<?php
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Agendamento</title>
    <link rel="stylesheet" href="agendamento.css">
</head>
<body>
    <form name="agendamento" id="agendamento" onsubmit="return validarFormulario()" action="agendamento_cadastrar.php" method="POST">

        <h1>Formulário de Agendamento</h1>

        <label class="label">Código: </label>
        <input type="text" name="codigo" required><br>

        <label class="label">Nota Fiscal: </label>
        <input type="text" name="notafiscal" required><br>
        
        
            <label class="label">Carga: </label>
            <input type="text" name="carga" required>
            <label class="label">Quantia de Itens: </label>
            <input type="number" name="qtd_itens" required>

        <div class="carga">
            <label class="label">Peso: </label>
            <input type="number" name="peso" required>
            <label class="label">Quantidade de Pallets: </label>
            <input type="number" name="qtd_pallet" required>
        </div>

        <label class="label">Veículo: </label>
        <select name="veiculo" required>
            <option value="carreta">Carreta</option>
            <option value="truck">Truck</option>
            <option value="toco">Toco</option>
        </select>
        <label class="label">Placa: </label>
        <input type="text" name="placa" required><br>

        <label class="label">Motorista: </label>
        <input type="text" name="motorista" required><br>

        <p>Endereço da Coleta</p>
        <label class="label">Fornecedor: </label>
        <input type="text" name="fornecedor" required><br>
        <label class="label">CNPJ: </label>
        <input type="text" name="cnpj_for" required>

        <p>Endereço da Entrega</p>
        <label class="label">Cliente: </label>
        <input type="text" name="cliente" required><br>
        <label class="label">Cidade: </label>
        <input type="text" name="cidade_ent" required>
        <label class="label">Estado: </label>
        <input type="text" name="estado_ent" required><br>
        <label class="label">Bairro: </label>
        <input type="text" name="bairro_ent" required><br>
        <label class="label">Rua: </label>
        <input type="text" name="rua_ent" required><br>
        <label class="label">Nº: </label>
        <input type="text" name="numero_ent" required><br>
        <label class="label">CEP: </label>
        <input type="text" name="cep_ent" required><br><br>

        <div class="horarios">
            <div>
                <label class="label">Horário de Coleta: </label>
                <input type="datetime-local" name="hr_coleta" id="hr_col" required>
            </div>
            <div>
                <label class="label">Horário de Entrega: </label>
                <input type="datetime-local" name="hr_entrega" id="hr_entr" required>
            </div>
        </div>
        
        <div class="button-container">
            <button class="cancelar"><a href="painel.php">Cancelar</a></button>
            <input class="limpar" type="reset" value="Limpar">
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>

    <script src="agendamento.js"></script>
</body>
</html>
