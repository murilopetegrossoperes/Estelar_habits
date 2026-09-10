# Estelar Habits 🚀

Plataforma full-stack projetada para a gestão diária de rotinas, com foco em usabilidade e acompanhamento de hábitos. 

Este projeto foi construído separando as responsabilidades entre uma API no backend e uma interface interativa no frontend, garantindo uma arquitetura limpa e escalável.

## 🛠️ Tecnologias Utilizadas

**Frontend:**
* [React](https://reactjs.org/) (com Vite)
* JavaScript / JSX
* CSS puro e TailwindCSS (via configuração Vite)

**Backend:**
* PHP (Vanilla / Orientação a Objetos)
* Arquitetura MVC (Controllers, Middlewares, API Endpoints)

**Banco de Dados:**
* MySQL
* PDO (PHP Data Objects) para conexões seguras

---

## 📂 Estrutura do Projeto

O repositório está dividido em duas partes principais:
* `/` (Raiz): Contém a API em PHP, os controladores, configurações de banco e middlewares de autenticação.
* `/habit_tracker_front/estelar-habits-web/`: Contém todo o código-fonte da aplicação React.

---

## ⚙️ Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina as seguintes ferramentas:
* Um servidor web local com PHP (como [XAMPP](https://www.apachefriends.org/pt_br/index.html), WAMP ou Laragon).
* [MySQL](https://www.mysql.com/) (Pode ser o embutido no XAMPP ou MySQL Server / Workbench).
* [Node.js e npm](https://nodejs.org/) (Para rodar o frontend React).
* [Git](https://git-scm.com/)

---

## 🚀 Instalação e Execução

Siga as etapas abaixo para rodar o projeto localmente:

### 1. Clonar o Repositório

### 2. Configurar o Banco de Dados
Abra o seu gerenciador MySQL (phpMyAdmin, DBeaver ou MySQL Workbench).

Crie um banco de dados chamado habit_tracker.

Importe o arquivo database.sql (ou schema.sql) localizado na raiz do projeto para criar todas as tabelas necessárias.

### 3. Configurar o Backend (PHP)
Abra o arquivo .env e preencha com as credenciais do seu banco de dados local:

```bash
DB_HOST=127.0.0.1
DB_NAME=habit_tracker
DB_USER=root
DB_PASS=sua_senha_aqui
```
Inicie o seu servidor Apache e certifique-se de que a raiz do servidor aponta para a pasta principal do repositório.

### 4. Configurar e Iniciar o Frontend (React)
Abra um novo terminal e navegue até a pasta do frontend para instalar as dependências e iniciar o servidor de desenvolvimento:

```bash
# Entrar na pasta do frontend
cd habit_tracker_front/estelar-habits-web

# Instalar as dependências do Node
npm install

# Iniciar o servidor local do Vite
npm run dev
```

### 5. Acessar a Aplicação
Após iniciar o servidor Vite, o terminal exibirá a URL local (geralmente http://localhost:5173). Clique no link para abrir a interface do projeto no navegador.
