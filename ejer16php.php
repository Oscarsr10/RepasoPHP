<html>
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 16</title>
</head>
<body background="fondo1.jpg">
<form name="form1" method="post" action="ejer16php.php">
    año: <input name="num1" type="number" ><br>
    año mayor: <input name="num2" type="number" ><br>

    <input type="submit" name="submit" value="enviar" ><br>
</form>
<?php
if(isset($_POST['num1']) && isset($_POST['num2'])) {
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    if ($numero1 > $numero2) {
        for ($i = $numero2; $i <= $numero1; $i++) {
            if ((($i %  4)==0) &&($i%100)!=0){
                echo "el año ";
                echo $i;
                echo" es bisiesto";
                echo '</br>';
            }
        }

    } else {
        for ($i = $numero1; $i <= $numero2; $i++) {
            if ((($i %  4)==0) &&($i%100)!=0){
                echo "el año ";
                echo $i;
                echo" es bisiesto";
                echo '</br>';
            }
            }
        }

}
?>
</body>
</html>