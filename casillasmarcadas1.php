<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tabla de una fila con casillas de verificación</title>
</head>
<body bgcolor="#A9E2F3">
<h1>Tabla de una fila con casillas de verificacion</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

function recogeMatriz($var) 
{
    $tmpMatriz = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
            $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "UTF-8"));
            $valorLimpio  = trim(htmlspecialchars($valor,  ENT_QUOTES, "UTF-8"));
            $tmpMatriz[$indiceLimpio] = $valorLimpio;
        }
    }
    return $tmpMatriz;
}

$numero       = recoge("numero");
$c            = recogeMatriz("c");
$numeroOk     = false;
$cOk          = false;
$cValor       = "on";
$numeroMinimo = 1;
$numeroMaximo = 10;

if ($numero == "") {
    print "<p class=\"aviso\">No se ha recibido el tamaño de la tabla.</p>\n\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No se ha recibido el tamaño de la tabla "
        . "como número entero positivo.</p>\n\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El tamaño de la tabla debe estar entre "
        . "$numeroMinimo y $numeroMaximo.</p>\n\n";
} else {
    $numeroOk = true;
}

// Comprobación de $c (casillas de verificación)
// Se cuenta el número de elementos en la matriz $c
$casillasMarcadas = count($c);
// Si no se ha recibido ninguna casilla
if ($casillasMarcadas == 0) {
    print "<p>No ha marcado ninguna casilla.</p>\n\n";
// Si se han recibido demasiadas casillas    
} elseif ($casillasMarcadas > $numero) {
        print "<p class=\"aviso\">La matriz recibida es demasiado grande.</p>\n\n";
} else {
    // Bucle para comprobar si todos los índices y valores son correctos
	$cOk = true;
    foreach ($c as $indice => $valor) {
        // Si el índice es numérico (como es de tipo int hay que convertirlo a string
        if (!ctype_digit((string)$indice) 
        // o si el índice está fuera de rango
            || $indice < 1 || $indice > $numero
        // o si el valor no es "on"
            || $valor != $cValor) {
            $cOk = false;
	   }
    }
    if (!$cOk) {
        print "<p class=\"aviso\">La matriz recibida no es correcta.</p>\n\n";
    }
}

// Si el número recibido y las casillas recibidas con correctos ...
if ($numeroOk && $cOk) {
	print "<p>Ha marcado $casillasMarcadas casilla";
	if ($casillasMarcadas>1) {
		print "s";
	}
	print " de un total de $numero: ";
	// Bucle para escribir los índices de las casillas recibidas
	foreach ($c as $indice => $valor) {
    	print "$indice ";
	}
    print "</p>\n\n";
}

// Enlace a la página 2 enviando el control numero con su valor para que pueda
// dibujar la tabla
if ($numeroOk) {
	print "<p><a href=\"casillasmarcadas.php?numero=$numero\">Volver a la tabla</a></p>\n";
}

?>

<p><a href="ejer32php.html">Volver al formulario inicial.</a></p>

</body>
</html>