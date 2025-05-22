<html>
    <head>
        <title></title>
    </head>
    <body>
        
    </body>
    <?php
    $note=[
        'said'=>12,
        'badr'=>16,
        'najat'=>15];
        $nom=['said','badr','najat'];
        foreach($note as $key=>$value){
            echo $key.' a la note '.$value.'<br>';
        }
        echo '<h1>Ajouter une note</h1>';
        $note['yassine']=14;
        echo '<h1>Ajouter un nom</h1>';
        array_push($nom,'houssain','salwa');
        print_r($nom);
        //print_r($note);
        foreach($note as $key=>$value){
            echo '<br>'.$key.' a la note '.$value.'<br>';
        }
        echo '<h1>supprimer une note</h1>';
        unset($note['badr']);
        foreach($note as $key=>$value){
            echo '<br>'.$key.' a la note '.$value.'<br>';
        }
        echo '<h1> le max et le min </h1>';
        echo 'le max est '.$max=max($note)." ";
        echo 'le min est '.$min=min($note)." ";

        echo '<h1>trie de tableau</h1>';

        print_r($nom);

        rsort($nom);

        print_r($nom);

        ksort($note);

        print_r($note);

        krsort($note);

        print_r($note);

        asort($note);

        print_r($note);

        arsort($note);

        print_r($note);

        echo '<h1>la moyenne de tableau</h1>';
        $moy=array_sum($note)/count($note);
        echo '<br> La moyenne est :'. number_format($moy,3);
        
    ?>
</html>