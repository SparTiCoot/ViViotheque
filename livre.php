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
                <h2>Ajouter un nouveau livre</h2>

                <label>Titre du livre</label>
                <input type="text" placeholder="Entrer le titre du livre" name="bookTitle" required>

                <label>Auteur du livre</label>
                <input type="text" placeholder="Entrer l'auteur du livre" name="author" required>

                <label>Nombre de pages</label>
                <input type="number" placeholder="Entrer le nombre de page du livre" name="nbPages" required>

                <label>Nombre d'exemplaires disponible</label>
                <input type="number" placeholder="Entrer le nombre d'exemplaire disponible" name="nbCopyAvailable"
                    required>

                <label>Nombre d'exemplaires total</label>
                <input type="number" placeholder="Entrer le nombre d'exemplaire total" name="nbTotalCopy" required>

                <input type="submit" id="submit" value="Ajouter">
            </form>
        </div>
    </div>
    <footer>
        <p>2021 &copy; Vilfeu Vincent</p>
    </footer>
</body>

</html>