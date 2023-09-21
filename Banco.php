<?php 
    $endereco = 'localhost';
    $banco = 'teste01';
    $usuario = 'postgres';
    $senha = 'oojr9906';

try {
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados. <br/>";
    die($e->getMessage());
}


?>