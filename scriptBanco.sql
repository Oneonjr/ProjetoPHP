-- Database: teste01;

-- DROP DATABASE IF EXISTS teste01;


-- criação do banco de dados.
CREATE DATABASE teste01
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;


-- Criação da Tabela Alunos
CREATE TABLE alunos (
    id serial PRIMARY KEY,
    nome varchar(255) NOT NULL,
    data_nascimento date,
    cpf numeric(11, 0),
    telefone numeric(11, 0),
    whatsapp numeric(11, 0),
    curso_desejado varchar(255),
    data_cadastro timestamp DEFAULT current_timestamp
);

-- Criação da tabela Cursos
CREATE TABLE cursos (
    id SERIAL PRIMARY KEY,
    nome_curso VARCHAR(255) NOT NULL
);


-- inicio do trigger(gatilho).
CREATE OR REPLACE FUNCTION adicionar_curso() --criando função.
RETURNS TRIGGER AS $$ --inicio do gatilho
BEGIN
    -- Verifique se o curso já existe na tabela "cursos"
    IF NOT EXISTS (SELECT 1 FROM cursos WHERE nome_curso = NEW.curso_desejado) THEN
        -- Se o curso não existe, insira-o na tabela "cursos"
        INSERT INTO cursos (nome_curso) VALUES (NEW.curso_desejado);
    END IF;
    RETURN NEW;
END;
$$ LANGUAGE plpgsql; -- fim do gatilho.

CREATE TRIGGER trigger_adicionar_curso -- criando o gatilho.
AFTER INSERT ON alunos -- após inserir dados na tabela aluno
FOR EACH ROW -- gatilho sendo executato após inserção na tabela aluno.
EXECUTE FUNCTION adicionar_curso(); --executando a função.


