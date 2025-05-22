<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
class voiture{
    public $marque;
    public $modele;
    public $vitesse;
    function __construct($marque,$modele,$vitesse){
        $this->marque=$marque;
        $this->modele=$modele;
        $this->vitesse=$vitesse;
    }
    function accelerer($i){
        $nv=$this->vitesse+$i;
        $this->vitesse;
        if($nv<=200){
            echo 'La voiture entrain accelerer a : '.$nv.'km/h';
        }
        else{
            echo 'La voiture depasse 200km/h ';
        }

    }
    function friener($i){
        $nv=$this->vitesse-$i;
        $this->vitesse;
        if($nv<=200){
            echo 'La voiture entrain de friener a : '.$nv.'km/h';
        }
        else{
            echo 'La voiture depasse 200km/h ';
        }
    }
    function aff(){
        echo $this->marque."  ".$this->modele."   ".$this->vitesse;
    }
}
$v=new voiture('bmw','2019',185);
$v->accelerer(2);
echo '<br>';
$v->friener(6);
echo '<br>';
$v->aff();




?>
</html>