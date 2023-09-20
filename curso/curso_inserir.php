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

        <form action="#" method="post" style="margin-top: 20px;">
            <input type="text" class="form-control" name="id" id="modelo" autocomplete="off" style="display: none;">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="Digite o nome !">
            </div>
            
            
            <div style="text-align: right;">
                <a href="./curso_insert.php" type="submit" id="botao" class="btn btn-info botao">Cadastrar</a>
            </div>
        </form>
    </div>
</body>
</html>