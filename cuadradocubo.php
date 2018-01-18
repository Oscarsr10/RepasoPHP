<html>
<head>
<title>Ejercicio 18</title>
</head>
<body bgcolor="#A9E2F3">
<?php 
$num = $_POST["num"];
$num_1 = $num;


echo "numero - cuadrado - cubo<br>";
$x = $num_1;

do {
 $cuadrado = pow($x, 2);//$cuadrado = $num_1 * $num_1;
 $cubo = pow($x, 3);//$cubo = $num_1 * $num_1 * $num_1;
    
    echo $x." ---------".$cuadrado." ---------".$cubo."<br>";
    
    $x++;//incrementador
    //$x = $x + 2;//$x-- o $x = $x - 1
} while ($x <= $num_5);//comparador

?> 
</body>
</html>