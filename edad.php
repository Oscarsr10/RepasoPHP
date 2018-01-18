<html>
<body bgcolor="#A9E2F3">
<?php
if(isset($_POST['mes'])){
 $dia = $_POST['dia'];
 $mes = $_POST['mes'];
$anio = $_POST['anio']; 

$diaAC=date("j"); 
$mesAC=date("n"); 
$anoAC=date("Y"); 
 
if (($mes == $mesAC) && ($dia > $diaAC)) { 
$anoAC=($anoAC-1); }  

if ($mes > $mesAC) { 
$anoAC=($anoAC-1);}
 
$edad=($anoAC-$anio); 
echo "Tiene ".$edad." años"; 
}

?>
</body >
</html>