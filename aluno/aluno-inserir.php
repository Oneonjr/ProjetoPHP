<?php 
    include "../Banco.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
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
        <h4>Formulário de Cadastro</h4>

        <form action="./aluno_insert.php" method="POST" style="margin-top: 20px;">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" required>
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" autocomplete="off" name="data_nascimento" value="1981-01-01" required>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control" id="cpf" autocomplete="off" name="cpf"
                required>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" id="telefone" autocomplete="off" name="telefone" required>
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <input type="text" class="form-control" id="whatsapp" autocomplete="off" name="whatsapp" required>            
            <!-- <div class="form-group">
                <label>Curso que deseja matricular</label>
                <input type="text" class="form-control" id="curso_desejado" autocomplete="off" name="curso_desejado"  required>
            </div> -->

            <br>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required name="idcurso">
                <option value="">Selecione uma opção</option>
                <?php 
                    //selecionando o id e nome do curso da tabela cursos e ordenando.
                    $sql = $pdo->prepare("SELECT id,nome_curso FROM cursos ORDER BY nome_curso ASC");

                    $sql->execute();

                    $dadoscurso = $sql->fetchAll();

                    // print_r($dadoscurso);

                    foreach ($dadoscurso as $key => $value) {
                    //mostrando os valores.    
                ?>
                    
                    <option value="<?php echo $value['id']?>"><?php echo $value['nome_curso'];?></option>
                <?php 
                    }
                ?>
                
            </select>
            
            <div style="text-align: right;">
                <button type="submit" name="enviardados" id="botao" class="btn btn-primary botao">Cadastrar</button>
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
</html>