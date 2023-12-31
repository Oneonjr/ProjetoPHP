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
                // $curso_desejado = $value['curso_desejado'];
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
                <input type="text" class="form-control" id="cpf" autocomplete="off" name="cpf" value="<?php echo $cpf ?>" required>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" id="telefone" autocomplete="off" name="telefone" value="<?php echo $telefone ?>" required>
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <input type="text" class="form-control" id="whatsapp" autocomplete="off" name="whatsapp" value="<?php echo $whatsapp ?>" required>            
            <!-- <div class="form-group">
                <label>Curso que deseja matricular</label>
                <input type="text" class="form-control" id="curso" autocomplete="off" name="curso_desejado" value="">
            </div> -->
            <br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required name="idcurso">
                <option value="">Selecione uma opção</option>
                <?php 
                    $sql = $pdo->prepare("SELECT id,nome_curso FROM cursos ORDER BY nome_curso ASC");

                    $sql->execute();

                    $dadoscurso = $sql->fetchAll();

                    // print_r($dadoscurso);

                    foreach ($dadoscurso as $key => $value) {
                ?>
                    
                    <option value="<?php echo $value['id']?>"><?php echo $value['nome_curso'];?></option>
                <?php 
                    }
                ?>
                
            </select>
            
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>  <!--adicionando o jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js">//Adicionando a mask</script>
    <script>
        //utilizando a mask
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#telefone').mask('(00) 0 0000-0000');
        $('#whatsapp').mask('(00) 0 0000-0000');

    </script>
</body>
</html>