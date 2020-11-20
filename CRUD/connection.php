<?php

// conectando php com o banco
$dsn = 'mysql:host=localhost;dbname=cadastro_formulario';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $ex) {
    echo 'Erro: '.$ex->getMessage();
}
