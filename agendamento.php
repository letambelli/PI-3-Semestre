<?php
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Agendamento</title>
</head>
<body>
    <h1>Formulário de Agendamento</h1>
    <form name="agendamento" id="agendamento" onsubmit="return validarFormulario()" action="agendamento_cadastrar.php" method="POST">
        <label>Código: </label>
        <input type="text" name="codigo" required><br>

        <label>Nota Fiscal: </label>
        <input type="text" name="notafiscal" required><br>

        <label>Carga: </label>
        <input type="text" name="carga" required>
        <label>Quantia de Itens: </label>
        <input type="number" name="qtd_itens" required>
        <label>Peso: </label>
        <input type="number" name="peso" required>
        <label>Quantidade de Pallets: </label>
        <input type="number" name="qtd_pallet" required><br>

        <label>Veículo: </label>
        <select name="veiculo" required>
            <option value="carreta">Carreta</option>
            <option value="truck">Truck</option>
            <option value="toco">Toco</option>
        </select>
        <label>Placa: </label>
        <input type="text" name="placa" required><br>

        <label>Motorista: </label>
        <input type="text" name="motorista" required><br>

        <p>Endereço da Coleta</p>
        <label>Fornecedor: </label>
        <input type="text" name="fornecedor" required><br>
        <label>CNPJ: </label>
        <input type="text" name="cnpj_for" required>

        <p>Endereço da Entrega</p>
        <label>Cliente: </label>
        <input type="text" name="cliente" required><br>
        <label>Cidade: </label>
        <input type="text" name="cidade_ent" required>
        <label>Estado: </label>
        <input type="text" name="estado_ent" required><br>
        <label>Bairro: </label>
        <input type="text" name="bairro_ent" required><br>
        <label>Rua: </label>
        <input type="text" name="rua_ent" required><br>
        <label>Nº: </label>
        <input type="text" name="numero_ent" required><br>
        <label>CEP: </label>
        <input type="text" name="cep_ent" required><br><br>

        <label>Horário de Coleta: </label>
        <input type="datetime-local" name="hr_coleta" required><br>

        <label>Horário de Entrega: </label>
        <input type="datetime-local" name="hr_entrega" required><br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="button" value="Limpar" onclick="limparFormulario()">
        <button><a href="painel.php">Cancelar</a></button>
    </form>

    <script src="agendamento.js"></script>
</body>
</html>
