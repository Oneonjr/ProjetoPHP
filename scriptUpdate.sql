-- mudanças para criar uma conexão entre a tabela alunos e cursos. 


--Remover o Trigger:
DROP TRIGGER IF EXISTS trigger_adicionar_curso ON alunos;


-- adicionando a coluna idcurso na tabela alunos.
ALTER TABLE alunos
ADD COLUMN idcurso INT;


-- criando a interação entre as tabelas alunos e cursos, através da chave estrangeira.
ALTER TABLE alunos
ADD CONSTRAINT fk_alunos_curso 
FOREIGN KEY (idcurso)
REFERENCES cursos(id);


--fazendo com que a coluna idcurso não possa ser nula.
--pode precisar adiconar os valores na tabela alunos antes.
ALTER TABLE alunos
ALTER COLUMN idcurso SET NOT NULL;


--atualizando as colunas cpf, telefone e whatsapp da tabela alunos para receber os dados do formulário com jquery mask.
BEGIN;

ALTER TABLE public.alunos
ALTER COLUMN cpf TYPE varchar(255);
ALTER TABLE public.alunos
ALTER COLUMN telefone TYPE varchar(255);
ALTER TABLE public.alunos
ALTER COLUMN whatsapp TYPE varchar(255);
-- Confirmar a transação
COMMIT;


--Fazendo com que a coluna cpf da tabela alunos seja unica e não aceite valores iguais.
ALTER TABLE public.alunos ADD CONSTRAINT alunos_un UNIQUE (cpf);
-- fazendo com que não aceite valores nulos.
ALTER TABLE alunos
ALTER COLUMN cpf SET NOT NULL;


--alterando o nome dos cursos da tabela cursos.
UPDATE public.cursos SET
nome_curso = 'Administração'::character varying WHERE 
id = 1;
UPDATE public.cursos SET
nome_curso = 'Tecnologia'::character varying WHERE 
id = 2;
UPDATE public.cursos SET
nome_curso = 'Saúde'::character varying WHERE 
id = 3;