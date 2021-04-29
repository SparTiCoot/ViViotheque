<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="connexion.css" type="text/css" />
        <title>
            Bibliothèque de Livres - Vincent
        </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="container">
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>

                <label>Nom d'utilisateur</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label>Mot de passe</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label>Confirmation du mot de passe</label>
                <input type="password" placeholder="Entrer à nouveau votre mot de passe" name="password" required>

                <input type="submit" id="submit" value="LOGIN">
            </form>
        </div>
    </body>
</html>