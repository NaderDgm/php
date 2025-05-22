<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
class Compte{
    public $montant;
    public $interet;
    function __construct($montant,$interet){
        $this->montant=$montant;
        $this->interet=$interet;
    }
    function getMontant(){
        echo 'Votre Montant est : '.$this->montant;
    }
    function un_an(){
        $inte=$this->interet*$this->montant/100;
        $this->montant+=$inte;
        echo 'Votre montant : '.$inte;
    }
}
$w=new Compte(200,2);
$w->getMontant();
echo '<br>';
$w->un_an();
echo '<br>';




?>
</html>