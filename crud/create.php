<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" placeholder='id' name="id"><br>
        <input type="text" placeholder='nom' name="nom"><br>
        <input type="text" placeholder='email' name="email"><br>
        <input type="submit" value="envoiyer">
        <a href="header.php">return</a>
    </form>
</body>
</html>
    <?php
    try{
        include 'db.php';
        // $session_start();
        // $session_destroy();
        echo 'bien connectée <br>';
        if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['email'])){
            $pre=$conn->prepare("insert into etudient(id_etudient,nom,email) values(:id_etudient,:nom,:email)");
        
        if($pre->execute([":id_etudient"=>$_POST["id"],":nom"=>$_POST["nom"],":email"=>$_POST["email"]])){
            header('location:header.php');
            exit;
        }
        }
        else{
            echo 'tout les champ sont obligatoire';
        }
        
    }catch(PDOException $e){
        echo "ERRore :".$e->getMessage();
    }
    ?>