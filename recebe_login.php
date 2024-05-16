<?php
    if(isset($_POST['userName'])){
        $usuario = $_POST['userName'];
        $senha = $_POST['senhaUsuario'];
        echo "Prezado $usuario, seu acesso foi liberado!";
    }


?>