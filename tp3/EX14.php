<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);
$pays_grands = array_filter($pays_population, function($population) {
    return $population >= 20000000;
});
array_walk($pays_grands, function($population, $pays) {
    echo "$pays : $population habitants";
});
?>
</body>
</html>