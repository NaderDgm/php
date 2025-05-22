<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $sexe=$_POST["sexe"];
    switch($sexe){
        case "Masculin":
            echo "Bonjour Monsieur ".$nom." ".$prenom ." vous etes ".$sexe;
            break;
        case "Feminin":
            echo "Bonjour Madame ".$nom." ".$prenom." vous etes ".$sexe;
            break;
    }
}

?>
</html>