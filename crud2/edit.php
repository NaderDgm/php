<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" placeholder='id where there is detgfh' name="id"><br>
        <input type="text" placeholder='nom' name="nom"><br>
        <input type="text" placeholder='email' name="email"><br>
        <input type="submit" value="envoiyer">
        <a href="header.php">return</a>
    </form>
</body>
</html>
    <?php
    try{
        // include 'create.php';
        echo 'edit';
        include 'db.php';
        echo 'bien connectée <br>';
        $pre=$conn->prepare("update etudient set nom=:nom,email=:email where id_etudient=:id_etudient");
        
        if($pre->execute([":id_etudient"=>$_POST["id"],":nom"=>$_POST["nom"],":email"=>$_POST["email"]])){
            echo 'bien modifier';
        }
    }catch(PDOException $e){
        echo "ERRore :".$e->getMessage();
    }
    ?>