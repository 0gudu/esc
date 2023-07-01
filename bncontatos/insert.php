<?php
$func = $_GET['func'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>

    <form action="edidte.php" class="dados" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

        <input type="hidden" value="<?php echo $func; ?>" name="type">
        <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
        
        Foto:<input type="file" name="imagem" id="foto" accept="image/*">
        Nome:<input type="text" id="nome" name="nome" maxlength="20">
        email:<input type="text" id="email" name="email" maxlength="20">
        Telefone:<input type="number" id="telefone" name="telesena" maxlength="20">

        <button type="submit">Concluir</button>
    </form>
    


</body>
<script>
    type = '<?php echo $func; ?>';

    
    function validateForm(x) {
        var nome = document.getElementById("nome").value;
        var foto = document.getElementById("foto").value;
        var telefone = document.getElementById("telefone").value;
        var email = document.getElementById("email").value;

        if (type == "add") {
            // Verificar se os campos estão preenchidos
            if (nome.trim() === "" || foto.trim() === "" || telefone.trim() === "" || email.trim() === "") {
                alert("Por favor, preencha todos os campos antes de concluir.");
                return false;
            }else {
                return true;
            }
        
    }
}
</script>


</html>