function limparFormulario() {
    document.getElementById("agendamento").reset();
}

function validarFormulario() {
    var form = document.getElementById("agendamento");
    var inputs = form.querySelectorAll("input, select");

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute("required") && inputs[i].value.trim() === "") {
            alert("Por favor, preencha todos os campos!");
            return false;
        }
    }

    return true;
}

