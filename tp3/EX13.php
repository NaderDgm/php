<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$inferieurs_a_50 = array();
$superieurs_ou_egaux_a_50 = array();

for ($i = 0; $i < 10; $i++) {
    $nombre = rand(1, 100);
    

    echo "Nombre généré : $nombre<br>";
    
    // Tri direct dans le tableau approprié
    if ($nombre < 50) {
        $inferieurs_a_50[] = $nombre;
    } else {
        $superieurs_ou_egaux_a_50[] = $nombre;
    }
}


echo "<br>Nombres inférieurs à 50 : <br>";
print_r($inferieurs_a_50);


echo "Nombres supérieurs ou égaux à 50 : <br>";
print_r($superieurs_ou_egaux_a_50);
?>
    
</body>
</html>