<html> 
<head> 
   <title>Resultado</title> 
</head> 
<body bgcolor="#A9E2F3"> 
<H1>Contar letras</H1> 
<p>
<?php 
$cadena=$_POST['frase'];
$subCadena=$_POST['letra'];
 
$cant=0;
$pos=0;

do {
    
    $pos_oc = strpos($cadena,$subCadena,$pos);
     
    if ($pos_oc === FALSE)             
        $busqueda = FALSE;
    else {
        $busqueda = TRUE;
        $pos = $pos_oc + 1;
        $cant++;
    }

} while ($busqueda);

echo "La palabra '$subCadena' aparece $cant veces";


 ?>
</p>
<br> 
</body> 
</html>