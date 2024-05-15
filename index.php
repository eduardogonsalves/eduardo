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

    /*
    $nome = "Eduardo";
    $end = "Av. Sapé";
    $cep = 58038381;
    $cidade = "João Pessoa";
    $idade = 38;
    
    echo "$nome, o Sr. tem $idade anos, mora na $end, em $cidade";
    

    $bairros = array("Tambaú", "Manaíra", "Cabo Branco", "Bessa", "Ipês", "Torre", "Aeroclube", "Mandacaru", "Róger", "Mangabeira", "Bancários");
    $bairros[3] = "BessaBessa";    
    foreach($bairros as $bairro){
    echo "$bairro <br>";
    
    }
    
    for($x = 1; $x <=10; $x++){
        $resultado = $x*2;
        echo "2 x $x = $resultado <br>";
    }

    echo "<br>";

    for($x = 1; $x <=10; $x++){
        $resultado = $x*6;
        echo "6 x $x = $resultado <br>";
    }

    echo "<br>";

    for($x = 1; $x <=10; $x++){
        $resultado = $x*8;
        echo "8 x $x = $resultado <br>";
    }

    echo "<br>";

    for($x = 1; $x <=10; $x++){
        $resultado = $x*9;
        echo "9 x $x = $resultado <br>";
    }


    // Exercício 01
    $a = 10;
    $b = 15;
    $soma = $a + $b;
    echo "Resultado 1: " . $soma*$a;
    echo "<br>";

    // Exercício 02
    $n1 = 7;
    $n2 = 5;
    $n3 = 6;
    $media = ($n1 + $n2 + $n3) / 3;
    echo "Resultado 2: " . $media;
    echo "<br>";


    // Exercício 03
    $x = 100;
    $y = ($x / 100)* 15;
    echo "Resultado 3: " . $y;
    echo "<br>";


    // Exercício 04
    $x = 100;
    $y = ($x / 100)* 5;
    $z = ($x / 100)* 50;
    echo "Resultado 4: Para $x, o resultado é " . $y . " e " . $z . " respectivamente.";
    echo "<br>";


    // Exercício 05
    $x = 15;
    if($x < 0){
        echo "Resultado 5: Para valor digitado(15) - Valor Negativo";
    } else if($x = 0){
        echo "Resultado 5: Para valor digitado(15) - Igual a zero";
    } else {
        echo "Resultado 5: Para valor digitado(15) - Valor Positivo";
    }
    echo "<br>";


    // Exercício 06
    echo "Resultado 6:";
    echo "<br>";
    for($x = 1; $x <= 10; $x++){
        $resultado = $x*4;
        echo "4 x $x = $resultado <br>";
    }
    echo "<br>";


    // Exercício 07
    echo "Resultado 7:";
    echo "<br>";
    $x = 7;
    if(($x % 2) > 0){
        echo "Para $x a resposta é par";
    } else{
        echo "Para $x a resposta é impar";
    }
    echo "<br>";


    // Exercício 08
    echo "Resultado 8: para a=9 e b=6";
    echo "<br>";
    $a = 6;
    $b = 6;
    if($a > $b){
        echo $b . " " . $a;
    } else if ($a = $b){
        echo "Iguais";
    }
    else{
        echo $a . " " . $b;
    }
    echo "<br>";


    // Exercício 09
    echo "Resultado 9: para a=8 e b=3";
    echo "<br>";
    $a = 8;
    $b = 3;
    if($a > $b){
        echo "$a maior que $b";
    } else{
        echo "$a menor que $b";
    }
    echo "<br>";


    // Exercício 10
    echo "Resultado 10: Para nome: Eduardo e idade:38";
    echo "<br>";
    $nome = "Eduardo";
    $idade = 38;
    if($idade >= 18){
        echo "$nome é maior que 18 e tem $idade anos";
    } else{
        echo "$nome é menor que 18 e tem $idade anos";
    }
    */

?>
        <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color:blue;">Formulário</h1>
        <form action="receber_post.php" method="POST">
            <input style="border: 2px solid blue; border-radius: 12px" type="text" name="campoNome" placeholder="Digite seu nome">
            <input style="border: 2px solid blue; border-radius: 12px" type="text" name="campoIdade" placeholder="Digite sua idade">
            <button  style="border-radius: 20px; border: 2px solid orange; background-color: blue; color: white;" type="submit">Enviar</button>
        </form>




   <script src="./js/scrip.js"></script>
</body>

</html>