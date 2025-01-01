# ✨ Plataforma DEVNET ✨

Bem-vindo à **Plataforma DEVNET**, onde você pode divulgar suas habilidades e atrair oportunidades!

---

## ★ **Destaques do Projeto**

- 🔑 **Cadastro e Login**: Simples e seguro.
- 📚 **Perfis Personalizados**: Destaque suas habilidades e experiências.
- ⚙️ **Gestão de Dados**: Edite ou exclua suas informações a qualquer momento.
- 🔍 **Busca por Talentos**: Encontre outros desenvolvedores.

---

## 🔧 **Tecnologias Utilizadas**

- **Frontend:** HTML5, CSS3, Bootstrap, JavaScript.
- **Backend:** PHP, CodeIgniter.
- **Banco de Dados:** MySQL.
- **Controle de Versão:** Git.

---

## 🔬 **Cores do Projeto**

| Cor             | Hexadecimal |
|-----------------|-------------|
| Cor mais escura | `#000000`   |
| Cor principal   | `#0d6efd`   |
| Cor secundária  | `#EFEFEF`   |
| Cor mais clara  | `#FFFFFF`   |

---

## 🔼 **Como Executar Localmente**

### Passos Rápidos:

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/devpaulorcc/platform-devnet.git
   ```

2. **Acesse o diretório do projeto:**

   ```bash
   cd platform-devnet/DEVNET-SYSTEM
   ```

3. **Renomeie o arquivo `env` para `.env`:**

   - **Linux/Mac:**
     ```bash
     mv env .env
     ```
   - **Windows:**
     ```cmd
     ren env .env
     ```

4. **Configure os parâmetros do banco de dados no arquivo `Database.php`:**

   ```php
   public array $default = [
       'DSN'      => '',
       'hostname' => 'seu_host',
       'username' => 'seu_usuario',
       'password' => 'sua_senha',
       'database' => 'seu_banco_de_dados',
       'DBDriver' => 'MySQLi',
   ];
   ```

5. **Instale as dependências do Composer:**

   ```bash
   composer install
   ```

6. **Execute as migrações para criar as tabelas no banco de dados:**

   ```bash
   php spark migrate
   ```

7. **Inicie o servidor de desenvolvimento:**

   ```bash
   php spark serve
   ```

8. **Acesse a aplicação no navegador:**

   ```
   http://localhost:8080
   ```

---

## 🌐 **Estrutura do Projeto**

```
platform-devnet/
├── DEVNET-SYSTEM/
│   ├── app/
│   ├── public/
│   ├── writable/
│   ├── env
│   └── ...
├── README.md
└── ...
```

---

## ⚖️ **Licença**

Este projeto está licenciado sob a Licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

---

🚀 **Explore e conecte-se na Plataforma DEVNET!**
