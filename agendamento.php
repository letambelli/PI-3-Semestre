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
    <script src="format.js"></script>
</head>
<body>
    <form name="agendamento" id="agendamento" onsubmit="return validarFormulario()" action="agendamento_cadastrar.php" method="POST">

        <h1>Formulário de Agendamento</h1>

        <label class="label">Nota Fiscal: </label>
        <input type="text" name="notafiscal"  maxlength="20" oninput="formatarNotaFiscal(this)" required><br>
        
        <div>
            <label class="label">Carga: </label>
            <input type="text" name="carga" maxlength="30" required>
            <label class="label">Quantia de Itens: </label>
            <input type="number" name="qtd_itens" maxlength="5" required>
        </div>

        <div class="carga">
            <label class="label">Peso: </label>
            <input type="number" name="peso" maxlength="10" required>
            <label class="label">Quantidade de Pallets: </label>
            <input type="number" name="qtd_pallet" maxlength="5" required>
        </div>

        <label class="label">Veículo: </label>
        <select name="veiculo" required>
            <option value="a definir">A Definir</option>
            <option value="carreta">Carreta</option>
            <option value="truck">Truck</option>
            <option value="toco">Toco</option>
        </select>
        <label class="label">Placa: </label>
        <input type="text" name="placa" maxlength="9" required><br>

        <label class="label">Motorista: </label>
        <input type="text" name="motorista" maxlength="50" required><br>

        <h3>Coleta</h3>
        <label class="label">Fornecedor: </label>
        <input type="text" name="fornecedor" maxlength="30" required><br>
        <label class="label">CNPJ: </label>
        <input type="text" name="cnpj_for" maxlength="18" oninput="formatarCNPJ(this)" required>

        <h3>Entrega</h3>
        <label class="label">Cliente: </label>
        <input type="text" name="cliente" maxlength="30" required><br>
        <label class="label">Cidade: </label>
        <input type="text" name="cidade_ent" maxlength="50" required>
        <label class="label">Estado: </label>
        <input type="text" name="estado_ent" maxlength="20" required><br>
        <label class="label">Bairro: </label>
        <input type="text" name="bairro_ent" maxlength="50" required><br>
        <label class="label">Rua: </label>
        <input type="text" name="rua_ent" maxlength="50" required><br>
        <label class="label">Nº: </label>
        <input type="text" name="numero_ent" maxlength="20" required><br>
        <label class="label">CEP: </label>
        <input type="text" name="cep_ent" maxlength="8" oninput="formatarCEP(this)" required><br><br>
        
        <h3>Horários</h3>
        <div class="horarios">
            <div>
                <label class="label">Coleta: </label>
                <input type="datetime-local" name="hr_coleta" id="hr_col" required>
            </div>
            <div>
                <label class="label">Entrega: </label>
                <input type="datetime-local" name="hr_entrega" id="hr_entr" required>
            </div>
        </div>

        <h3>Observações</h3>
        <p>Obs:</p>
        <textarea name="obs" id="obs" maxlength="300"></textarea><br>
        
        <div class="button-container">
            <button class="cancelar"><a href="painel.php">Cancelar</a></button>
            <input class="limpar" type="reset" value="Limpar">
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>
