<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Doc PHP</title>
</head>

<body>

<?php
    $nome = "Olá Mundo!";
    echo "<h1>$nome</h1>";
?>


<?php

   function media($nota1, $nota2, $nota3){
        $resultadoFinal = ($nota1 + $nota2 + $nota3) / 3;
        return $resultadoFinal;
   }
    echo "Média Aritimética = ";
    echo (media(8.9, 9.2, 7.4));

?>

<br><br><br>

<?php

   function mediaPonderada($nota1, $nota2, $nota3){
        $resultadoFinal = ($nota1*1 + $nota2*4 + $nota3*6) / 11;
        return $resultadoFinal;
   }
    echo "Média Ponderada = ";
    echo (mediaPonderada(8.9, 9.2, 7.4));

?>

   <script src="./js/scrip.js"></script>
</body>

</html>