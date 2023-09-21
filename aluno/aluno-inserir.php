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
                <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="Digite o nome !">
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNas" autocomplete="off" name="data_nascimento" value="1981-01-01">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="number" class="form-control" id="cpf" autocomplete="off" name="cpf">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="number" class="form-control" id="fone" autocomplete="off" name="telefone" >
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <input type="number" class="form-control" id="whats" autocomplete="off" name="whatsapp">            
            <div class="form-group">
                <label>Curso que deseja matricular</label>
                <input type="text" class="form-control" id="curso" autocomplete="off" name="curso_desejado" value="Digite o nome do cuso !">
            </div>
            
            <div style="text-align: right;">
                <button type="submit" name="enviardados" id="botao" class="btn btn-primary botao">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>