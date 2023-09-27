<?php 
    require "../Banco.php";
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
                    $idcurso = $_POST['idcurso'];
                    $data_cadastro= date('Y-m-d H:i:s') ;

                    
                    // Verificando se o CPF já existe
                    $consultar_cpf = "SELECT COUNT(*) FROM alunos WHERE cpf = :cpf";
                    $stmt = $pdo->prepare($consultar_cpf);
                    $stmt->bindParam(':cpf', $cpf, PDO::PARAM_INT);
                    $stmt->execute();

                    $conferindo = $stmt->fetchColumn();

                    if ($conferindo > 0) {
                        //Se o CPF já esteja em uso
                        header("Location: ../index.php?msgErro=CPF já cadastrado no nomde de : $nome");
                    }else{
                        //Se não;

                        try {
                            //comando para inserir os valores no BD
                            $sql = "INSERT INTO alunos
                                        (nome, data_nascimento, cpf, telefone, whatsapp,data_cadastro, idcurso)
                                    VALUES
                                        (:nome, :data_nascimento, :cpf, :telefone, :whatsapp, :data_cadastro, :idcurso)";
    
                            $stmt = $pdo->prepare($sql); 
                            
                            //passando os valores
                            $dados = array(
                                ':nome' => $nome,
                                ':data_nascimento' => $data_nascimento,
                                ':cpf' => $cpf,
                                ':telefone' => $telefone,
                                ':whatsapp' => $whatsapp,
                                ':data_cadastro' => $data_cadastro,
                                ':idcurso'=> $idcurso
                            );
    
                            //Caso passe os valores retorna para a pagina inicial.
                            if ($stmt->execute($dados)) {
                                header("Location: ../index.php?msgSucesso=Cadastro realizado com sucesso!");
                            }
                        } catch (PDOException $e) {
                            //caso dê erro entra no catch e retorna para o Index.
                            // echo 'Erro ao adicionar <br>';
                            // die($e->getMessage());
                            
                            header("Location: ../index.php?msgErro=Erro ao cadastrar");
                        }
                    }

                    
                }else{

                    //Caso não adicione retorna pro index.
                    header("Location: ../index.php?msgErro=Algum erro no formulário"); 
                }

            ?>
        </div>
        <div>
            <a href="#" role="button" class="btn btn-primary"> Cadastrar novo aluno</a>
            <a href="./aluno_list.php" role="button" class="btn btn-secondary"> Listagem de aluno</a>
        </div>
</body>
</html>