<html>
<title>Ejercicio 31</title>
<body background="fondo1.jpg">
<form name="form1" method="post" action="ejer31php.php">
    Numero de elementos: <input name="numero" type="number" ><br>
    <input type="submit" name="submit" value="enviar" ><br>
</form>
<?php
if(isset($_POST['numero'])) {
    echo '<form name="form2" method="post" action="ejer31php.php">';
    echo '<input name="numero" type="hidden" value="'.$_POST['numero'].'">';
    for ($i = 1; $i <= $_POST['numero']; $i++) {
        echo 'Numero: <input name="num' . $i . '" type="number" ><br>';
    }
    echo '<input type="submit" name="submit" value="enviar" ><br>';
}
if(isset($_POST['num1'])) {
    $array = array();
    for ($i = 1; $i <= $_POST['numero']; $i++) {
        $array[] = $_POST['num' . $i . ''];
    }

    $suma = array_sum($array);
    echo 'la suma es ' . $suma;
}

?>
</body>
</html>