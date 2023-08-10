<?php
    include("conecta.php");
    //para pegar o texto dos inputs
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $comando = $pdo ->prepare("INSERT INTO alunos VALUES($matricula,'$nome',$idade)");

    $resultado = $comando ->execute();

    //para voltar no formulario:
    header("Location: cadastro.html")

?>