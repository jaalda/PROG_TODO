
<?php

$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conector->connect_errno . ") " . $conector->connect_error;
}

else{
  $nombre=$_POST["nombre"];
  $ciudad=$_POST["ciudad"];
  $web=$_POST["web"];
  $puntos=$_POST["puntos"];

  $consulta= "insert into equipo (nombre, ciudad, web, puntos) values ('$nombre', '$ciudad', '$web', '$puntos')";
  $resultado=$conector->query($consulta);
  $consulta1=$conector->query("select * from equipo");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>