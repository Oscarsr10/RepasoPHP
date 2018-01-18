<html><head><title>Resultado de calcular una operación</title></head>
<body bgcolor="#A9E2F3">
<?php
if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])){
	if($_POST['operacion']=="suma")
			echo "El resultado de realizar la suma de los números " .
					$_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
					($_POST['numero1']+$_POST['numero2']);
	else
	if($_POST['operacion']=="resta")
			echo "El resultado de realizar la resta de los números " .
					$_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
					($_POST['numero1']-$_POST['numero2']);
	else
	if($_POST['operacion']=="producto")
			echo "El resultado de realizar el producto de los números " .
					$_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
					($_POST['numero1']*$_POST['numero2']);
	else
	if($_POST['operacion']=="cociente")
		if($_POST['numero2']==0)
				echo "Imposible realizar una división por CERO.";
		else
				echo "El resultado de realizar el cociente de los números " .
						$_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
						($_POST['numero1']/$_POST['numero2']);
	else
		echo "ERROR: Operación incorrecta " . $_POST['operacion'];
}
?>
<br><a href='ejer6php.php'>Volver</a>
</body></html>