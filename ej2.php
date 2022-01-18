<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $capitales = ["Nur-Sultan", "Madrid", "Paris", "Moscu"];

        echo "Array (" . count($capitales) . " elementos): <br>";
        foreach($capitales as $i => $capital) {
            echo "$i : $capital <br>";
        }
    
    ?>
</body>
</html>