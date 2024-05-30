const btn = document.getElementById("subButton")

btn.addEventListener('click', function(event){
    const campo_email = document.getElementById("validationCustom01")
    const campo_senha = document.getElementById("validationCustom02")
    console.log('Aqui')
    if(campo_email.value.trim() === '') {
        event.preventDefault();
        Swal.fire({
            icon: "error",
            title: "Oops... Algo deu errado!",
            text: "O campo de e-mail não pode ficar vazio!"
        });
        campo_email.value = '';
        return;
    }
    
    if(campo_senha.value.trim() === '') {
        event.preventDefault();
        Swal.fire({
            icon: "error",
            title: "Oops... Algo deu errado!",
            text: "O campo de senha não pode ficar vazio!"
        });
        campo_senha.value = '';
        return;
    }
})