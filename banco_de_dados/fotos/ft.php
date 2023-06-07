<?php
include("conecta.php");
$nome = $_POST["name"];
$imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);

$comando = $pdo->prepare("SELECT COUNT(*) as total FROM foto WHERE nome = :nome");
$comando->bindParam(":nome", $nome);
$resultado = $comando->execute();
$total = $comando->fetchColumn();

if ($total > 0) {
    $comando = $pdo->prepare("DELETE FROM foto WHERE nome = :nome");
    $comando->bindParam(":nome", $nome);
    $resultado = $comando->execute();
}

$comando = $pdo->prepare("INSERT INTO foto (foto, nome) VALUES (:foto, :nome)");
$comando->bindParam(":foto", $imagem, PDO::PARAM_LOB);
$comando->bindParam(":nome", $nome);
$resultado = $comando->execute();

$comando = $pdo->prepare("SELECT * FROM foto WHERE nome = :nome");
$comando->bindParam(":nome", $nome);
$resultado = $comando->execute();

while ($linhas = $comando->fetch()) {
    $dados_imagem = $linhas["foto"];
    echo $linhas["nome"];
    $i = base64_encode($dados_imagem);
    echo("<br> <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
}
?>
