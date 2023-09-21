<?php 
    include "./Banco.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - JCL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
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

        <!-- Alerta caso dê certo -->
        <?php  if (!empty($_GET['msgErro'])) {?>  
        <div class="alert alert-warning" role="alert">
            <?php echo $_GET['msgErro'];?>
        </div>
        <?php }  ?>
        
        <!-- Alerta caso dê errado -->
        <?php  if (!empty($_GET['msgSucesso'])) {?>  
        <div class="alert alert-warning" role="alert">
            <?php echo $_GET['msgSucesso'];?>
        </div>
        <?php }  ?>

        <!-- Inicio do codigo HTML -->
        <div class="row"> 
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Adicionar Aluno</h5>
                        <p class="card-text">Cadastrar aluno no sistema</p>
                        <a href="./aluno/aluno-inserir.php" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i>Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Listagem de Alunos</h5>
                        <p class="card-text">Listar aluno cadastrados</p>
                        <a href="./aluno/aluno_list.php" class="btn btn-secondary"><i class="fa-solid fa-book"></i> Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Excluir Aluno</h5>
                        <p class="card-text">Excluir aluno cadastrados</p>
                        <a href="./aluno/aluno_apagar.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Excluir</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://kit.fontawesome.com/255d7ddd94.js" crossorigin="anonymous"></script>
</body>
</html>