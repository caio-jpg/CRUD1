-- Banco de Dados do Projeto 1
-- Tabelas: clientes e jogadores

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