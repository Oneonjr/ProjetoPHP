# ProjetoPHP
O desafio deste projeto seria construir um sistema simples para o cadastro de alunos, sendo que a página inicial precisa ter 3 links:

✔️ Cadastrar um aluno e associá-lo a um curso.

✔️ Listar alunos cadastrados.

✔️ Excluir alunos.

Conseguir criar um CRUD onde é possível fazer tudo que foi pedido.

# Como testar na sua maquina.
1º precisa ter o XAMPP, PostgreSQL e uma IDE de sua preferência instalado e funcionando corretamente na sua máquina.

2º precisa criar um servidor local e acessar a pasta do projeto (vai inicar com o Index.html).

3º executar o script do banco de dados para criar as tabelas.

4º Verificar se as variáveis de conexão com o Banco de dados do Banco.php estão corretas.

5º Testar todos os links.

# A relação entre a tabela Aluno e Curso.

Foi criada uma tabela 'curso', com as colunas 'id' e 'nome_curso' para armazenar o curso desejado pelo aluno. Para garantir que o curso adicionado na coluna 'curso_desejado' fosse salvo na tabela 'curso', foi necessário criar um gatilho (trigger) para estabelecer essa relação.

Em resumo, cria um gatilho que, após cada inserção de um novo aluno na tabela "alunos", verifica se o curso desejado pelo aluno já existe na tabela "cursos". Se o curso não existir, ele será adicionado à tabela "cursos". Essa lógica visa manter a tabela de cursos atualizada com os cursos desejados pelos alunos.






# Tecnologias utilizadas.
php, PostgreSQL, Visual Studio Code.