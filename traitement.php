<?php
// validation des champs
if(isset($_POST["clickinput"])){
$formDeContact = $_POST;
$nom = $_POST['nom'];
$genre = $_POST['genre'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

// vérification des champs obligatoires parie 1/2
if ($nom && $genre && $email && $sujet && $message) {
    // Stockage des données en session pour les afficher dans infos.php
    session_start();
    $_SESSION['user_data'] = [
        'nom' => $nom,
        'genre' => $genre,
        'email' => $email,
        'sujet' => $sujet,
        'message' => $message,
    ];

/*     $_SESSION['nom'] = $nom;
    $_SESSION['genre'] = $genre;
    $_SESSION['email'] = $email;
    $_SESSION['sujet'] = $sujet;
    $_SESSION['message'] = $message;
 */    header('Location: infos.php');          // renvoi sur la page infos.php
} else { // vérification des champs obligatoires parie 2/2
    echo "Tous les champs doivent être remplis et valides.";
}
}
?>

