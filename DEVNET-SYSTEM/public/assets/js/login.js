const btn = document.getElementById("subButton")

btn.addEventListener('click', function(event){
    const campo_email = document.getElementById("validationCustom01")
    const campo_senha = document.getElementById("validationCustom02")

    if(campo_email.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo e-mail está vazio!");
        return;
    }
    
    if(campo_senha.value.trim() === '') {
        event.preventDefault();
        showAlert("O campo senha está vazio!");
        return;
    }
})