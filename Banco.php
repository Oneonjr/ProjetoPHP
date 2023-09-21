<?php 
    //dados da conexão com o Banco.
    $endereco = 'localhost';
    $banco = 'teste01';
    $usuario = 'postgres';
    $senha = 'oojr9906';

try {

    //Caso dê certo.

    $pdo = new PDO("pgsql:host=$endereco;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    
} catch (PDOException $e) {

    //Caso dê errado.
    echo "Erro ao conectar com o banco de dados. <br/>";
    die($e->getMessage());
}


?>