<html> 
<head> 
   <title>Resultado1</title> 
</head> 
<body bgcolor="#A9E2F3"> 
<H1>Comparacion de numeros</H1> 
<p>
<?php 
$num1=$_POST['num1']; 
$num2=$_POST['num2']; 
$num3=$_POST['num3']; 

if(($num1>$num2) && ($num1>$num3)) {
         echo "El numero 1 es mayor";  
} elseif(($num2>$num1) && ($num2>$num3)) {
         echo "El numero 2 es mayor"; 
} elseif(($num3>$num1) && ($num3>$num2)) {
         echo "El numero 3 es mayor"; 
}

 ?>
</p>
<br> 
</body> 
</html>