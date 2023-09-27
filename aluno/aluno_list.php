
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
                    <?php 
                        include '../Banco.php';

                        //selecionando os dados da tabela aluno.
                        $sqlalunos = $pdo->prepare("SELECT alunos.*, cursos.nome_curso AS nomecurso
                        FROM alunos
                        JOIN cursos ON alunos.idcurso = cursos.id;"); // selecionando dados da tabela alunos e curso e juntando.

                        $sqlalunos->execute();

                        $infoalunos = $sqlalunos->fetchAll();

                        //exibindo cada aluno e seu curso cadastrado.
                        foreach ($infoalunos as $key => $value) {

                            echo'<tr>';
                            echo'<td>'.$value['id'].'</td>';
                            echo'<td>'.$value['nome'].'</td>';
                            echo'<td>'.$value['data_nascimento'].'</td>';
                            echo'<td>'.$value['cpf'].'</td>';
                            echo'<td>'.$value['telefone'].'</td>';
                            echo'<td>'.$value['whatsapp'].'</td>';
                            echo'<td>'.$value['nomecurso'].'</td>';
                            echo '<td> 
                                    <a class="btn btn-warning btn-sm" href="./aluno_edit.php?id='.$value['id'].'" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                </td>'; //passando id via get.
                            echo'</tr>';
                        }
                    ?>
                

                </tr>
            </tbody>
        </table>

        <div style="text-align: right">
        <a href="../index.php" role="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-house"></i> Home</a>
      </div>
    </div><!-- final conteiner -->

    <script src="https://kit.fontawesome.com/255d7ddd94.js" crossorigin="anonymous"></script>
</body>
</html>