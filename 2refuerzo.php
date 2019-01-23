<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $menu=["inicio","blog","videos","contactos"];
                for ($i=0; $i<4; $i++){
                    echo "<li> $menu[$i] </li>";
                }
        ?>
    </ul>
    
</body>
</html>