<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST["nb1"];
    $b=$_POST["nb2"];
    echo "Table de multiplication de ".$a." jusqu'à ".$b." :<br>";
    for($i = 1; $i <= $b; $i++) {
        echo $a."x".$i."=".$a*$i."<br>";
    }
}
?>
</html>