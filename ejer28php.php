<html>
<head>
<title>Ejercicio 28</title>
</head>
<body bgcolor="#A9E2F3">
<?php 
function recorre ($numero) { 
         foreach ($numero as $indice => $valor) { 
                 echo "$indice: $valor<br>";
}
}
$pila =array("cinco" =>5,"uno" =>l, "cuatro" =>4,"dos" =>2 , "tres" =>3) ;
echo "Array sin ordenar<br>" ;
recorre($pila);
//Ordena de forma ascendente el array pasado como argumento. Ordena las parejas índice/valor atendiendo al dato. Es un buen método para los arrays asociativos.
echo "Ordenación asort()<br>" ;
asort($pila); 
recorre($pila);
//Igual que asort () , pero ordena en sentido descendente.
echo "Ordenación arsort{)<br>" ;
arsort($pila); 
recorre($pila);
//Ordena de forma ascendente el array pasado como argumento. Ordena las parejas índice/valor atendiendo esta vez al índice.
echo "Ordenación ksort()<br>";
ksort($pila);
recorre ($pila) ;
//Igual que ksort (), pero ordena en sentido descendente. 
echo "Ordenación krsort()<br>"; 
krsort ($pila);
recorre($pila);
//Ordena de forma ascendente el array pasado como argumento. Se pierde el valor asociativo entre el índice y el valor.
echo "Ordenación sort()<br>";
sort($pila); 
recorre($pila);
//Igual, pero en orden descendente.
echo "Ordenación rsort()<br>";
rsort($pila); 
recorre($pila);
?>
</body>
</html>	