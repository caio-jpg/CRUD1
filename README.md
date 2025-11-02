🎮 CRUD de Clientes e Jogadores (CS2)

Painel administrativo para gerenciar clientes e jogadores de CS2.
Interface intuitiva, com tabelas estilizadas, botões interativos e cores escuras.

💾 Banco de Dados
Clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Jogadores
CREATE TABLE jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(100) NOT NULL,
    patente VARCHAR(50),
    time VARCHAR(100),
    kd DECIMAL(4,2),
    pais VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


✅ ENGINE=InnoDB garante transações seguras e integridade dos dados.

🛠️ Funcionalidades
Módulo	Funcionalidades
Clientes	Cadastrar, listar, alterar e excluir
Jogadores	Cadastrar, listar, alterar e excluir
Interface	Tabelas estilizadas, botões interativos, hover, cores escuras
🖥️ Estrutura de Arquivos
/admin
├─ clientes-*.php       # CRUD de clientes
├─ jogadores-*.php      # CRUD de jogadores
└─ config.inc.php       # Conexão com o banco

🚀 Como Rodar

Clone o projeto no htdocs do XAMPP:

git clone <seu-repo-aqui>


Crie o banco de dados e execute os comandos SQL acima

Configure config.inc.php:

<?php
$conexao = mysqli_connect("localhost", "root", "", "projeto1") 
    or die("Erro na conexão");
?>


Abra no navegador:
http://localhost/projeto1_cs2/index.php

🔹 Navegue entre as abas Clientes e Jogadores

🎨 Estilo Visual

Fundo escuro: #111

Texto em amarelo: #FFD700

Botões arredondados com efeito hover

Tabelas com linhas alternadas e destaque ao passar o mouse

⚡ Melhorias Futuras

Upload de avatar para jogadores

Busca e filtros nas tabelas

Paginação para grandes volumes de dados

Responsividade para mobile

🖇️ Autor

Caio Vinicius – Estudo de CRUD em PHP/MySQL
📍 Brasil
