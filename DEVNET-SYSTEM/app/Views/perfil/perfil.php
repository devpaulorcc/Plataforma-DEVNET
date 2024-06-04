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
    <title>DEV.NET - Perfil</title>
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
            <?= form_open('feedPesquisa', array('class' => 'd-flex', 'novalidate' => '')) ?>
              <input class="form-control me-2" type="search" name="campo-pesquisa" placeholder="Busque por tecnologias" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            <?= form_close()?>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center" style="padding: 20px;">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h2 class="card-title mb-4 text-center">Seu Perfil</h2>
                <?= form_open('atualizar', array('class' => 'row g-3 needs-validation', 'novalidate' => '')) ?>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>" required>
                        <div class="invalid-feedback">
                            Por favor, insira seu nome.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="biografia">Biografia</label>
                        <textarea class="form-control" id="biografia" name="biografia" rows="4" placeholder="Digite sua biografia" required><?= $biografia ?></textarea>
                        <div class="invalid-feedback">
                            Por favor, insira sua biografia.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" class="form-control" id="area" name="area" placeholder="Digite sua área de atuação"  value="<?= $area ?>" required>
                        <div class="invalid-feedback">
                            Por favor, insira sua área de atuação.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="experiencia">Experiência</label>
                        <input type="text" class="form-control" id="experiencia" name="experiencia" placeholder="Digite sua experiência"  value="<?= $experiencia ?>" required>
                        <div class="invalid-feedback">
                            Por favor, insira sua experiência.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite seu número de celular" value="<?= $numero ?>" required>
                        <div class="invalid-feedback">
                            Por favor, insira seu número de celular.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="redeSocial">Rede Social</label>
                        <input type="text" class="form-control" id="redeSocial" name="redeSocial" placeholder="Digite o link da sua rede social" value="<?= $rede_social ?>" required>
                        <div class="invalid-feedback">
                            Por favor, insira o link da sua rede social.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="<?=site_url('confirmacao_delete_perfil') ?>" class="btn btn-danger">Deletar perfil</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</body>
</html>
