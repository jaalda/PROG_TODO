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
    
    echo "<ul>";

     $variable=1;
        for($i=0; $i<20; $i++){
            $variable+=2;
            echo "<li> $variable </li>"; 
        }

    echo "</ul>";


    ?>
    
</body>
</html>