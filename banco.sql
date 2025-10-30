-- Banco de Dados do Projeto 1
-- Tabelas: clientes (existente) e jogadores (nova)

CREATE TABLE jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(100) NOT NULL,
    patente VARCHAR(50),
    time VARCHAR(100),
    kd DECIMAL(4,2),
    pais VARCHAR(50)
);
