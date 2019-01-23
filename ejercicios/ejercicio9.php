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
    $punto = "*" ;
    for ($i=0; $i<=4; $i++){
    echo "<p>$punto</p>";
    }

    

    for ($i=0; $i<=4; $i++){
    echo "<p>$punto$punto$punto$punto$punto</p>"; 
}


for ($i=0; $i<=5; $i++){

    if ($i=0){
        echo "<p>$punto</p>";
    

    else if ($i=1){
        echo "<p>$punto$punto</p>";
    }

    else if ($i=2){
        echo "<p>$punto$punto$punto</p>";
    }

    else if ($i=3){
        echo "<p>$punto$punto$punto$punto</p>";
    }

    else{
        echo "<p>$punto$punto$punto$punto$punto</p>";
    }
}

  


        ?>

      
    



</body>
</html>