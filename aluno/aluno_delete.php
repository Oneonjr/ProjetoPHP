<?php 
  include '../Banco.php';

  $id = $_GET['id'];

  $sql = $pdo->prepare("DELETE FROM alunos WHERE id=?");
    
    $sql->execute(array($id));
        
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        #tamanhoConteiner{
            width: 600px;
        }
        #botão{
            background-color: #fec68d;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="conteiner" style="width: 500px;margin-top: 20px;">
        <h4>Aluno excluido !</h4> 
    </div>
    <a href="../index.php" role="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-house"></i> Home</a>
    
    <script src="https://kit.fontawesome.com/255d7ddd94.js" crossorigin="anonymous"></script>
</body>
</html>