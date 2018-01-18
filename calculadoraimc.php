<html> 
<head> 
   <title>Resultado5</title> 
</head> 
<body bgcolor="#A9E2F3"> 
<center>
<H1>Tabla imc</H1>
</center> 
<p>
<?php


  echo "<center>";
  echo "<br><br><br><br>";

   $peso=$_GET["peso"];
   $altura=$_GET["altura"];

   echo "<b>El peso es:</b> $peso
   <br><b>La Altura es:</b>  $altura";


   $IMC=($peso/($altura*$altura))*10000; 

   echo "<br><b>Tu IMC es:</b> ".$IMC;

 if ($IMC<16) { $ESCALA="DELGADES SEVERA";} 
 if (($IMC>=16)&&($IMC<17) ){ $ESCALA="DELGADEZ MODERADA";}
 if (($IMC>=17)&&($IMC<18.5) ){ $ESCALA="DELGADEZ ACEPTABLE";}
 if (($IMC>=18.5)&&($IMC<25) ){ $ESCALA="NORMAL";}
 if (($IMC>=25)&&($IMC<30) ){ $ESCALA="PRE-OBESO";}
 if (($IMC>=30)&&($IMC<35) ){ $ESCALA="OBESO TIPO 1";}
 if (($IMC>=35)&&($IMC<40) ){ $ESCALA="OBESO TIPO 2";}
 if ($IMC>=40){ $ESCALA="OBESO TIPO 3";}

  echo "<br><b>Escala: </b>$ESCALA";   
  

  echo "</center>";

?>
</p>
<br> 
</body> 
</html>