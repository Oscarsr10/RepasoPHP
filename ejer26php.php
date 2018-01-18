<html>
<head>
<title>Ejercicio 26</title>
</head>
<body bgcolor="#A9E2F3">
<?php
$array = array(
    array("FF0000", "00FF00","0000FF"),
    array("FE9ABC", "FDF189","BC8F8F"),
);
echo '<head>
            <style type="text/css">
                .'.$array[0][0].'{background-color: #'.$array[0][0].';}
                .'.'A'.$array[0][1].'{background-color: #'.$array[0][1].';}
                .'.'A'.$array[0][2].'{background-color: #'.$array[0][2].';}
                .'.$array[1][0].'{background-color: #'.$array[1][0].';}
                .'.$array[1][1].'{background-color: #'.$array[1][1].';}
                .'.$array[1][2].'{background-color: #'.$array[1][2].';}
            </style>
      </head>';
echo '<table>
        <tr>
            <td>Colores fuertes:</td>
            <td class="'.$array[0][0].'">rojo '.$array[0][0].'</td>
            <td class="'.'A'.$array[0][1].'">verde '.$array[0][1].'</td>
            <td class="'.'A'.$array[0][2].'">azul '.$array[0][2].'</td>
        </tr>
        <tr>
            <td>Colores suaves:</td>
            <td class="'.$array[1][0].'">rosa '.$array[1][0].'</td>
            <td class="'.$array[1][1].'">amarillo '.$array[1][1].'</td>
            <td class="'.$array[1][2].'">malva '.$array[1][2].'</td>
        </tr>
    </table>';
?>
</body>
</html>