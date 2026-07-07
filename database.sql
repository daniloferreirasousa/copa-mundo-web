-- Cria o Banco de Dados
CREATE DATABASE copa_mundo;

-- Acessa o banco criado para executar comandos
USE copa_mundo;

-- Cria a tabela/entidade Estadio
CREATE TABLE Estadio (
	id_estadio INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    capacidade INT
);

-- Cria a tabela/entidade Selecao
CREATE TABLE Selecao (
	id_selecao INT AUTO_INCREMENT PRIMARY KEY,
    pais VARCHAR(50) NOT NULL,
    tecnico VARCHAR(100) NOT NULL,
    grupo CHAR(1)
);

-- Cria a tabela/entidade Jogador
CREATE TABLE Jogador (
	id_jogador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    numero_camisa INT,
    posicao VARCHAR(30),
    id_selecao INT,
    FOREIGN KEY (id_selecao) REFERENCES Selecao(id_selecao)
);


-- Cria a tabela/entidade Partida
CREATE TABLE Partida (
	id_partida INT AUTO_INCREMENT PRIMARY KEY,
    data_jogo DATETIME NOT NULL,
    id_estadio INT,
    id_selecao_mandante INT,
    id_selecao_visitante INT,
    FOREIGN KEY (id_estadio) REFERENCES Estadio(id_estadio),
    FOREIGN KEY (id_selecao_mandante) REFERENCES Selecao(id_selecao),
    FOREIGN KEY (id_selecao_visitante) REFERENCES Selecao(id_selecao)
);

-- Inserindo os registros para validação
INSERT INTO Estadio (nome, cidade, capacidade) VALUES ('Maracanã', 'Rio de Janeiro', 78838);

INSERT INTO Selecao (pais, tecnico, grupo) VALUES ('Brasil', 'Carlo Ancelotti', 'C');

INSERT INTO Selecao (pais, tecnico, grupo) VALUES ('Argentina', 'Lionel Scaloni', 'G');

-- Vinculando jogadores às chaves estrangeiras corretas
INSERT INTO Jogador (nome, numero_camisa, posicao, id_selecao) VALUES ('Vinícius Junior', 7, 'Atacante', 1);

INSERT INTO Jogador (nome, numero_camisa, posicao, id_selecao) VALUES ('Lionel Messi', 10, 'Atacante', 2);

-- Criando o registro d primeira partida
INSERT INTO Partida (data_jogo, id_estadio, id_selecao_mandante, id_selecao_visitante) VALUES 
('2026-07-15 16:00:00', 1, 1, 2);

-- Seleciona os dados cadastrados, e usa o JOIN
SELECT 
	Jogador.nome AS nome_jogador,
    Selecao.pais AS pais_da_selecao
FROM Jogador
JOIN Selecao ON Jogador.id_selecao = Selecao.id_selecao;

USE copa_mundo;
-- Cria a tabela Cartao
CREATE TABLE Cartao (
	id_cartao INT AUTO_INCREMENT PRIMARY KEY,
    cor_cartao VARCHAR(30) NOT NULL,
    minuto_jogo INT,
    id_jogador INT,
    FOREIGN KEY (id_jogador) REFERENCES Jogador(id_jogador)
);

INSERT INTO Cartao (cor_cartao, minuto_jogo, id_jogador) VALUES ('Amarelo', 35, 1);


CREATE TABLE Jogador_Telefone (
	id_telefone INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(20) NOT NULL,
    id_jogador INT,
    FOREIGN KEY (id_jogador) REFERENCES Jogador(id_jogador)
);

INSERT INTO Jogador_Telefone (numero, id_jogador) VALUES ('11-9999-0000', 1);
INSERT INTO Jogador_Telefone (numero, id_jogador) VALUES ('11-9888-1111', 1);


SELECT 
	Jogador.nome AS nome_jogador,
    Selecao.pais AS pais_da_selecao,
    Cartao.cor_cartao AS cartao_recebido,
    Cartao.minuto_jogo AS minutos_jogo,
    Escalacao.minutos_jogados
FROM Jogador
JOIN Selecao ON Jogador.id_selecao = Selecao.id_selecao
JOIN Cartao ON Jogador.id_jogador = Cartao.id_jogador
JOIN Escalacao ON Jogador.id_jogador = Escalacao.id_jogador;
    
    
-- CREATE TABLE Escalacao_FALHA (
--	  id_partida int,
--    id_jogador int,
--    minutos_jogados int,
--    nome_jogador VARCHAR(100),
--    PRIMARY KEY (id_partida, id_jogador)
-- );


CREATE TABLE Escalacao (
	id_partida INT,
    id_jogador INT,
    minutos_jogados INT,
    PRIMARY KEY (id_partida, id_jogador),
    FOREIGN KEY (id_partida) REFERENCES Partida(id_partida),
    FOREIGN KEY (id_jogador) REFERENCES Jogador(id_jogador)
);


INSERT INTO Escalacao (id_partida, id_jogador, minutos_jogados) VALUES (1, 1, 90);


-- id_estadio (PK) | nome | cidade | capacidade


CREATE TABLE Localidade (
	id_localidade INT AUTO_INCREMENT PRIMARY KEY,
    cidade VARCHAR(100) NOT NULL,
    estado_pais VARCHAR(100) NOT NULL
);


INSERT INTO Localidade (cidade, estado_pais) VALUES ('Rio de Janeiro', 'RJ - Brasil');

INSERT INTO Localidade (cidade, estado_pais) VALUES ('Lusail', 'Catar');

 ALTER TABLE Estadio ADD COLUMN id_localidade INT;
 ALTER TABLE Estadio ADD FOREIGN KEY (id_localidade) REFERENCES Localidade(id_localidade);
 
 ALTER TABLE Estadio DROP COLUMN cidade;
 
 
 
 CREATE TABLE Torcedor (
	cfp VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
 );
 
 CREATE TABLE Ingresso (
	id_ingresso INT AUTO_INCREMENT PRIMARY KEY,
    setor VARCHAR(50) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    id_partida INT,
    cpf_torcedor VARCHAR(14),
    
    -- Chaves estrangeiras
    FOREIGN KEY (id_partida) REFERENCES Partida(id_partida),
    FOREIGN KEY (cpf_torcedor) REFERENCES Torcedor(cpf)
);


INSERT INTO Torcedor (cpf, nome, email) VALUES (
	'123.456.789-00', 'João Silva', 'joao@email.com'
);


INSERT INTO Ingresso (setor, preco, id_partida, cpf_torcedor) VALUES (
	'Arquibancada Norte', 350.00, 1, '123.456.789-00'
);


SELECT
	i.id_ingresso,
    t.nome AS Comprador,
    p.data_jogo,
    i.setor
FROM Ingresso AS i
JOIN Torcedor AS t ON i.cpf_torcedor = t.cpf
JOIN Partida AS p ON i.id_partida = p.id_partida;


USE copa_mundo;
SELECT
	e.nome AS estadio,
    e.capacidade,
	l.cidade,
    l.estado_pais
FROM Estadio e
INNER JOIN Localidade l ON e.id_localidade = l.id_localidade;


ALTER TABLE Selecao ADD Column titulos_mundias INT DEFAULT 0;

ALTER TABLE Selecao RENAME COLUMN titulos_mundias TO titulos_mundiais;

UPDATE Selecao SET titulos_mundiais = 3 WHERE id_selecao = 2;