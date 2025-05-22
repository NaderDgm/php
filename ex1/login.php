<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: rgb(239, 239, 249);
    }
    #a{
        font-size:56px;
        background-color:red;
        
    }
    p{
        font-size:56px;
        background-color:green;
    }
    #w,button{
        display: flex;
        justify-content: center;
        font-size:16px;
        width: 200px;
        background-color:rgb(0,189,0);
        position: static;

    }
    form:hover{
        border: 6px,rgb(216, 218, 255),solid;
        background-color:rgb(216, 218, 255) ;
        border-radius: 4px;
    }
    h2{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 50%;
        border: 7px,rgb(227, 227, 255),solid;
        background-color: rgb(255, 255, 255);
        padding: 10px;
        border-radius: 3px;
    }
    input{
        font-size:16px;
        margin:10px;
        padding:10px;
        background-color: rgb(235, 222, 35);
        
        
    }
</style>
<body>
    <form  method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
        <form action="session.php" method="POST">
        
            <h2>Authentification</h2>
            <input type="text" name="nom" placeholder="Entrez votre nom..."><br>
            <input type="text" name="prenom" placeholder="Entrez votre prenom..."><br>
            <input type="email" name="email" placeholder="Entrez votre email..."><br>
            <input type="password" name="mdp" placeholder="Entrez votre mot de pass..."><br>
            <input type="submit" name="login" value="Login" id="w">
        </form>
        
    </form>
    <span></span>
    
</body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    //echo 'Prenom: ',$prenom,'<br>','Nom: ',$nom,'<br>','Email :',$email,'<br>','Mot de pass :',$mdp;
}
$dsn = "mysql:host=localhost;dbname=form;charset=utf8mb4";
$user = "root";
$password = "";

include 'connect.php'















?>
</html>