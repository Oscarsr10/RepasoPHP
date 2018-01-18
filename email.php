<html>
<head>
  <title>Comprobar Email</title>
</head>
<body bgcolor="#A9E2F3">
<?php
function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}
if (isset($_POST['enviar'])) {
   if (comprobar_email($_POST['email']))
      echo 'El email introducido es correcto!';
   else
      echo 'El email introducido NO es correcto!';
}
?>
</body>
</html>