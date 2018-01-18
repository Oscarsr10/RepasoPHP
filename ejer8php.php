<html>
<body bgcolor="#A9E2F3">

<?php
$a = $_POST['numero1'];
$b = $_POST['numero2'];
for ($i=$a; $i<=$b; $i++){
if ($i%2 == 0)
{
	print $i.', ';
}}
?>
</body>
</html>