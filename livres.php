<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="index.css" type="text/css" />
    <title>Bibliothèque de Livres - Vincent</title>
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
        <div id='tableau'>
            <table>
                <caption>Liste de livres</caption>
                <thead>
                    <tr>
                        <th>Titre du livre</th>
                        <th>Auteur de livre</th>
                        <th>Nb de pages</th>
                        <th>Disponibilité</th>
                        <th>Total</th>
                        <th>
                            <a href="livre.html" title="Ajouter un nouveau livre"><img alt="Ajouter un nouveau livre"
                                    src="img/add_livre.png" /></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Harry Potter à l'école des sorciers</td>
                        <td>J. K. Rowling</td>
                        <td>329 pages</td>
                        <td>50</td>
                        <td>100</td>
                        <td><a href="utilisateur.html?id=1" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Voyage au bout de la nuit</td>
                        <td>Louis-Ferdinand Céline</td>
                        <td>179 pages</td>
                        <td>25</td>
                        <td>100</td>
                        <td><a href="utilisateur.html?id=2" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Cent ans de solitude</td>
                        <td>Gabriel García Márquez</td>
                        <td>149 pages</td>
                        <td>30</td>
                        <td>125</td>
                        <td><a href="utilisateur.html?id=3" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Le seigneur des anneaux T.1 : La fraternité de l'anneau</td>
                        <td>J.R.R. Tolkien</td>
                        <td>290 pages</td>
                        <td>2</td>
                        <td>20 000</td>
                        <td><a href="utilisateur.html?id=4" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>1984</td>
                        <td>George Orwell</td>
                        <td>150 pages</td>
                        <td>2</td>
                        <td>20 000</td>
                        <td><a href="utilisateur.html?id=5" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>L'étranger</td>
                        <td>Albert Camus</td>
                        <td>170 pages</td>
                        <td>2</td>
                        <td>20</td>
                        <td><a href="utilisateur.html?id=6" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Belle du seigneur</td>
                        <td>Albert Cohen</td>
                        <td>124 pages</td>
                        <td>2</td>
                        <td>200</td>
                        <td><a href="utilisateur.html?id=7" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Les misérables</td>
                        <td>Victor Hugo</td>
                        <td>120 pages</td>
                        <td>15</td>
                        <td>39</td>
                        <td><a href="utilisateur.html?id=8" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>La promesse de l'aube</td>
                        <td>Romain Gary</td>
                        <td>170 pages</td>
                        <td>97</td>
                        <td>100</td>
                        <td><a href="utilisateur.html?id=9" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>Le comte de Monte-Cristo</td>
                        <td>Alexandre Dumas</td>
                        <td>290 pages</td>
                        <td>2</td>
                        <td>20 000</td>
                        <td><a href="utilisateur.html?id=10" title="Modifier les utilisateurs">Modifier</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>2021 &copy; Vilfeu Vincent</p>
    </footer>
</body>

</html>