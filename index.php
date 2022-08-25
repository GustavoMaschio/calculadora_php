<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Calculadora_PHP</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <form action="calculadora.php" method="get" >
            Primeiro Numero: <input name="num1" type="text" />
            Segundo numero: <input name="num2" type="text" /> 
            Operacao (quatro operações):  <input name="operacao" type="text" /> 
            <input type="submit" value="Calcular" />     
    </form> 
    <?php
        $a = $_GET 'num1';
        $b = $_GET 'num2';
        $op =$_GET 'operacao';
        $c = []
        switch ($op){
        case 'soma':
            $c = $a + $b;
            break;
            //echo $c = "resultado";
        
        case 'subtracao':
            $c = $a - $b;
            break;
            //echo $c = "resultado";
        case 'multiplicacao':
            $c = $a*$b;
            break;
            //echo $c = "resultado";
        case 'divisao':
            $c = $a/$b;
            break;
        }
        echo "O resultado da operação é: $c";
    ?>      
    </body>
</html>