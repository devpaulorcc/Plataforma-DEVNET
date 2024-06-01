<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .carousel-item img {
            height: 50vh;
            object-fit: cover;
        }
        .carousel {
            max-width: 100vw; 
            margin: auto; 
        }
        #number-count{
            font-size: 4em;
        }
    </style>
    <title>DEV.NET</title>
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
                <a class="nav-link" href="#" >Feed</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Perfil
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= site_url('seu_perfil') ?>"><i class="bi bi-person-circle"></i> Seu perfil</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('anunciando') ?>"><i class="bi bi-newspaper"></i> Anunciar</a></li>
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
              <input class="form-control me-2" type="search" placeholder="Busque por tecnologias" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </nav>
      
    <table class="table table-borderless">
        <tbody>
            <?php foreach($dados as $dado):?>
            <tr>
                <td>
                    <div class="card">
                      <div class="card-header">
                        <?= $dado->nome_criador ?>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?= $dado->titulo ?></h5>
                        <p class="card-text"><?= $dado->descricao ?></p>
                        <a href="https://wa.me/55<?=$dado->contatoWhats?>" class="btn btn-primary">Entrar em contato</a>
                      </div>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
