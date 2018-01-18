<html><head><title>Resultado de la lista de pares de numeros</title></head>
<body bgcolor="#A9E2F3">
<?
if(isset($_POST['menor']) && isset($_POST['mayor'])){
 echo "LISTA DE PARES DE NUMEROS DE " . $_POST['menor'] . " Y " . $_POST['mayor'] . ":<br>";
 for($x=$_POST['menor'];$x<=$_POST['mayor'];$x++){
 $valor1=$x;
 $valor2=$_POST['mayor']-($x-$_POST['menor']);
 echo "($valor1,$valor2) ";
 }
}
?>
</body></html>