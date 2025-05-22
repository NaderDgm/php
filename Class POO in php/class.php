<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
    class personne{
        public $nom;
        public $prenom;
        public $date;
    
        function __construct($nom, $prenom, $date) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date = $date;
        }
        function printer(){
            return 'je m appelle : ' . $this->nom . ' ' . $this->prenom . ' born in : ' . $this->date;
        }
        }
        $appele1=new personne('Nader','Doghmi','2005/07/12');
        $appele2=new personne('Riad','Laaroussi','1999/07/12');
        
        echo $appele1->printer();
        echo $appele2->printer(); 



?>
</html>