<html>
<body bgcolor="#A9E2F3">
<?php
$remuneracion = $_POST["sueldo"]; 
if ($remuneracion < 1000){ 
echo $remuneracion = $remuneracion * 1.25; 
} elseif ($remuneracion >= 1000 && $remuneracion <=1500){ 
echo $remuneracion = $remuneracion * 1.21; 
}else { 
echo $remuneracion = $remuneracion * 1.18; 
}	
?>
</body >
</html>