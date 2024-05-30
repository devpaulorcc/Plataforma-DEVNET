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
    
    // Helper function to show alert
    function showAlert(message) {
        Swal.fire({
            icon: "error",
            title: "Oops... Algo deu errado",
            text: message
        });
    }

    if(campo_name.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo nome está vazio!");
        return;
    }
    
    if(campo_email.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo email está vazio!");
        return;
    }
    
    if(campo_senha.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo senha está vazio!");
        return;
    }
    
    if(campo_resumo.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo resumo está vazio!");
        return;
    }
    
    if(select_area.value === '') {
        event.preventDefault();
        showAlert("Selecione uma área!");
        return;
    }
    
    if(select_tempo.value === '') {
        event.preventDefault();
        showAlert("Selecione um tempo de experiência!");
        return;
    }
    
    if(campo_certificacoes.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo certificações está vazio!");
        return;
    }
    
    if(campo_celular.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo celular está vazio!");
        return;
    }
    
    if(campo_link.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo link está vazio!");
        return;
    }
});
