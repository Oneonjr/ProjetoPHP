<?php 
    include '../Banco.php';

    $id=$_POST['id']; // id passado pelo formulário via post.

    // var_dump($id); 


    //atribuindo os vlores passados pelo formulário para as variaveis.
    $nome=$_POST['nome'];
    $data_nascimento=$_POST['data_nascimento'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $whatsapp=$_POST['whatsapp'];
    $curso_desejado=$_POST['curso_desejado'];
    

    //comando para atualizar.
    $sql = "UPDATE alunos SET  nome=:nome, data_nascimento=:data_nascimento,cpf=:cpf,telefone=:telefone,whatsapp=:whatsapp,curso_desejado=:curso_desejado WHERE id=:id";

    $stmt = $pdo->prepare($sql);

    //atribuindo os novos dos para os campos para atualizar.
    $dadosatualizados = array(
        ':id' => (int)$id, 
        ':nome' => $nome,
        ':data_nascimento' => $data_nascimento,
        ':cpf' => $cpf,
        ':telefone' => $telefone,
        ':whatsapp' => $whatsapp,
        ':curso_desejado' => $curso_desejado
    );

    $stmt->execute($dadosatualizados);

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno atualizado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="conteiner" style="width: 500px;margin-top: 20px;">
        <h4>Aluno atualizado</h4>
    </div>
    <div>
    <a href="./aluno_list.php" role="button" class="btn btn-sm btn-secondary"> Listagem de Alunos</a>
    </div>
</body>
</html>