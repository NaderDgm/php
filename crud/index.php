<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        
        <a href="header.php">return</a>
    </form>
</body>
</html>
    <?php
    try{
        // include 'create.php';
        echo 'delete <br>';
        include 'db.php';
        $pre=$conn->prepare("select * from etudient");
        $pre->execute([]);
        $po=$pre->fetchALL();
        echo '<table border="1">';
        foreach($po as $i){
            echo '<ul>';
            echo "<li> id :".$i["id_etudient"]."</li>";
            echo "<li>nom :".$i["nom"]."</li>";
            echo "<li> email :".$i["email"]."</li>";
            echo '</ul>';
        }   
        echo "</table> "; 
    }catch(PDOException $e){
        echo "ERRore :".$e->getMessage();
    }
    ?>