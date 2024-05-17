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

        <hr style="border: 2px solid orange;">

        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 01</h2>
          <h2>Cálculo da soma de dois números.</h2>
        <form method="GET">
            <label>Valor A</label>
            <input type="text" name="nA">
            <label>Valor B</label>
            <input type="text" name="nB">
            <button type="submit">Calcular</button>
            <p>
                <?php
                    if(isset($_GET['nA'])){
                        $valorA = $_GET['nA'];
                        $valorB = $_GET['nB'];
                        $soma = $valorA + $valorB;
                        echo "Resultado = $soma";
                    }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 02</h2>

        <h2>Deseja calcular sua média e saber se foi aprovado?</h2>
        <p>Digite suas notas nos campos abaixo.</p>

        <form method="POST">
            <label>Nota 01:</label>
            <input type="text" name="nota1">
            <label>Nota 02:</label>
            <input type="text" name="nota2">
            <label>Nota 03:</label>
            <input type="text" name="nota3">
            <button type="submit">Calcular</button>
            <p>
                <?php
                if(isset($_POST['nota1'])){
                    $n1 = $_POST['nota1'];
                    $n2 = $_POST['nota2'];
                    $n3 = $_POST['nota3'];
                    $media = ($n1 + $n2 + $n3) / 3;
                    if($media >= 7){
                        echo "Média = $media.Bom trabalho, o senhor foi aprovado!";
                    } else if($media >5){
                        echo "Precisa se esforçar mais, está em recuperação!";
                    } else {
                        echo "Infelizmente não foi desta vez, o senhor foi reprovado!";
                    }
                }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 03</h2>

        <h2>Cálculo de 15% de um valor fornecido.</h2>
        <form method="get">
            <label>Valor inicial</label><br>
            <input type="text" name="numero" placeholder="digite um valor">
            <button type="submit">Calcular</button>
            <p>
                <?php
                    if(isset($_GET['numero'])){
                        $numero = $_GET['numero'];
                        $percentual = $numero * 0.15;
                        echo "Resultado = $percentual";
                    }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 04</h2>

        <h2>Calculando 5% e 50% de um valor fornecido.</h2>
        <form method="POST">
            <label>Valor inicial</label><br>
            <input type="text" name="valor5" placeholder="digite um valor">
            <button type="submit">Calcular 5% </button><br>
            <p>
                <?php
                    if(isset($_POST['valor5'])){
                        $valor5 = $_POST['valor5'];
                        $perc5 = $valor5 * 0.05;
                        echo "Resultado = $perc5";
                    }
                ?>
            </p>
        </form>
        <form method="Post">
            <label>Valor inicial</label><br>
            <input type="text" name="valor50" placeholder="digite um valor">
            <button type="submit">Calcular 50%</button>            
            <p>
                <?php
                    if(isset($_POST['valor50'])){
                        $valor50 = $_POST['valor50'];
                        $perc50 = $valor50 * 0.5;
                        echo "Resultado = $perc50";
                    }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 05</h2>

        <h2>Identificação de número Positivo ou Negativo.</h2>
        <form method="GET">
            <label>Valor:</label>
            <input type="text" name="sinal" placeholder="digite um número">
            <button type="submit">Calcular</button>
            <p>
                <?php
                    if(isset($_GET['sinal'])){
                        $sinal = $_GET['sinal'];
                        if($sinal < 0){
                            echo "Negativo";
                        } else if($sinal == 0){
                            echo "Número igual a Zero";
                        } else{
                            echo "Positivo";
                        }
                    }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 06</h2>

        <h1 id="tabuada">Deseja aprender a tabuada de que número?</h1>
        <form method="GET">
            <label>Tabuada desejada:</label>
            <input type="text" name="tabuada">
            <a href="#tabuada"><button type="submit">Mostrar</button></a>
            <p>
                <?php
                    if(isset($_GET['tabuada'])){
                        $valor = $_GET['tabuada'];
                        for($i = 1; $i <=10; $i++){
                            $resultado = $i*$valor;
                            echo "$valor x $i = $resultado <br>";
                        }
                    }
                ?>
            </p>
        </form>

        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 07</h2>

        <h2>Descubra se um número é Par ou Impar?</h2>
        <form method="POST">
            <Label>Número</Label>
            <input type="text" name="parEimpar">
            <button type="submit">Mostrar</button>
            <p>
                <?php
                    if(isset($_POST['parEimpar'])){
                        $parEimpar = $_POST['parEimpar'];
                        if($parEimpar % 2 > 0){
                            echo "$parEimpar é Impar";
                        } else{
                            echo "$parEimpar é Par";
                        }
                    }               
                ?>
            </p>
        </form>
        <!--
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
        echo "<br>";-->
        <hr style="border: 2px solid orange;">
        <h2 style="background-color: orangered; color: greenyellow; text-align: center">Exercício 08</h2>
        <h2>Comparação de dois números inteiros(Postos em ordem crescente)</h2>
        <form method="GET">
            <label>Valor A</label>
            <input type="text" name="vA">
            <label>Valor B</label>
            <input type="text" name="vB">
            <button type="submit">Ordenar</button>
            <p>
                <?php
                    if(isset())

                ?>
            </p>
        </form>

   <script src="./js/scrip.js"></script>
</body>

</html>