<html>
    <head>
        <title>
            Inverser un tableau
        </title>
    </head>
    <body>
    <?php
    $tab = array(1, 2, 3, 4, 5);
    $tab_inverse = array_reverse($tab);   
    foreach($tab_inverse as $element) {
        echo $element . " ";
    }
    ?>
    </body>
</html>