<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <div class="d0">
        <div class="d01" onclick="abriradd('add')">

            + &nbsp Adicionar Contato


        </div>
        <div class="d02">
        <?php
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM contato");
$comando->execute();

$resultado = $comando->execute();

while ($linhas = $comando->fetch()) {
    $nome = $linhas['nome'];
    $email = $linhas['email'];
    $telefone = $linhas['telefone'];
    $foto = $linhas['imagem'];
    $id = $linhas['id'];
    $i = base64_encode($foto);
    echo '<div class="ddd">
    <div class="ddr">
        <div class="ft">
        <img src="data:image/jpeg;base64,' . $i . '" width="100%">
        </div>
        <div class="edit" onclick="abrir(\'edit\', ' . $id . ')">

            EDITAR
        </div>
        
    </div>
    <div class="dds">
        <div class="nome">
            ' . $nome . '
        </div>
        <hr>
        <div class="nome">
            ' . $email . '
        </div>
        <div class="nome">
            ' . $telefone . '
        </div>
        <div class="excluir" onclick="remover(' . $id . ')">
X
        </div>
    </div>
</div>';
}
?>

            
        </div>
    </div>
</body>
<script>
    function abrir(x,y) {
        window.open("insert.php?func=" + x + "&id=" + y, "_self");
    }
    function abriradd(x) {
        window.open("insert.php?func=" + x + "&id=26", "_self");
    }
    function excluir(x) {
        window.open("insert.php?func=" + x + "&id=26", "_self");
    }
    function remover(x){
        window.open("edidte.php?func=rem" + "&id=" + x , "_self");
    }
</script>

</html>