<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ley de Ohm</title>
</head>

<body bgcolor="#A9E2F3">
<h1>Ley de Ohm</h1>

<?php
// Funciones auxiliares
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

// Recogida de datos
$tension       = recoge("tension");
$intensidad    = recoge("intensidad");
$resistencia   = recoge("resistencia");
$tensionOk     = false;
$intensidadOk  = false;
$resistenciaOk = false;

// Comprobación de que hay al menos dos datos
if (($tension == "" && $intensidad == "") || ($tension == "" && $resistencia == "")
    || ($intensidad == "" && $resistencia == "")) {
    echo "<p class=\"aviso\">Se necesitan al menos rellenar dos datos.</p>\n";
} else {
// Comprobación de $tension
if ($tension == "") {
        $tensionOk = true;
    } elseif (!is_numeric($tension)) {
        echo "<p class=\"aviso\">No ha escrito la tensión como número.</p>\n";
    } else {
        $tensionOk = true;
    }

// Comprobación de $intensidad
    if ($intensidad == "") {
        $intensidadOk = true;
    } elseif (!is_numeric($intensidad)) {
        echo "<p class=\"aviso\">No ha escrito la intensidad como número.</p>\n";
    } else {
        $intensidadOk = true;
    }

// Comprobación de $resistencia
    if ($resistencia == "") {
        $resistenciaOk = true;
    } elseif (!is_numeric($resistencia)) {
        echo "<p class=\"aviso\">No ha escrito la resistencia como número.</p>\n";
    } elseif ($resistencia<0) {
        echo "<p class=\"aviso\">La resistencia no puede ser negativa.</p>\n";
    } else {
        $resistenciaOk = true;
    }
}

// Si los valores recibidos son correctos ...
if ($tensionOk && $intensidadOk && $resistenciaOk) {
    if ($tension != "" && $intensidad != "" && $resistencia != "") {
        if ($tension == $intensidad * $resistencia) {
            echo "<p>Los valores introducidos son correctos:</p>\n\n";
        } else {
            echo "<p>Los valores introducidos <span class=\"aviso\">no</span> son posibles:</p>\n\n";
        }
        echo "<ul>\n"
            . "  <li>Tensión: $tension V</li>\n"
        	. "  <li>Intensidad: $intensidad A</li>\n"
            . "  <li>Resistencia: $resistencia &Omega;</li>\n"
            . "</ul>\n\n";
    } elseif ($tension * $intensidad < 0) {
        echo "<p class=\"aviso\">Tensión e intensidad no pueden tener signos distintos.</p>\n";
    } elseif ($tension != "" && $intensidad != "" && $tension == 0 && $intensidad==0) {
        echo "<p class=\"aviso\">Si la tensión y la intensidad son nulas, la resistencia puede tomar cualquier valor.</p>\n";
    } elseif ($tension != "" && $resistencia != "" && $tension == 0 && $resistencia == 0) {
        echo "<p class=\"aviso\">Si la tensión y la resistencia son nulas, la intensidad puede tomar cualquier valor.</p>\n";
    } elseif ($resistencia != "" && $tension != 0 && $resistencia == 0) {
        echo "<p class=\"aviso\">Si la resistencia es nula, la tensión no puede ser no nula.</p>\n";
    } elseif ($intensidad != "" && $tension !=0 && $intensidad == 0) {
        echo "<p class=\"aviso\">Si la intensidad es nula, la tensión no puede ser no nula.</p>\n";
    } else {
        echo "<p>Valores calculados:</p>\n\n";
        if ($tension == "") {
            $tension = $resistencia * $intensidad;
        } elseif ($intensidad == "") {
            $intensidad = $tension / $resistencia;
        } else {
            $resistencia = $tension / $intensidad;
        }
        echo "<ul>\n"
            . "  <li>Tensión: $tension V</li>\n"
            . "  <li>Intensidad: $intensidad A</li>\n"
            . "  <li>Resistencia: $resistencia &Omega;</li>\n"
            . "</ul>\n";
    }
}

?>

<p><a href="ejer7php.html">Volver al formulario.</a></p>
</body>
</html>