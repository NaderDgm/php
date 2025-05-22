<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
class CompteBancaire{
    public $solde;
    function __construct($solde){
        $this->solde=$solde;
    }
    function verfiersolde($argent){
        $this->argent=$argent;
        echo $this->crediter($argent);
        echo '<br>';
        echo $this->debiter($argent);
    }
    function crediter($argent){
        $this->argent=$argent;
        $this->solde+=$this->argent;
        echo 'Votre Sold est : '.$this->solde;
    }
    function  debiter($argent2){
        $this->argent2=$argent2;
        $this->solde-=$this->argent2;
        echo 'Votre solde est : '.$this->solde;
    }
    function aff(){
        echo 'Votre solde est : '.$this->solde;
    }
}
$v=new CompteBancaire(1500);
echo'<h1>Crediter:</h1>';
$v->crediter(2000);
echo '<br>';
echo'<h1>debiter:</h1>';
$v->debiter(20);
echo '<br>';
echo'<h1>Verifier Solde:</h1>';
$v->verfiersolde(2002);
echo '<br>';
echo'<h1>L affichage Solde:</h1>';
$v->aff();




?>
</html>