<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Calculatrice</legend>
            <input type="number" name="n1" placeholder="Premier Nombre" required> <br>
            <input type="number" name="n2" placeholder="Deuxieme Nombre" required><br>
            <label> Choisir L'operation</label> <br>
            <input type="checkbox" name="operation" value="addition" placeholder="Addition">
            <label>Addition</label>
            <input type="checkbox" name="operation" value="soustraction" placeholder="Soustraction">
            <label>Soustraction</label>   
            <input type="checkbox" name="operation" value="multiplication" placeholder="Multiplication">
            <label>Multiplication</label>
            <input type="checkbox" name="operation" value="division" placeholder="Division">
            <label>Division</label><br>
            <input type="submit" value="calculer">
            <input type="reset" value="Effacer">
        </fieldset>

    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $operation=$_POST["operation"];
        $resultat=0;
        switch($operation){
            case "addition":
                $resultat=$n1+$n2;
                break;
            case "soustraction":
                $resultat=$n1-$n2;
                break;
            case "multiplication":
                $resultat=$n1*$n2;
                break;
            case "division":
                $resultat=$n1/$n2;
                break;
            default:
            $resultat="operation invalide";
        }
        echo "Resultat: $n1 $operation $n2 = $resultat";
        
    }?>
    
</body>
</html>