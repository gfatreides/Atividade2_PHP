<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐘 Segunda Atividade: PHP</title>
    <link rel="stylesheet" href="Atividade2PHP.css">
</head>
<body>
    <header>
    <h2 id="titulo"> SENAI/DESENVOLVIMENTO DE SISTEMAS - ATIVIDADE 2: 🐘 PHP</h2>;
    </header>

    <main id="margem">
        <br>
        <br>
        <?php 
            //EXERCÍCIO 9
            echo "<h4><p>
            9) Escreva um programa que imprima os números de Fibonacci até um valor fornecido pelo usuário.</p></h4>";

            echo "Número fornecido pelo usuário: 10. <br\n>";
            echo "Sequência gerada: ";

            $n = 10;
            $atual = 1;             //Recebe o termo atual (segundo termo).
            $anterior = 0;          //Recebe o primeiro termo.
            $resultado = 0;         //Recebe o terceiro termo (atual + anterior).
            //Usando o laço FOR para estabelecer a sequência.
            for($i = 1; $i <= $n - 2; $i++){
                if($i == 1){
                    echo "0 - 1 - ";
                }
                //Estabelece o terceiro termo.
                $resultado = $atual + $anterior;
                echo $resultado . " - ";
                //Estebelece a sequência de termos.
                $anterior = $atual;
                $atual = $resultado;
            }
            echo "Fim da sequência.";
            echo "<hr";
            echo "<br\n>";
        //------------------------------------------------------------------------------------------

            //EXERCÍCIO 10
            echo "<h4><p> 10) Escreva um código que conte e exiba a quantidade de vogais em uma frase fornecida pelo usuário. Dica: Utilize a expressão regular preg_match_all(/[aeiouAEIOU]/, $ frase);</p></h4>";

            echo "Frase fornecida pelo usuário: O rato roeu a roupa do rei de Roma.<br\n>";
            $var = "O rato roeu a roupa do rei de Roma.";
            
            echo "A frase fornecida pelo usuário tem " .preg_match_all("/[aeiouAEIOU]/", $var) ." vogais.";

            echo "<hr>";
            echo "<br\n>";
        //------------------------------------------------------------------------------------------

            //EXERCÍCIO 11
            echo "<h4><p> 11) Utilize a estrutura foreach para percorrer e exibir todos os elementos de um array.
            $ numeros = [10, 20, 30, 40, 50];</p></h4>";

            echo "Array: [10, 20, 30, 40, 50]<br\n>";
            echo "Elementos da array, em coluna:<br\n> ";
            $numeros = [10, 20, 30, 40, 50];
            foreach ($numeros as $value){
                echo "$value <br\n>";
            };

            echo "<hr>";
            echo "<br\n>";
        //------------------------------------------------------------------------------------------

            //EXERCÍCIO 12
            echo "<h4><p> 12) Percorra um array associativo utilizando a estrutura foreach e exiba tanto as chaves quanto os valores.
            $ aluno = [
                'nome' => 'Maria',
                'idade' => 25,
                'curso' => 'Engenharia'];</p></h4>";

            echo "Array a ser analizada: <br\n>";
            echo  "$ aluno = ['nome' => 'Maria','idade' => 25,'curso' => 'Engenharia'] <br\n>";

            $aluno = ['nome' => 'Maria','idade' => 25,'curso' => 'Engenharia']; 
            foreach ($aluno as $key => $value){
                echo $key.  " => "  .$value. "<br\n>";
            }

            echo "<hr>";
            echo "<br\n>";
        //------------------------------------------------------------------------------------------

            //EXERCICIO 13
            echo "<h4><p> 13) Utilize a estrutura foreach para calcular a média de valores em um array.</p></h4>";

            echo "Array: [10, 20, 30, 40, 50]<br\n>";
            echo "Média dos elementos da array:<br\n> ";
            $numeros = [10, 20, 30, 40, 50];

            $soma = 0;

            foreach ($numeros as $numero){
                $soma = $soma + $numero;
                $media = $soma/5;
            }
            echo "A soma dos elementos da array é ". $soma ."<br\n>";
            echo "A média aritmética dos elementos da array é " . $media . "<br\n>";
            
            
            echo "<hr>";
            echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCÍCIO 14
        echo "<h4><p> 14) Implemente um loop for para calcular e exibir os primeiros 5 múltiplos de 3.</p></h4>";
       
        echo "Numeros de 1 à 30. <br\n>";
        for ($i = 1; $i <= 29; $i++){
            echo $i . " - ";
            if ($i == 29){
                echo "30";
            }
        }

        echo "<br\n>";

        echo "<br\n>Lista dos 5 primeiros números múltiplos de 3, de 1 à 30. <br\n>";
        for ($i = 1; $i <= 12; $i++){
            if($i % 3 == 0){
                echo $i . " - ";
                if ($i == 12){
                    echo "15";
                }
            }
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCÍCIO 15
        echo "<h4><p> 15) Utilize um loop while para calcular e exibir a soma dos números pares de 1 a 10.</p></h4>";

        $soma = 0;

        //Soma dos números pares de 1 ate 10.
        for ($i = 1; $i <=10; $i++){
            if($i % 2 == 0){
                $soma = $soma + $i;
            }
        }
        echo "A soma dos números pares de 1 à 10 é " .$soma;

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCÍCIO 16
        echo "<h4><p> 16) Implemente um loop while para exibir os números de 1 a 5.</p></h4>";

        $cont = 1;
        $nr = 1;

        while ($cont <= 5) {
            echo $nr . " ";
            $nr++ ." - ";
            if ($nr <= 5){
                echo " - ";
            }
            $cont++;
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCÍCIO 17
        echo "<h4><p> 17) Crie um loop while para imprimir a tabuada do 7.</p></h4>";

        $cont = 1;
        $nr = 1;
      
        echo "Tabuada do número 7. <br\n>";
        while ($cont <= 10){
            echo $nr . " x " . 7 ." = " . $nr * 7 ."<br\n>";
            $nr++;
            $cont++;
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCICIO 18
        echo "<h4><p> 18) Desenvolva um loop while para calcular e exibir os quadrados dos números de 1 a 5.</p></h4>";

        $cont = 1;
        $nr = 1;

        echo "Lista dos quadrados dos números de 1 à 5<br\n>";
        while($cont <=5){
            echo $nr ." ** 2 = " . $nr ** 2 ."<br\n>";
            $nr++;
            $cont++;
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCÍCIO 19
        echo "<h4><p> 19) Escreva um loop while para exibir os números de 10 a 1 em ordem decrescente.</p></h4>";

        $cont = 10;
        $nr = 10;

        echo "Contagem regressiva de 10 à 1.<br\n>";
        while($cont >= 1){
            echo $nr . "  ";
            $cont--;
            $nr--;
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCICIO 20
        echo "<h4><p> 20) Crie um loop do-while que imprima os números de 10 a 1 em ordem decrescente.</p></h4>";

        $cont = 10;

        echo "Contagem regressiva: <br\n>";
    
        do{
           echo $cont;
           echo "<br\n>";
           $cont--;
            }while($cont >= 1);

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCICIO 21
        echo "<h4><p> 21) Desenvolva um loop for que conte de 0 a 100 de 10 em 10.</p></h4>";
        
        for($i = 1; $i <= 100; $i++){
            if($i % 10 == 0){
                echo $i ."  ";
            }
        }

        echo "<hr>";
        echo "<br\n>";
        //------------------------------------------------------------------------------------------

        //EXERCICIO 22
        echo "<h4><p> 22) Escreva um loop for que imprima os números de 1 a 10.</h4></p>";

        for($i = 1; $i <= 10; $i++){
            echo $i ."  ";
        }
        ?>
    </main>
    
</body>
</html>