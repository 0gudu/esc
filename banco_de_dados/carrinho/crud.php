
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - FOPPY ARCH</title>
    <link rel="stylesheet" href="administrador.css" /> 
</head>
<body>
   <div class="d0">
        <div class="d1">
            <div class="tits">
                <div class="titulo">
                    <div class="flop">
                        <a href="index.html"><img src="images/floppy_arch_title.png" width="100%"></a>
                    </div>
                    <div class="criar_conta">
                        <p ><b>➝ Administrador</b></p>    
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="d2">
        <div class="d222">
                <div class="cima">
                    <img class="foto_adm" src="images/adm.png" >
                    <p class="nome_adm">Administrador: <br>João Victor Ferreira </p>
                </div>
                <div class="cima2">
                    <a href="?" class="sair_alterar">← Sair</a>
                    <a href="?" class="sair_alterar">Editar perfil</a>
                </div>
                <hr class="hr1">
                    <p class="nome_adm">Perfis ➝</p>
                    <Button class="adicionar">Adicionar perfil</Button>
            </div>
            <hr class="hr2">
            <div class="d21" id="puta">
                <?php
                    include ("conecta.php");

                        $comando = $pdo->prepare("SELECT * FROM coisa"); 
                        $resultado = $comando->execute();

                        while( $linhas = $comando->fetch()) 
                            {
                                $m = $linhas["id_coisa"]; //nome da coluna xampp
                                $n = $linhas["item"];

                                echo('
                                
                                    <div class="perfil">
                                        <img class="fotos_perfis" src="images/jao.jpg">
                                        <div class="cimabaixo">
                                            <p class="nome_perfil">
                                                ' . $n . '
                                            </p>
                                            <div class="botoes_perfil">
                                                ' . $m . '
                                            </div>
                                            <div style="background-color:red; width:10%; height:10%;" onclick="Enviar(\'' . $m . '\')"></div>
                                        </div>
                                    </div>
                                    <hr class="hr3">
                                ');
                            }

                ?>
            </div>
            
            
        </div>
        
        
    </div>  
</body>
<script>
    function Enviar(codigo) {
        window.open("excluir.php?codigo="+codigo,"_self")
    }
    texto_menu.style.display="inline";
    menu.style.display="none";
    function ocultar()
    {
        texto_menu.style.display="none";
        menu.style.display="inline";
    }
    function aparecer()
    {
        texto_menu.style.display="inline";
        menu.style.display="none";
    }        
    function voltarPagina() 
    {
        window.history.back();
    }
</script>
</html>
