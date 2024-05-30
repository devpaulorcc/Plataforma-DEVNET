const btn = document.getElementById('anunciarSb');

btn.addEventListener('click', function(event){
        const tituloAnuncio = document.getElementById('tituloAnuncio');
        const tipoProjeto = document.getElementById('tipoProjeto');
        const descricao = document.getElementById('descricao');
        const tecnologias = document.getElementById('tecnologias');
        const numeroWhatsapp = document.getElementById('numeroWhatsapp');
        
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

        if(tituloAnuncio.value.trim() === '') {
            event.preventDefault();
            console.log("Ops")
            showAlertAndResetField("O campo título do anúncio está vazio!", tituloAnuncio);
            return;
        }
        
        if(tipoProjeto.value === '') {
            event.preventDefault();
            showAlertAndResetField("Selecione um tipo de projeto!", tipoProjeto);
            return;
        }
        
        if(descricao.value.trim() === '' || descricao.value.length > 255) {
            event.preventDefault();
            showAlertAndResetField("O campo descrição está vazio ou excede 255 caracteres!", descricao);
            return;
        }
        
        if(tecnologias.value.trim() === '') {
            event.preventDefault();
            showAlertAndResetField("O campo tecnologias está vazio!", tecnologias);
            return;
        }
        
        if(!validatePhoneNumber(numeroWhatsapp.value.trim())) {
            event.preventDefault();
            showAlertAndResetField("O campo número WhatsApp é inválido! Por favor, remova todos os espaços, caracteres especiais e/ou adicione seu DD.", numeroWhatsapp);
            return;
        }
    });

    function validatePhoneNumber(phone) {
        const re = /^(\+\d{1,3})?\d{10,15}$/;

        return re.test(phone);
    }
