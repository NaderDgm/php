<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nombres = array();


for ($i = 0; $i < 10; $i++) {
    $nombres[] = rand(1, 100);
}

if (in_array(42, $nombres)) {
    echo "Le nombre 42 est présent dans le tableau.<br>";
} else {
    echo "Le nombre 42 n'est pas présent dans le tableau.<br>";
}
var_dump($nombres);
?>
</body>
</html>