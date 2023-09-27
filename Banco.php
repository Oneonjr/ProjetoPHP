<?php 
    //dados da conexão com o Banco.
    $endereco = 'localhost'; //endereço do Banco.
    $banco = 'teste01'; //Nome do Banco.
    $usuario = 'postgres'; //Usuário.
    $senha = ''; //Adiciona aqui sua senha.

try {

    //Caso dê certo.

    $pdo = new PDO("pgsql:host=$endereco;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    
} catch (PDOException $e) {

    //Caso dê errado.
    echo "Erro ao conectar com o banco de dados. <br/>";
    die($e->getMessage());
}


?>
