<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=$_POST ){
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $sexe=$_POST["sexe"];
        echo "  Bonjour  " .$nom." ".$prenom." vous etes  ". $sexe;
    }
    
    
    
    
    ?>
    
</body>
</html>