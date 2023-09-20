<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="conteiner" style="margin-top: 40px;">
        <h3 style="padding-bottom: 40px;">Listagem de Alunos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Curso </th>
                    <th scope="col"> Ações</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td>TesteId</td>
                    <td>TesteNome</td>
                    <td>TesteData</td>
                    <td>TesteCPF</td>
                    <td>testeTel</td>
                    <td>testewhats</td>
                    <td>testecurso</td>
                    <td> 
                        <a class="btn btn-warning btn-sm" href="./aluno_edit.php" role="button"> Editar</a>
                        <a class="btn btn-danger btn-sm" href="./aluno_delete.php" role="button"> Excluir</a>
                    </td>

                </tr>
            </tbody>
        </table>

        <div style="text-align: right">
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Home</a>
      </div>
    </div><!-- final conteiner -->
</body>
</html>