<?php
// Include database connection at the top
try {
    include 'db.php';
} catch(Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}


$id = $nom = $email = "";
$error = "";
$success = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if(empty($_POST['id']) || empty($_POST['nom']) || empty($_POST['email'])) {
        $error = "Tous les champs sont obligatoires";
    } else {
        $id = htmlspecialchars($_POST['id']);
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Format d'email invalide";
        } else {
            try {
                $pre = $conn->prepare("INSERT INTO etudiant (id, nom, email) VALUES (:id, :nom, :email)");
                
                if($pre->execute([
                    ":etudient" => $id,
                    ":nom" => $nom,
                    ":email" => $email
                ])) {
                    
                    header('Location: header.php');
                    exit;
                } else {
                    $error = "Erreur lors de l'insertion";
                }
            } catch(PDOException $e) {
                $error = "Erreur : " . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .error {
            color: red;
        }
        input[type="text"], input[type="email"] {
            width: 300px;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        a {
            margin-left: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Ajouter un étudiant</h2>
    
    <?php if (!empty($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <input type="text" placeholder="ID" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Nom" name="nom" value="<?php echo $nom; ?>">
        </div>
        <div class="form-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
        </div>
        <input type="submit" value="Envoyer">
        <a href="header.php">Retour</a>
    </form>
</body>
</html>