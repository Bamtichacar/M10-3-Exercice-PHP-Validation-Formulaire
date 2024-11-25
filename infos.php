<?php
session_start();
/* if (!isset($_SESSION['user_data'])) {
    echo "Aucune information utilisateur disponible.";
    exit;
}
 */
$user = $_SESSION['user_data'];
include 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
</head>
<body>
    <h1>Informations de l'utilisateur</h1>
    <p><strong>Votre nom :</strong> <?php echo $user['nom']; ?></p>
    <p><strong>Votre adresse mail :</strong> <?php echo $user['email']; ?></p>
    <p><strong>Genre :</strong> <?php echo $user['genre']; ?></p>
    <p><strong>Le sujet :</strong> <?php echo $user['sujet']; ?></p>
    <p><strong>Le message :</strong> <?php echo $user['message']; ?></p>
</body>
</html>
<?php include 'footer.php'; ?>
