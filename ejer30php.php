<html>
<title>Ejercicio 30</title>
<body background="fondo1.jpg">
<?php
if( isset( $_POST['arr'] ) )
{
    $array = $_POST['arr']; 
    $n = count($array); 
    $suma = 0;
    for( $i=0;$i<$n;$i++)
    {
       echo "$i = $array[$i] <br>";
       $suma = $suma + $array[$i];
    }
    echo " La suma es $suma <br>";
}
?>
<form action="ejer30php.php" method="post">
<?php
    $n=7;
    for( $i=0;$i<=$n;$i++)
    {
       echo $i;
       echo "<input type='text' name='arr[]' size='10'>";
       echo "<br>";
    }
?>
<input type="submit">
</form>
</body>
</html>	