<!DOCTYPE html>
<html lang="fr">
<head>
    <title>CRUD avec PHP et MySQL (PDO)</title>
</head>
<body>
<h1>Gestion des étudiants</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <button type="submit" name="ajouter">Ajouter</button>
</form>

<?php
$dsn = "mysql:host=localhost;dbname=etudiant;charset=utf8mb4";
$user = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if (isset($_POST['ajouter'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);

    try {
        $sql = "INSERT INTO etudiants (nom, prenom) VALUES (:nom, :prenom)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nom' => $nom, 'prenom' => $prenom]);

        if ($stmt->rowCount() > 0) {
            echo "<p>Étudiant ajouté avec succès.</p>";
        } else {
            echo "<p>Erreur lors de l'ajout de l'étudiant.</p>";
        }
    } catch (PDOException $e) {
        echo "<p>Erreur : " . $e->getMessage() . "</p>";
    }
}

if (isset($_GET['supprimer'])) {
    $id = intval($_GET['supprimer']);

    try {
        $sql = "DELETE FROM etudiants WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        echo "<p>Étudiant supprimé avec succès.</p>";
    } catch (PDOException $e) {
        echo "<p>Erreur : " . $e->getMessage() . "</p>";
    }
}

try {
    $sql = "SELECT * FROM etudiants";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        echo "<h2>Liste des étudiants</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Actions</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
            echo "<td><a href='?supprimer=" . $row['id'] . "' onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');\">Supprimer</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Aucun étudiant trouvé.</p>";
    }
} catch (PDOException $e) {
    echo "<p>Erreur : " . $e->getMessage() . "</p>";
}

$pdo = null;
?>
</body>
</html>