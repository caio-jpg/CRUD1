🎮 CRUD de Clientes e Jogadores (CS2)

Painel administrativo simples para gerenciar clientes e jogadores de CS2, construído com PHP, MySQL e HTML/CSS.

💾 Banco de Dados
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(100) NOT NULL,
    patente VARCHAR(50),
    time VARCHAR(100),
    kd DECIMAL(4,2),
    pais VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

🛠️ Funcionalidades

Clientes: cadastrar, listar, alterar, excluir

Jogadores: cadastrar, listar, alterar, excluir

Interface: tabelas estilizadas, botões interativos, hover, cores escuras

🖥️ Arquivos principais
/admin
├─ clientes-*.php       # CRUD de clientes
├─ jogadores-*.php      # CRUD de jogadores
└─ config.inc.php       # Conexão com o banco

🚀 Rodando o projeto

Clone o projeto no htdocs do XAMPP

Crie o banco e as tabelas SQL acima

Configure config.inc.php:

<?php
$conexao = mysqli_connect("localhost","root","","projeto1") or die("Erro na conexão");
?>


Acesse no navegador:

http://localhost/projeto1_cs2/index.php e navegue entre as abas intuitivas de jogadores e clientes

🎨 Estilo Visual

Fundo escuro (#111) com texto amarelo (#FFD700)

Botões arredondados com hover

Tabelas com linhas alternadas e destaque ao passar o mouse

⚡ Melhorias Futuras

Upload de avatar para jogadores


🖇️ Autor

Caio Vinicius – Projeto de CRUD em PHP/MySQL
