<?php 
    require "../Banco.php";
    date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno inserido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
        <div class="conteiner" style="width: 500px;margin: top 20px;;"> 
            <h4>Aluno inserido com sucesso.</h4>
            <?php 
                if (!empty($_POST)) {
                    // Dados chegando pelo metodo Post.
                    $nome= $_POST['nome'] ;
                    $data_nascimento= $_POST['data_nascimento'];
                    $cpf= $_POST['cpf'] ;
                    $telefone= $_POST['telefone'] ;
                    $whatsapp= $_POST['whatsapp'] ;
                    $curso_desejado= $_POST['curso_desejado'];
                    $data_cadastro= date('Y-m-d H:i:s') ;

                    try {
                        //comando para inserir os valores no BD
                        $sql = "INSERT INTO alunos
                                    (nome, data_nascimento, cpf, telefone, whatsapp, curso_desejado,data_cadastro)
                                VALUES
                                    (:nome, :data_nascimento, :cpf, :telefone, :whatsapp, :curso_desejado, :data_cadastro)";

                        $stmt = $pdo->prepare($sql); 
                        
                        //passando os valores
                        $dados = array(
                            ':nome' => $nome,
                            ':data_nascimento' => $data_nascimento,
                            ':cpf' => $cpf,
                            ':telefone' => $telefone,
                            ':whatsapp' => $whatsapp,
                            ':curso_desejado' => $curso_desejado,
                            ':data_cadastro' => $data_cadastro
                        );

                        //Caso passe os valores retorna para a pagina inicial.
                        if ($stmt->execute($dados)) {
                            header("Location: ../index.php?msgSucesso=Cadastro realizado com sucesso!");
                        }
                    } catch (PDOException $e) {
                        //caso dê erro entra no catch

                        // die($e->getMessage());
                        header("Location: ../index.php?msgErro=Falha ao cadastrar");
                    }
                }else{

                    //Caso não adicione retorna pro index.
                    header("Location: ../index.php?msgErro=Erro de cadastro"); 
                }
            ?>
        </div>
        <div>
            <a href="#" role="button" class="btn btn-primary"> Cadastrar novo aluno</a>
            <a href="./aluno_list.php" role="button" class="btn btn-secondary"> Listagem de aluno</a>
        </div>
</body>
</html>