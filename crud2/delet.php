<?php
// Include database connection at the top
try {
    include 'db.php';
} catch(Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize variables to hold form data and messages
$id = "";
$message = "";
$success = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['id'])) {
        $message = "L'ID de l'étudiant est obligatoire";
    } else {
        $id = htmlspecialchars($_POST['id']);
        
        try {
            $pre = $conn->prepare("DELETE FROM etudiant WHERE id = :id");
            
            if($pre->execute([":id_etudient" => $id])) {
                $success = true;
                $message = "Étudiant supprimé avec succès";
                $id = ""; // Clear input field
            } else {
                $message = "Erreur lors de la suppression";
            }
        } catch(PDOException $e) {
            $message = "Erreur : " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 8px 15px;
            background-color: #d9534f;
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
    <h2>Supprimer un étudiant</h2>
    
    <?php if (!empty($message)): ?>
        <div class="message <?php echo $success ? 'success' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <input type="text" placeholder="ID de l'étudiant à supprimer" name="id" value="<?php echo $id; ?>">
        </div>
        <input type="submit" value="Supprimer">
        <a href="header.php">Retour</a>
    </form>
</body>
</html>