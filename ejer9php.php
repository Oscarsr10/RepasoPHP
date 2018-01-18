<html>
<head>
<title>ejercicio 9</title>
</head>
<body bgcolor="#A9E2F3">
<?php
 $i = 1; $mult_2_3 = 0; $mult_2 = 0; $mult_3 = 0;
 echo "Verifiquemos los multiplos de 2 y 3 (del 1 al 15):\n";
 echo "<br>";
 echo "--------------------------------------------------\n";
 echo "<br>";
 while($i <= 15){
   if(($i % 2 == 0) AND ($i % 3 == 0) )
   { 
     echo "$i es multiplo de 2 y de 3.\n";
     echo "<br>";
     $mult_2_3 += 1;
   }elseif ($i % 2 == 0)
   {
     echo "$i es multiplo de 2.\n";
     echo "<br>";
     $mult_2 += 1;
   }elseif ($i % 3 == 0)
   {
     echo "$i es multiplo de 3.\n";
     echo "<br>";
     $mult_3 += 1;
   }else
   {
     echo "$i no es multiplo de 2 ni de 3.\n";
     echo "<br>";
   }
   $i += 1;
 } 
?>
</body>
</html>		