const btn = document.getElementById("subButton");

btn.addEventListener('click', function(event){
    const campo_name = document.getElementById('validationCustom01');
    const campo_email = document.getElementById("validationCustom02");
    const campo_senha = document.getElementById("validationCustomUsername");
    const campo_resumo = document.getElementById("validationCustom03");
    const select_area = document.getElementById("validationCustom04");
    const select_tempo = document.getElementById("validationCustom04-2");
    const campo_certificacoes = document.getElementById("validationCustom05");
    const campo_celular = document.getElementById("validationCustom06");
    const campo_link = document.getElementById("validationCustom07");

    // Helper function to show alert and reset field
    function showAlertAndResetField(message, field) {
        Swal.fire({
            icon: "error",
            title: "Oops... Algo deu errado",
            text: message
        }).then(() => {
            field.value = '';
            field.focus();
        });
    }

    if(campo_name.value.trim() === '') {
        event.preventDefault();
        showAlertAndResetField("O campo nome está vazio!", campo_name);
        return;
    }
    
    if(!validateEmail(campo_email.value.trim())) {
        event.preventDefault();
        showAlertAndResetField("O campo email é inválido!", campo_email);
        return;
    }
    
    if(campo_senha.value.trim() === '' || campo_senha.value.length < 6) {
        event.preventDefault();
        showAlertAndResetField("O campo senha está vazio ou é muito curto!", campo_senha);
        return;
    }
    
    if(campo_resumo.value.trim().length < 20) {
        event.preventDefault();
        showAlertAndResetField("O campo resumo deve conter pelo menos 20 caracteres!", campo_resumo);
        return;
    }
    
    if(select_area.value === '') {
        event.preventDefault();
        showAlertAndResetField("Selecione uma área!", select_area);
        return;
    }
    
    if(select_tempo.value === '') {
        event.preventDefault();
        showAlertAndResetField("Selecione um tempo de experiência!", select_tempo);
        return;
    }
    
    if(campo_certificacoes.value.trim() === '') {
        event.preventDefault();
        showAlertAndResetField("O campo certificações está vazio!", campo_certificacoes);
        return;
    }
    
    if(!validatePhoneNumber(campo_celular.value.trim())) {
        event.preventDefault();
        showAlertAndResetField("O campo celular é inválido!", campo_celular);
        return;
    }
    
    if(!isValidURL(campo_link.value.trim())) {
        event.preventDefault();
        showAlertAndResetField("O campo link é inválido!", campo_link);
        return;
    }
});

// Helper functions to validate email, phone number, and URL
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhoneNumber(phone) {
    const re = /^\d{10,15}$/; // Adjust this regex as per your phone number format
    return re.test(phone);
}

function isValidURL(string) {
    try {
        new URL(string);
        return true;
    } catch (_) {
        return false;
    }
}
