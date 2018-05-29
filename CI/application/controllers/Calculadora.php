<!DOCTYPE html>
<html>
    <head>
        <meta chatset="UFTF-8">
    </head>
    <body>        
        <?php 
        defined('BASEPATH') OR exit('No direct script access allowed');

            class Calculadora extends CI_Controller{
            	public function subtracao($num1,$num2){
            		echo "<h1> SUBTRAÇÃO </h1:";
            		echo "<br>";
            		echo "<p> ($num1 - $num2) </p>";
            	}
            	public function soma($num1,$num2){
            		echo "<h1> SOMA </h1>";
            		echo "<br>";
            		echo "<p> ($num1 + $num2) </p>";
            	}
            	public function mult($num1,$num2){
            		echo "<h1> MULTIPLICAÇÃO </h1>";
            		echo "<br>";
            		echo "<p> ($num1 * $num2)</p>";
            	}
            	public function divisao($num1,$num2){
            		echo "<h1> DIVISÃO </h1>";
            		echo "<br>";
            		echo "<p> ($num1 / $num2) </p>";
            	}
            }
        ?>
    </body>
</html>