<html>
    <head>
        <title></title>
    </head>
    <body>
        

    </body>
    <?php
    $heur=date('H');
    if($heur<12){
        echo "C'est le matin".date('H:i');
    }
    elseif($heur<18){
        echo "C'est l'apres midi".date('H:i');
    }
    ?>
</html>