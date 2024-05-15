<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber POST</title>
</head>
<body>


    <?php /*
        if(isset($_POST['nomeUsuario'])) {
            $nome = $_POST['nomeUsuario'];
            $senha = $_POST['senhaUsuario'];
            echo "$nome,<br> a senha '$senha' é ridícula.";
        }*/
    ?>

<?php
        if(isset($_POST['idade'])) {
            $idade = $_POST['idade'];

            if($idade >= 18){
                echo "O senhor já pode iniciar processo de habilitação!";
            } else{
                echo "Aguarde a maioridade!";
            }
 
        }
    ?>







</body>
</html>