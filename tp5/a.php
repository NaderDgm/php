<html>
    <head>
        <title>Affichage des données</title>
    </head>
    <body>
        <?php 
        if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["sexe"]) && isset($_GET["niveau"]))
        {
            echo "Nom: " . $_GET["nom"] . "<br>";
            echo "Prenom: " . $_GET["prenom"] . "<br>";
            if($_GET["sexe"] == "M")
            echo "Sexe: " . "Masculin" . "<br>";
            else
            echo "Sexe: " . "Feminin" . "<br>";
            //echo "Niveau: " . $_GET["niveau"] . "<br>";

            if(($_GET["niveau"]=="simple")){
                echo "Niveau: " . $_GET["niveau"] . "<br>";
            }
            if(($_GET["niveau"]=="moyen")){
                echo "Niveau: " . $_GET["niveau"] . "<br>";
            }
            if(($_GET["niveau"]=="difficile")){
                echo "Niveau: " . $_GET["niveau"] . "<br>";
            }
        }
        ?>
        <br>
        <a href="index.html">home</a>
    </body>
</html>