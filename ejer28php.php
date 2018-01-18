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
//Ordena de forma ascendente el array pasado como argumento. Ordena las parejas �ndice/valor atendiendo al dato. Es un buen m�todo para los arrays asociativos.
echo "Ordenaci�n asort()<br>" ;
asort($pila); 
recorre($pila);
//Igual que asort () , pero ordena en sentido descendente.
echo "Ordenaci�n arsort{)<br>" ;
arsort($pila); 
recorre($pila);
//Ordena de forma ascendente el array pasado como argumento. Ordena las parejas �ndice/valor atendiendo esta vez al �ndice.
echo "Ordenaci�n ksort()<br>";
ksort($pila);
recorre ($pila) ;
//Igual que ksort (), pero ordena en sentido descendente. 
echo "Ordenaci�n krsort()<br>"; 
krsort ($pila);
recorre($pila);
//Ordena de forma ascendente el array pasado como argumento. Se pierde el valor asociativo entre el �ndice y el valor.
echo "Ordenaci�n sort()<br>";
sort($pila); 
recorre($pila);
//Igual, pero en orden descendente.
echo "Ordenaci�n rsort()<br>";
rsort($pila); 
recorre($pila);
?>
</body>
</html>	