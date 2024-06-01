<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de confirmação</title>
<link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header bg-danger text-white">
                    <h3>Tem certeza que deseja deletar o seu perfil na plataforma?</h3>
                </div>
                <div class="card-body">
                    <h4>Essa ação é irreversível!!!</h4>
                    
                    <a href="<?= site_url('deletando_perfil') ?>" class="btn btn-danger">Deletar perfil</a>
                    <a href="<?= site_url('seu_perfil') ?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
