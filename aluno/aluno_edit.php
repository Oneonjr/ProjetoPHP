<?php 
    include '../Banco.php';

    $id = $_GET['id']; //pegando o id passo via Get.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #tamanhoConteiner{
            width: 500px;
            justify-content: center;
        }
        #botão{
            background-color: #fec68d;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="conteiner" id="tamanhoConteiner" style="margin-top: 40px;">
        <h4>Formulário de edição</h4>
        <?php 

            //selecionando o usuario pelo id passado via GET.
            $sql = $pdo->prepare("SELECT * FROM alunos WHERE id=$id");

            $sql->execute();

            $info = $sql->fetchAll();

            //atribuindo os valores das tabelas as variaveis.
            foreach ($info as $key => $value) {
                $id = $value['id'];
                $nome = $value['nome'];
                $data_nascimento = $value['data_nascimento'];
                $cpf = $value['cpf'];
                $telefone = $value['telefone'];
                $whatsapp = $value['whatsapp'];
                $curso_desejado = $value['curso_desejado'];
            };
        ?>




        <form action="./aluno_update.php" method="post" style="margin-top: 20px;">

            <!-- pegando o id  para fazer a alteração no BD-->
            <input type="text" class="form-control" name="id" id="modelo" autocomplete="off" value="<?php echo $id?>" style="display: none;"> 

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="<?php echo $nome?>">
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNas" autocomplete="off" name="data_nascimento" value="<?php echo $data_nascimento ?>">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="number" class="form-control" id="cpf" autocomplete="off" name="cpf" value="<?php echo $cpf ?>">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="number" class="form-control" id="fone" autocomplete="off" name="telefone" value="<?php echo $telefone ?>">
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <input type="number" class="form-control" id="whats" autocomplete="off" name="whatsapp" value="<?php echo $whatsapp ?>">            
            <div class="form-group">
                <label>Curso que deseja matricular</label>
                <input type="text" class="form-control" id="curso" autocomplete="off" name="curso_desejado" value="<?php echo $curso_desejado ?>">
            </div>
            
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
            </div>
        </form>
    </div>
</body>
</html>