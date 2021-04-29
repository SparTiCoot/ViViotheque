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
        <div class="ajout">
            <a href="utilisateur.html" title="Créer un nouvel utilisateur">New user</a>
        </div>
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
                <caption>Liste d'utilisateurs</caption>
                <thead>
                    <tr>
                        <th>Login</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Date naissance</th>
                        <th>
                            <a href="utilisateur.html" title="Ajouter un nouvel utilisateur"><img
                                    alt="Ajouter un nouvel utilisateur" src="img/add_utilisateur.png" /></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>S.Renaud</td>
                        <td>Silvain</td>
                        <td>Renaud</td>
                        <td>Silvain.Renaud@gmail.com</td>
                        <td>27/03/1979</td>
                        <td><a href="utilisateur.html?id=1" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>G.Monptaine</td>
                        <td>George</td>
                        <td>Monptaine</td>
                        <td>George.Monptaine@gmail.com</td>
                        <td>22/05/1992</td>
                        <td><a href="utilisateur.html?id=2" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>G.Donovan</td>
                        <td>Gabriel</td>
                        <td>Donovan</td>
                        <td>Gabriel.Donovan@gmail.com</td>
                        <td>10/09/1998</td>
                        <td><a href="utilisateur.html?id=3" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>B.LeMarchand</td>
                        <td>Baptiste</td>
                        <td>Le Marchand</td>
                        <td>Baptiste.Le_Marchand@gmail.com</td>
                        <td>01/06/1983</td>
                        <td><a href="utilisateur.html?id=4" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>K.Mbappe</td>
                        <td>Kylian</td>
                        <td>Mbappe</td>
                        <td>Kylian.Mbappe@gmail.com</td>
                        <td>20/12/1998</td>
                        <td><a href="utilisateur.html?id=5" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>T.Alvarez</td>
                        <td>Tiago</td>
                        <td>Alvarez</td>
                        <td>Tiago.Alvarez@gmail.com</td>
                        <td>24/04/1996</td>
                        <td><a href="utilisateur.html?id=6" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>L.Depardieu</td>
                        <td>Louise</td>
                        <td>Depardieu</td>
                        <td>Louise.Depardieu@gmail.com</td>
                        <td>25/08/1995</td>
                        <td><a href="utilisateur.html?id=7" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>E.Hawking</td>
                        <td>Emma</td>
                        <td>Hawking</td>
                        <td>Emma.Hawking@gmail.com</td>
                        <td>24/07/1989</td>
                        <td><a href="utilisateur.html?id=8" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>R.Juliette</td>
                        <td>Rose</td>
                        <td>Juliette</td>
                        <td>Rose.Juliette@gmail.com</td>
                        <td>13/01/1993</td>
                        <td><a href="utilisateur.html?id=9" title="Les utilisateurs">Modifier</a></td>
                    </tr>
                    <tr>
                        <td>N.Richi</td>
                        <td>Nina</td>
                        <td>Richi</td>
                        <td>Nina.Richi@gmail.com</td>
                        <td>02/03/1998</td>
                        <td><a href="utilisateur.html?id=10" title="Les utilisateurs">Modifier</a></td>
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