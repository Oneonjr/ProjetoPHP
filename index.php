<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - JCL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #tamanhoConteiner{
            width: 500px;
        }
        #botão{
            background-color: #fec68d;
            color: #ffffff;
        }
    </style>

</head>
<body>
    <div class="conteiner" id="tamanhoConteiner" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Adicionar Aluno</h5>
                        <p class="card-text">Cadastrar aluno no sistema</p>
                        <a href="./aluno/aluno-inserir.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Listagem de Alunos</h5>
                        <p class="card-text">Listar aluno cadastrados</p>
                        <a href="./aluno/aluno_list.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div  class="conteiner" id="tamanhoConteiner" style="margin-top: 40px;">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Adicionar Curso</h5>
                        <p class="card-text">Cadastrar Curso </p>
                        <a href="./curso/curso_inserir.php" class="btn btn-info">Adicionar</a>
                    </div>
                </div>
            </div>
                
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Listagem de Curso</h5>
                        <p class="card-text">Listar Curso cadastrados</p>
                        <a href="./curso/curso_list.php" class="btn btn-info">Listar</a>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>