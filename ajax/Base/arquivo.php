<?php

include("conecta.php");

$nome  = $_POST["nome"];  
$matri = $_POST["matricula"];

$empregados = [];  

$resposta = 
      [
         "nome"  => $nome,
         "matricula" => $matri
      ];

array_push($empregados, $resposta);
// Até aqui ficaria dentro do WHILE.

$comando = $pdo ->prepare("INSERT INTO alunos VALUES($matri,'$nome')");

    $resultado = $comando ->execute();


// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["empregados" => $empregados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>