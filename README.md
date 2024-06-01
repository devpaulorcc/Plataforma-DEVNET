# Projeto-DEVNET
Uma plataforma para divulgar suas habilidades e receber oportunidades.

## Documentação de cores

| Cor               | Hexadecimal                                                |
| ----------------- | ---------------------------------------------------------------- |
| Cor mais escura       | ![#000000](https://via.placeholder.com/10/000000?text=+) #000000 |
| Cor Principal       | ![#0d6efd](https://via.placeholder.com/10/0d6efd?text=+) #0d6efd |
| Cor Secundária       | ![#EFEFEF](https://via.placeholder.com/10/EFEFEF?text=+) #EFEFEF |
| Cor mais clara       | ![#FFFFFF](https://via.placeholder.com/10/FFFFFF?text=+) #FFFFFF |

## Tecnologias

<div>
    <img src="https://cdn.simpleicons.org/html5/E34F26" height="40" alt="html5 logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/css3/1572B6" height="40" alt="css3 logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/bootstrap/7952B3" height="40" alt="bootstrap logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/javascript/F7DF1E" height="40" alt="javascript logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/php/777BB4" height="40" alt="php logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/codeigniter/EF4223" height="40" alt="codeigniter logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="40" alt="mysql logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/git/F05032" height="40" alt="git logo"  />
</div>

## Funcionalidades

- Login e cadastro
- Visualização de desenvolvedores
- Delete e edição de dados


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/devpaulo2077/Projeto-DEVNET.git
```

Entre no diretório do projeto

```bash
  cd .\DEVNET-SYSTEM\
```
Altere o arquivo "env" para ".env"

```bash
  Linux/Mac: mv env .env
  Windows: ren env .env
```


Configure os parâmetros do seu banco de dados no arquivo Database.php:
```bash
  public array $default = [
        'DSN'          => '',
        'hostname'     => 'host_da_sua_db',
        'username'     => 'username_da_sua_db',
        'password'     => 'password_da_sua_db',
        'database'     => 'nome_da_sua_db',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];
```


O projeto usa a seguinte estrutura para o banco de dados:

```bash
  CREATE TABLE usuario (
	id int(10) auto_increment primary key,
    email varchar(200),
    senha varchar(50),
    nome varchar(80),
    biografia varchar(255),
    tecnologia varchar(50),
    experiencia varchar(15),
    certificacoes varchar(255),
    celular varchar(11),
    rede_social varchar(255)
);

CREATE TABLE anuncio (
	id int(10) auto_increment primary key,
    id_usuarios int(10),
    nome_criador varchar(80),
    titulo varchar(100),
    tipo varchar(20),
    descricao varchar(255),
    tecnologias varchar(255),
    contatoWhats varchar(11),
	foreign key anuncio (id_usuarios) REFERENCES usuario(id)
);
```


## Padrão de Commit

- 📦 UPDATE - O arquivo foi atualizado

- ✏️ CREATE - O arquivo foi criado

- ❌ DELETE - O arquivo foi apagado

- 🛠️ FIX - O arquivo foi concertado

- 🕷️ BUG - O arquivo está apresentando bugs
