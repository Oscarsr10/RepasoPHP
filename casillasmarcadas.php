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

$numero       = recoge("numero");
$numeroOk     = false;
$numeroMinimo = 1;
$numeroMaximo = 10;

if ($numero == "") {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla.</p>\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla "
        . "como número entero positivo.</p>\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El tamaño de la tabla debe estar entre "
        . "$numeroMinimo y $numeroMaximo.</p>\n";
} else {
	$numeroOk = true;
}

if ($numeroOk) {
    print "<p>Marque las casillas de verificacion que quiera y contare cuantas ha marcado.</p>\n\n";

    print "<form action=\"casillasmarcadas1.php\" method=\"get\">\n";
    print "  <table class=\"conborde\">\n";
    print "    <tbody>\n";
    print "      <tr>\n";
    for ($i = 1; $i <= $numero; $i++) {

        print "        <td><label><input type=\"checkbox\" name=\"c[$i]\"/> $i</label></td>\n";
    }
    print "      </tr>\n";
    print "    </tbody>\n";
    print "  </table>\n\n";
    
    print "  <p><input type=\"hidden\" name=\"numero\" value=\"$numero\" /></p>\n\n"; 

    print "  <p><input type=\"submit\" value=\"Contar\" />\n"; 
    print "    <input type=\"reset\" value=\"Borrar\" name=\"Reset\" /></p>\n";
    print "</form>\n";
}

?>
</body>
</html>