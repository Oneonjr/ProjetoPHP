-- Database: teste01

-- DROP DATABASE IF EXISTS teste01;

CREATE DATABASE teste01
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;
	
	
CREATE TABLE alunos (
    id serial PRIMARY KEY,
    nome varchar(255) NOT NULL,
    data_de_nascimento date,
    cpf numeric(11, 0),
    telefone numeric(11, 0),
    numero_do_whatsapp numeric(11, 0),
    curso_que_deseja varchar(255),
    data_e_hora_do_cadastro timestamp DEFAULT current_timestamp
);
	