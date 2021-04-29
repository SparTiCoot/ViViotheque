<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="index.css" type="text/css" />
    <title>
        Bibliothèque de Livres - Vincent
    </title>
    <meta charset="UTF-8">
</head>

<body>
    <div class="centrer">
        <h1><span>ViViothèque</span></h1>
        <div class="menu">
            <ul id="navigation">
                <li><a href="index.html" title="Accueil">Accueil</a></li>
                <li><a href="livres.html" title="Les livres">Livres</a></li>
                <li><a href="utilisateurs.html" title="Les utilisateurs">Utilisateurs</a></li>
                <li><a href="livre.html" title="Ajout Livre">Ajout Livre</a></li>
                <li><a href="utilisateur.html" title="Ajout Utilisateur">Ajout Utilisateur</a></li>
            </ul>
        </div>
        <div id="container">
            <form action="verification.php" method="POST">
                <h2>Créer un nouvel utilisateur</h2>

                <label>Login</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label>Prénom</label>
                <input type="text" placeholder="Entrer le prénom" name="name" required>

                <label>Nom</label>
                <input type="text" placeholder="Entrer le nom" name="lastname" required>

                <label>Mail</label>
                <input type="email" placeholder="Entrer le mail" name="email" required>

                <label>Date de naissance</label>
                <input type="date" name="dateBirth" required>

                <input type="submit" id="submit" value="Créer">
            </form>
        </div>
    </div>
    <footer>
        <p>2021 &copy; Vilfeu Vincent</p>
    </footer>
</body>

</html>