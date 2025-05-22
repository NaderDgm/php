<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class ville{
        public $nom;
        public $departement;
        function __construct($nom,$departement){
            $this->nom = $nom;
            $this->departement = $departement;

        }
        function aff(){
           echo  $this->nom.' <br> '.$this->departement;
        }
    }

    $v=new ville('tamesna','rabat');
    $v->aff();

    
    ?>
</body>
</html>