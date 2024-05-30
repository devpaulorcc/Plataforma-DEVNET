<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="<?= base_url('assets/js/anunciar.js') ?>" defer></script>
    <title>DEV.NET - Anunciar</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('feed') ?>">Feed</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url('seu_perfil') ?>"><i class="bi bi-person-circle"></i> Seu perfil</a></li>
                            <li><a class="dropdown-item" href="<?= site_url('/cadastro') ?>"><i class="bi bi-person-plus-fill"></i> Novo perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= site_url('sair') ?>"><i class="bi bi-box-arrow-left"></i> Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true"><?= $nome ?></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busque por tecnologias" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4 d-flex justify-content-center" style="padding-top: 20px;">
        <div class="card" style="width: 400px;">
            <div class="card-body">
                <h2 class="card-title mb-4 text-center">Crie uma divulgação!</h2>
                <?= form_open('anunciar_sb', array('class' => 'row g-3 needs-validation', 'novalidate' => '')) ?>
                    <div class="form-group">
                        <label for="tituloAnuncio">Título do Anúncio</label>
                        <input type="text" class="form-control" id="tituloAnuncio" name="tituloAnuncio" placeholder="Digite o título do anúncio" required>
                        <div class="invalid-feedback">
                            Por favor, insira o título do anúncio.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipoProjeto">Tipo de Projeto</label>
                        <select class="form-control" id="tipoProjeto" name="tipoProjeto" required>
                            <option value="" disabled selected>Selecione o tipo de projeto</option>
                            <option>Divulgação</option>
                            <option>Venda de um Projeto</option>
                            <option>Vender Serviço</option>
                            <option>Doação</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione o tipo de projeto.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Digite a descrição do anúncio" required></textarea>
                        <div class="invalid-feedback">
                            Por favor, insira a descrição do anúncio.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tecnologias">Tecnologias</label>
                        <input type="text" class="form-control" id="tecnologias" name="tecnologias" placeholder="Digite as tecnologias utilizadas" required>
                        <div class="invalid-feedback">
                            Por favor, insira as tecnologias utilizadas.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numeroWhatsapp">Número WhatsApp</label>
                        <input type="text" class="form-control" id="numeroWhatsapp" name="numeroWhatsapp" placeholder="Digite o número WhatsApp" required>
                        <div class="invalid-feedback">
                            Por favor, insira o número WhatsApp.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="anunciarSb">Criar</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</body>
</html>
