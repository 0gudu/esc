<?php
include("conecta.php"); // Assuming this includes the database connection setup

$nome = $_POST["nome"];
$matri = $_POST["matricula"];

$comando = $pdo->prepare("INSERT INTO alunos VALUES($matri,'$nome')");
$resultado = $comando->execute();
?>
