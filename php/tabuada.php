<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style>
        .verde {
            background-color: green;
        }
        .amarelo {
            background-color: yellow;
        }
    </style>
</head>
<body>

    <?php
        $nome = $_POST["nome"];
        echo("
            Exemplo de arquivo PHP
            <br>
            Meu nome é $nome
            ");
        $valor = $_POST["valor"];

        for($x=1;$x<=10;$x++)
        {
            if ($x%2 == 0){
                echo("<div class='verde'>");
            }
            else {
                echo("<div class='amarelo'>");
            }
            echo($valor*$x);
            echo(" </div> <br>");
        }

    ?>
</body>
</html>
