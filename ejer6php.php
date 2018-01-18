<html><head><title>Calcular una operación</title></head>
<body background="fondo1.jpg">
<form method="POST" action="datos_operaciones.php">
CALCULAR<br>
<br>
Introduzca el primer número:  <input type="text" name="numero1" size="10"><br>
<br>
Introduzca el segundo número: <input type="text" name="numero2" size="10"><br>
<br>
Seleccione la operación:<br>
<input type="radio" value="suma" name="operacion">Suma
<input type="radio" value="resta" name="operacion">Resta
<input type="radio" value="producto" name="operacion">Producto
<input type="radio" value="cociente" checked name="operacion">Cociente<br>
<br>
<input type="submit" value="Enviar datos" name="enviar">
</form>
</body>
</html>