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
            <input type="number" name="num1" placeholder="Premier nombre" required><br><br>
            <input type="number" name="num2" placeholder="Deuxième nombre" required><br><br>
            
            <label>Choisir l'opération:</label><br>
            <input type="radio" name="operation" value="addition" required> Addition
            <input type="radio" name="operation" value="soustraction"> Soustraction  
            <input type="radio" name="operation" value="multiplication"> Multiplication
            <input type="radio" name="operation" value="division"> Division
            <br><br>
            
            <input type="submit" value="Calculer">
            <input type="reset" value="Effacer">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $resultat = 0;

        switch($operation) {
            case "addition":
                $resultat = $num1 + $num2;
                $symbole = "+";
                break;
            case "soustraction":
                $resultat = $num1 - $num2;
                $symbole = "-";
                break;
            case "multiplication":
                $resultat = $num1 * $num2;
                $symbole = "×";
                break;
            case "division":
                if($num2 != 0) {
                    $resultat = $num1 / $num2;
                    $symbole = "÷";
                } else {
                    echo "<p style='color: red'>Erreur: Division par zéro impossible!</p>";
                    exit();
                }
                break;
        }
        
        echo "Résultat: $num1 $symbole $num2 = $resultat";
    }
    ?>
    
</body>
</html>