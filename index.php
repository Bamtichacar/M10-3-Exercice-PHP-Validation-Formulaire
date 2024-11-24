<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Formulaire de contact</h1>
    <form action="traitement.php" method="POST">
<!--         <label for="nom">Nom :</label>  -->    
        Nom : <input type = "text" id="nom" name = "nom" placeholder = "Votre Nom" required><br><br>
<!--         <label for="genre">Genre :</label> -->
        Genre : <select id="genre" name="genre" required>
                    <option value="">--Sélectionnez--</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
        </select><br><br>
<!--         Genre : <input type = "text" name = "genre" placeholder = "Sexe" required><br><br>
 -->
<!--         <label for="email">Email :</label>  -->        
        E-mail : <input type = "email" id = "email" name = "email" placeholder = "françois.pignon@gmail.com" required><br><br>

<!--         <label for="sujet">Sujet :</label> -->        
        Sujet : <input type = "text" id = "sujet" name = "sujet" placeholder = "Titre" required><br><br>

<!--         <label for="message">Message :</label>  -->       
<!--         <textarea id="message" name="message" rows="5" required></textarea><br><br>  -->

        Message : <textarea id = "message" name = "message" rows = "7" cols = "30"placeholder = "Noter votre message" required></textarea><br><br>

        <input type = "submit" />
<!--         <button type="submit">Envoyer</button>
 -->

    </form>

</body>
</html>
<?php include 'footer.php'; ?>
