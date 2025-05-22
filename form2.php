<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $date=$_POST["date"];
    $adress=$_POST["Adresse"];
    $gender=$_POST["gender"];
    $password=$_POST["password"];
    $conpasswond=$_POST["Verfpassword"];
    $select=$_POST["select"];
    $audomaine=$_POST["audomaine"];
        //echo $nom." ".$prenom." ".$date." "." ".$adress." ".$gender." ".$password."".$conpasswond." ".$select." ".$audomaine;
    } 



    


?>
<body>

    <table border="2">
        <tr>
            <td>Nom :</td>
            <td><?php echo $nom;?></td>
        </tr>
        <tr>
            <td>Prenom :</td>
            <td><?php echo $prenom;?></td>
        </tr>
        <tr>
            <td>date :</td>
            <td><?php echo $date;?></td>
        </tr>
        <tr>
            <td>Adress</td>
            <td><?php echo $adress;?></td>
        </tr>
        <tr>
            <td>gender</td>
            <td><?php echo $gender;?></td>
        </tr>
        <tr>
            <td>password</td>
            <td><?php echo $password;?></td>
        </tr>
        <tr>
            <td>Confirmation password</td>
            <td><?php echo $conpasswond;?></td>
        </tr>
        <tr>
            <td>Options</td>
            <td><?php echo $select;?></td>
        </tr>
        <tr>
            <td>Autre domaine</td>
            <td><?php echo $audomaine;?></td>
        </tr>
    </table>
    
</body>

</html>