<html>
<head>
<title>Media</title>
</head>
<body bgcolor="#A9E2F3">
<?php
function media(){
    $cuenta = 0;
    foreach(func_get_args() as $numero){
        $cuenta += $numero;
    }
    $resultado = round($cuenta / func_num_args(), 2);
    return $resultado;
}
echo "La media de 3, 8 y 9 es: ";
echo media(3, 8, 9);
?>
</body>
</html>