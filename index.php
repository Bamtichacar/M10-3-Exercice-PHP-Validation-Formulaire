<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<!-- Validation de formulaire en PHP
Consignes
Créer un formulaire sur un fichier index.php avec les champs :
nom
genre
email
sujet
message
Faire la validation en PHP pour ce formulaire sur un fichier traitement.php
Lister les infos de l'utilisateur sur une page infos.php
Votre nom :
Votre adresse mail :
Genre :
Le sujet :
Le message :
Créer un header et un footer (dans des fichiers header.php et footer.php) et les inclure dans le fichierinfos.php
N'oubliez pas le CSS  -->

    <h1>Formulaire de contact</h1>
<!--     <form action="traitement.php" method="POST" name = "formDeContact"> // si on veut que le mess dans traitement apparaisse en enleve cette ligne et a la place :
 -->        <form action="#" method="POST" name = "formDeContact">  <!-- en mettant ca il faut mettre encludes cf juste apres input tupe submit -->
        Nom : <input type = "text" name = "nom" placeholder = "Votre Nom" required><br><br>
        Genre : <select id="genre" name="genre" required>
                    <option value="">--Sélectionnez--</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
        </select><br><br>
        E-mail : <input type = "email" name = "email" placeholder = "françois.pignon@gmail.com" required><br><br>
        Sujet : <input type = "text" name = "sujet" placeholder = "Titre" required><br><br>
        Message : <textarea name = "message" rows = "7" cols = "30"placeholder = "Noter votre message" required></textarea><br><br>
        <input type = "submit" name="clickinput"/>
        <?php include 'traitement.php'; ?>     <!-- a metttre si action de form est # -->
        </form>

</body>
</html>
<?php include 'footer.php'; ?>
