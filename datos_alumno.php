<html><head><title>Resultado de introducir datos de un alumno</title></head>
<body bgcolor="#A9E2F3">
<? 
if(isset($_POST['nombre']) && isset($_POST['telefono']) &&
isset($_POST['enseñanza']) && isset($_POST['mostrar'])){
// Construimos inicialmente el mensaje con los datos del alumno:
$mensaje = "El alumno " . $_POST['nombre'] . ", con telefono " . $_POST['telefono'];
if(isset($_POST['matriculado']))
$mensaje .= ", esta matriculado en ".$_POST['enseñanza'];
else
$mensaje .= ", no esta matriculado.";

if($_POST['mostrar']=="Por Pantalla")
echo $mensaje;
else{

$nombrefichero="datos.txt";
if($descriptorarchivo = fopen($nombrefichero,"w")){

fputs($descriptorarchivo,$mensaje);
fclose($descriptorarchivo);

echo "<br><a href='mostrardatos.php'>Mostrar archivo</a><br>";
}
else{
echo "ERROR: Imposible abrir fichero $nombrefichero para escritura.<br>\n";
}
}
}
?>
<br><a href="ejer33php.html">Volver</a>
</body></html>