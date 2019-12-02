-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-12-02 00:51:55.823

-- tables
-- Table: clientes
CREATE TABLE clientes (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    email varchar(50) NOT NULL,
    rg varchar(50) NOT NULL,
    cpf varchar(17) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(20) NOT NULL,
    CONSTRAINT clientes_pk PRIMARY KEY (id)
);

-- Table: lista
CREATE TABLE lista (
    id int NOT NULL AUTO_INCREMENT,
    quantidade real(10,5) NOT NULL,
    orcamento_id int NOT NULL,
    produtos_id int NOT NULL,
    CONSTRAINT lista_pk PRIMARY KEY (id)
);

-- Table: orcamento
CREATE TABLE orcamento (
    id int NOT NULL AUTO_INCREMENT,
    data varchar(20) NOT NULL,
    validade varchar(20) NOT NULL,
    preco_total real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    clientes_id int NOT NULL,
    usuarios_id int NOT NULL,
    CONSTRAINT orcamento_pk PRIMARY KEY (id)
);

-- Table: pagamentos
CREATE TABLE pagamentos (
    id int NOT NULL AUTO_INCREMENT,
    data varchar(10) NOT NULL,
    valor real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    forma_pagamento varchar(100) NOT NULL,
    usuarios_id int NOT NULL,
    clientes_id int NOT NULL,
    CONSTRAINT pagamentos_pk PRIMARY KEY (id)
);

-- Table: produtos
CREATE TABLE produtos (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    serie varchar(100) NOT NULL,
    lote varchar(100) NOT NULL,
    tipo varchar(100) NOT NULL,
    fornecedor varchar(100) NOT NULL,
    preco_compra real(10,5) NOT NULL,
    preco_venda real(10,5) NOT NULL,
    quantidade real(10,5) NOT NULL,
    obs varchar(1000) NULL,
    CONSTRAINT produtos_pk PRIMARY KEY (id)
);

-- Table: usuarios
CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    cpf varchar(17) NOT NULL,
    endereco varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    CONSTRAINT usuarios_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Lista_Orcamento (table: lista)
ALTER TABLE lista ADD CONSTRAINT Lista_Orcamento FOREIGN KEY Lista_Orcamento (orcamento_id)
    REFERENCES orcamento (id);

-- Reference: Lista_Produtos (table: lista)
ALTER TABLE lista ADD CONSTRAINT Lista_Produtos FOREIGN KEY Lista_Produtos (produtos_id)
    REFERENCES produtos (id);

-- Reference: Orcamento_Clientes (table: orcamento)
ALTER TABLE orcamento ADD CONSTRAINT Orcamento_Clientes FOREIGN KEY Orcamento_Clientes (clientes_id)
    REFERENCES clientes (id);

-- Reference: Orcamento_Usuarios (table: orcamento)
ALTER TABLE orcamento ADD CONSTRAINT Orcamento_Usuarios FOREIGN KEY Orcamento_Usuarios (usuarios_id)
    REFERENCES usuarios (id);

-- Reference: Pagamentos_Clientes (table: pagamentos)
ALTER TABLE pagamentos ADD CONSTRAINT Pagamentos_Clientes FOREIGN KEY Pagamentos_Clientes (clientes_id)
    REFERENCES clientes (id);

-- Reference: Pagamentos_Usuarios (table: pagamentos)
ALTER TABLE pagamentos ADD CONSTRAINT Pagamentos_Usuarios FOREIGN KEY Pagamentos_Usuarios (usuarios_id)
    REFERENCES usuarios (id);

-- End of file.

