<html>
<head>
<title>Rimas</title>
</head>
<body bgcolor="#A9E2F3">
<?php
if(isset($_REQUEST['compa']))
{
$cadena1 =(substr($_REQUEST['pala1'],-3));
$cadena2 =(substr($_REQUEST['pala2'],-3));
$cadena1a =(substr($_REQUEST['pala1'],-2));
$cadena1b =(substr($_REQUEST['pala2'],-2));

if(strcmp($cadena1,$cadena2)==0)
print("Las palabras riman");

else if(strcmp($cadena1a,$cadena1b)==0)
print("Las palabras riman un poco");
else
print("Las palabras no riman"); 


}
?>
</body>
</html>