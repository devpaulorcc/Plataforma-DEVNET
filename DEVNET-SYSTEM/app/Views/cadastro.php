<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/cadastro.js') ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <title>DEV.NET - Cadastro</title>
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

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">Cadastro</h2>
                <?= form_open('cadastro_sb', array('class' => 'row g-3 needs-validation', 'novalidate' => '')) ?>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="validationCustom01" name="nomeTxt" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="validationCustom02" name="emailTxt" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Senha</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">Use uma senha forte</span>
                        <input type="password" class="form-control" id="validationCustomUsername" name="senhaTxt" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Por favor, escolha uma senha.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Um resumo sobre você</label>
                    <input type="text" class="form-control" id="validationCustom03" name="bioTxt" required>
                    <div class="invalid-feedback">
                        Por favor, forneça um resumo sobre você.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Áreas de desenvolvimento</label>
                    <select class="form-select" id="validationCustom04" name="areaTxt" required>
                        <option selected disabled value="">Escolha...</option>
                        <option>Desenvolvimento Front-end</option>
                        <option>Desenvolvimento Back-end</option>
                        <option>Desenvolvimento de Jogos</option>
                        <option>Desenvolvimento Full-stack</option>
                        <option>Desenvolvimento Mobile</option>
                        <option>DevOps (Desenvolvimento e Operações)</option>
                        <option>Ciência de Dados e/ou Engenharia de Dados</option>
                        <option>Cibersegurança</option>
                        <option>Design de Interface do Usuário (UI) e/ou Experiência do Usuário (UX)</option>
                        <option>Inteligência Artificial (IA) e/ou Aprendizado de Máquina (ML)</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, selecione uma área válida.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04-2" class="form-label">Tempo que você atua na área?</label>
                    <select class="form-select" id="validationCustom04-2" name="tempoTxt" required>
                        <option selected disabled value="">Escolha...</option>
                        <option>Menos de 1 ano</option>
                        <option>Entre 1 a 2 anos</option>
                        <option>Entre 3 a 6 anos</option>
                        <option>Acima de 6 anos</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, selecione um tempo válido.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Suas certificações</label>
                    <input type="text" class="form-control" id="validationCustom05" name="certificacoesTxt" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Contato de celular</label>
                    <input type="tel" class="form-control" id="validationCustom06" name="contatoTxt" required>
                    <div class="valid-feedback">
                        Parece bom!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom07" class="form-label">Seu link do LinkedIn</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-globe"></i></span>
                        <input type="url" class="form-control" id="validationCustom07" name="linkedinTxt" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Por favor, forneça um link válido.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="subButton">Cadastrar</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</body>
</html>
