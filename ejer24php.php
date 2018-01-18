<html>
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 24</title>
</head>
<body background="fondo1.jpg">
<form name="form1" method="post" action="ejer24php.php">
    fecha: <input name="fecha" type="date" ><br>

    <input type="submit" name="submit" value="enviar" ><br>
</form>
<?php
if(isset($_POST['fecha'])) {
    $porciones = explode("-", $_POST['fecha']);
    echo 'mysql: '.$_POST['fecha'].'</br>';
    echo 'habitual: '.$porciones[2].'-'.$porciones[1].'-'.$porciones[0];

}
?>
</body>
</html>