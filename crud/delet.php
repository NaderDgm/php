<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" placeholder='delete with id' name="id"><br>
        <input type="submit" value="envoiyer">
        <a href="header.php">return</a>
    </form>
</body>
</html>
    <?php
    try{
        // include 'create.php';
        echo 'delete <br>';
        include 'db.php';
        
        if( isset($_POST["id"])){
            $pre=$conn->prepare("delete from etudient where id_etudient=:id_etudient");
        
            if($pre->execute([":id_etudient"=>$_POST["id"]])){
                echo 'bien deletée';
            }
        }
        else{
            echo 'toues les champs sont obligatoire';
        }
        
    }catch(PDOException $e){
        echo "ERRore :".$e->getMessage();
    }
    ?>