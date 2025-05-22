<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pays_capitales =array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome"
);
$pays = array_keys($pays_capitales);
$nombre_pays = count($pays);

for ($i = 0; $i < $nombre_pays; $i++) {
    $pays_actuel = $pays[$i];
    $capitale = $pays_capitales[$pays_actuel];
    echo 'La capitale de'.$pays_actuel. 'est' .$capitale.'<br>';
}
?>
</body>
</html>