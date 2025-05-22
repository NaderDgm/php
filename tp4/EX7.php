<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
    <?php
    $gradea=18;
    $gradeb=15;
    $gradec=12;
    $graded=10
    switch($gradea){
        case $gradea>=18:
            echo 'A';
            break;
        case $gradea>=15:
            echo 'B';
            break;
        case $gradea>=12:
            echo 'C';
        default:
            echo 'La note est n'existe pas';
    }    
    ?>
</html>