-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-10-29 19:18:59.111

-- tables
-- Table: Clientes
CREATE TABLE Clientes (
    id int NOT NULL,
    nome varchar(100) NOT NULL,
    email varchar(50) NOT NULL,
    rg varchar(50) NOT NULL,
    cpf varchar(17) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(20) NOT NULL,
    CONSTRAINT Clientes_pk PRIMARY KEY (id)
);

-- Table: Lista
CREATE TABLE Lista (
    id int NOT NULL,
    quantidade real(10,5) NOT NULL,
    orcamento_id int NOT NULL,
    produtos_id int NOT NULL,
    CONSTRAINT Lista_pk PRIMARY KEY (id)
);

-- Table: Orcamento
CREATE TABLE Orcamento (
    id int NOT NULL,
    data varchar(20) NOT NULL,
    validade varchar(20) NOT NULL,
    preco_total real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    clientes_id int NOT NULL,
    usuarios_id int NOT NULL,
    CONSTRAINT Orcamento_pk PRIMARY KEY (id)
);

-- Table: Pagamentos
CREATE TABLE Pagamentos (
    id int NOT NULL,
    data varchar(10) NOT NULL,
    valor real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    forma_pagamento varchar(100) NOT NULL,
    usuarios_id int NOT NULL,
    clientes_id int NOT NULL,
    CONSTRAINT Pagamentos_pk PRIMARY KEY (id)
);

-- Table: Produtos
CREATE TABLE Produtos (
    id int NOT NULL,
    nome varchar(100) NOT NULL,
    serie varchar(100) NOT NULL,
    lote varchar(100) NOT NULL,
    tipo varchar(100) NOT NULL,
    fornecedor varchar(100) NOT NULL,
    preco_compra real(10,5) NOT NULL,
    preco_venda real(10,5) NOT NULL,
    quantidade real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    CONSTRAINT Produtos_pk PRIMARY KEY (id)
);

-- Table: Usuarios
CREATE TABLE Usuarios (
    id int NOT NULL,
    nome varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    cpf varchar(17) NOT NULL,
    endereco varchar(150) NOT NULL,
    CONSTRAINT Usuarios_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Lista_Orcamento (table: Lista)
ALTER TABLE Lista ADD CONSTRAINT Lista_Orcamento FOREIGN KEY Lista_Orcamento (orcamento_id)
    REFERENCES Orcamento (id);

-- Reference: Lista_Produtos (table: Lista)
ALTER TABLE Lista ADD CONSTRAINT Lista_Produtos FOREIGN KEY Lista_Produtos (produtos_id)
    REFERENCES Produtos (id);

-- Reference: Orcamento_Clientes (table: Orcamento)
ALTER TABLE Orcamento ADD CONSTRAINT Orcamento_Clientes FOREIGN KEY Orcamento_Clientes (clientes_id)
    REFERENCES Clientes (id);

-- Reference: Orcamento_Usuarios (table: Orcamento)
ALTER TABLE Orcamento ADD CONSTRAINT Orcamento_Usuarios FOREIGN KEY Orcamento_Usuarios (usuarios_id)
    REFERENCES Usuarios (id);

-- Reference: Pagamentos_Clientes (table: Pagamentos)
ALTER TABLE Pagamentos ADD CONSTRAINT Pagamentos_Clientes FOREIGN KEY Pagamentos_Clientes (clientes_id)
    REFERENCES Clientes (id);

-- Reference: Pagamentos_Usuarios (table: Pagamentos)
ALTER TABLE Pagamentos ADD CONSTRAINT Pagamentos_Usuarios FOREIGN KEY Pagamentos_Usuarios (usuarios_id)
    REFERENCES Usuarios (id);

-- End of file.

