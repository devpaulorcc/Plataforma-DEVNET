<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/login.js') ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <title>DEV.NET - Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url('/') ?>">DEV.NET <i class="bi bi-boxes"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url('/cadastro') ?>"><i class="bi bi-person-plus-fill"></i> Novo perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= site_url('sair') ?>"><i class="bi bi-box-arrow-left"></i> Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Sua rede, sua oportunidade.</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-8 d-flex justify-content-center" style="padding-top: 100px;">
    <div class="card" style="width: 400px;">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Login</h2>
            <?= form_open('login_sb', array('class' => 'row g-3 needs-validation', 'novalidate' => '')) ?>
            <div class="col-12">
                <label for="validationCustom01" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="validationCustom01" name="emailTxt" required>
            </div>
            <div class="col-12">
                <label for="validationCustom02" class="form-label">Senha</label>
                <input type="password" class="form-control" id="validationCustom02" name="senhaTxt" required>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary mt-3" type="submit" id="subButton">Entrar</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

</body>
</html>
