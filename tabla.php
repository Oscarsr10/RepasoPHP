<html>
<body bgcolor="#A9E2F3">
<?php  
$n=$_POST['num'];
if ($n<1 or $n>10) {
    echo "no has escrito un nùmero entre el 1 y el 10.";
    }
else {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
?>
</body>
</html>