<?php
// Vérification que les données sont envoyées par POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validation des champs
    $nom = htmlspecialchars($_POST['nom']);
    $genre = htmlspecialchars($_POST['genre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : null;
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification des champs obligatoires
    if (!$nom || !$genre || !$email || !$sujet || !$message) {
        echo "Tous les champs doivent être remplis et valides.";
        exit;
    }

    // Stocker les données en session pour l'afficher dans infos.php
    session_start();
    $_SESSION['user_data'] = [
        'nom' => $nom,
        'genre' => $genre,
        'email' => $email,
        'sujet' => $sujet,
        'message' => $message,
    ];

    // Redirection vers la page infos.php
    header('Location: infos.php');
    exit;
} else {
    echo "Aucune donnée reçue.";
}
