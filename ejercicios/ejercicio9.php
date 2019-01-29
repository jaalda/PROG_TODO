<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php

   // 1
$x = 0;

while($x < 4){
    echo "*"."<br>";
    $x++;
}

echo"<hr>";


//  2
for ($i=0; $i < 4 ; $i++) { 
    for ($u=0; $u < 4; $u++) { 
        echo "*";
    }
    echo"<br>";
}

echo"<hr>";

//  3
$pilotito = "";

for ($t=0; $t < 6; $t++) { 
    $pilotito.="*";
    echo $pilotito;
    echo"<br>";
}
echo"<hr>";

// 4
$pilotito2 = "*";
$pilotito3 = "*";
$pilotito4 = "**";

for ($s=0; $s < 1; $s++) {
    echo $pilotito2."<br>";
    for ($q=0; $q < 2 ; $q++) { 
        $pilotito3.=$pilotito4;
        echo$pilotito3;
        echo"<br>";
    }
    for ($f=0; $f < 1; $f++) { 
        $pilotito4.=$pilotito2;
        echo $pilotito4."<br>";
        echo $pilotito2;

    }
}

echo"<hr>";


// 5
$espacios = "&nbsp";
$unpilotito = "*";

for ($z=0; $z < 9; $z = $z + 2) { 
    for ($c=0; $c < 9 - $z - 1; $c++) { 
       echo $espacios;
    }
    for ($c=0; $c <= $z; $c++) { 
        echo $unpilotito;
    }
    echo"<br>";
}


  


        ?>

      
    



</body>
</html>