<?php

include 'connection.php';

// variaveis de entrada
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$uf = $_REQUEST['uf'];

// verificação se o cadastro já existe no banco
$select = $pdo->query("SELECT * FROM cadastro WHERE nome = '$nome' AND idade = '$idade' AND uf = '$uf'");
$result = $select->fetch();

// lógica para verificações das entradas
if($result == true){
    echo '<script> alert ("Usuário já possui cadastro!"); location.href=("index.html")</script>';
}else{
    $insert = $pdo->prepare("INSERT INTO cadastro (nome, idade, uf) values (?, ?, ?)");
    $insert->execute([$nome, $idade, $uf]);
    echo '<script> alert ("Cadastro efetivado com sucesso!"); location.href=("index.html")</script>';
}
?>