<?php 
include("conecta.php");

$comando = $pdo->prepare("INSERT INTO foto(foto) values $_POST["ft"]");

$resultado = $comando->execute();

$comando = $pdo->prepare("SELECT * FROM foto");
$resultado = $comando->execute();
while( $linhas = $comando->fetch() )
{
    $dados_imagem = $linhas["foto"];
    $i = base64_encode($dados_imagem);

    echo(" <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
}

?>