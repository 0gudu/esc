<?php 
include("conecta.php");
$cu = 0;

if(isset($_POST['type'])){
    $type = $_POST['type'];
}else {
    $type = $_GET['func'];
}

if ($type == "add") {

    $imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telesena"];

    $comando = $pdo->prepare("INSERT INTO contato (nome, email, telefone, imagem) VALUES (:nome, :email, :telefone, :foto)");
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":email", $email);
    $comando->bindParam(":telefone", $telefone);
$comando->bindParam(":foto", $imagem, PDO::PARAM_LOB);

$resultado = $comando->execute();
header("location: index.php");

    
}else if ($type == "edit") {
    $nomea = $_POST['id'];
    if(isset($_FILES['imagem']['tmp_name']) && !empty($_FILES['imagem']['tmp_name'])) {
        $imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);


    $comando = $pdo->prepare("UPDATE contato SET imagem = :foto where id = :nome");
    $comando->bindParam(":foto", $imagem, PDO::PARAM_LOB);
    $comando->bindParam(":nome", $nomea);
    $resultado = $comando->execute();
    }
    

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        if ($nome != ""){
            $comando = $pdo->prepare("UPDATE contato SET nome = :nome WHERE id = :nomes");
            $comando->bindParam(":nome", $nome);
            $comando->bindParam(":nomes", $nomea);
            $resultado = $comando->execute();
        }
        
        
    }
    if(isset($_POST['email'])){
        $nome = $_POST['email'];
        if ($nome != ""){
            $comando = $pdo->prepare("UPDATE contato SET email = :nome WHERE id = :nomes");
            $comando->bindParam(":nome", $nome);
            $comando->bindParam(":nomes", $nomea);
            $resultado = $comando->execute();
        }
        
        
    }
    if(isset($_POST['telesena'])){
        $nome = $_POST['telecena'];
        if ($nome != ""){
            $comando = $pdo->prepare("UPDATE contato SET telecena = :nome WHERE id = :nomes");
            $comando->bindParam(":nome", $nome);
            $comando->bindParam(":nomes", $nomea);
            $resultado = $comando->execute();
        }
        
        
    }
    header("location: index.php");
}else {
    $comando = $pdo->prepare("DELETE FROM contato WHERE id = :id");
    $comando->bindParam(":id", $_GET['id']);
    $resultado = $comando->execute();
    header("location: index.php");
}
?>