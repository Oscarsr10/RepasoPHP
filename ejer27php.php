<html>
<head>
<title>Ejercicio 27</title>
</head>
<body bgcolor="#A9E2F3">
<?php
$colores = array ("FF0000","00FF00","0000FF","FDF189");
if (in_array("FF88CC",$colores)) {
echo "Se ha encontrado el color FF88CC";
} else {
echo "No se ha encontrado el color FF88CC" ;
}
echo "<br>";
if (in_array("FF0000",$colores)) {
echo "Se ha encontrado el color FF0000";
} else {
echo "No se ha encontrado el color FF0000" ;
}
?>
</body>
</html>