<?php

$dsn = "mysql:host=localhost;dbname=form;charset=utf8mb4";
$user = "root";
$password = "";
try {
    $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
if($conn &&empty($nom) &&empty($prenom)||empty($email) &&empty($mdp)){
    echo '<span><p id="a">You are not connected sir :</p></span>';
}
else{
     echo '<span><p>You are connected sir :</p></span> <br>';
     echo 'Prenom: ',$prenom,'<br>','Nom: ',$nom,'<br>','Email :',$email,'<br>','Mot de pass :',$mdp;
    echo '<button><a href="session.php">Next page ></a></button>';

}
  try {
$pre = $conn->prepare("INSERT INTO users (nom, prenom, mdp) VALUES (:nom, :prenom, :email,:mdp)");

if($pre->execute([
":prenom" => $prenom,
":nom" => $nom,
":email" => $email,
":mdp"=>$mdp
])); 

else {
$error = "Erreur lors de l'insertion";

}} catch(PDOException $e) {
$error = "Erreur : " . $e->getMessage();
}





    






?>

